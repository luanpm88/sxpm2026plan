<?php

namespace App\Http\Controllers;

use App\Mail\ContactLeadMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactSubmissionController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:60'],
            'company' => ['nullable', 'string', 'max:160'],
            'project_type' => ['nullable', 'string', 'max:120'],
            'budget' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if (! $this->passesTurnstile($request)) {
            return back()
                ->withInput()
                ->withErrors(['contact_form' => __('contact.captcha_failed')]);
        }

        $payload = [
            'submitted_at' => now()->toIso8601String(),
            'locale' => app()->getLocale(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? '',
            'company' => $validated['company'] ?? '',
            'project_type' => $validated['project_type'] ?? '',
            'budget' => $validated['budget'] ?? '',
            'message' => $validated['message'],
            'source' => 'landing_contact_form',
            'page_url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ];

        // Always record the lead first, so a customer is never lost even if every
        // outbound channel fails (e.g. mail provider outage).
        Log::channel('stack')->info('Contact lead received', $payload);

        $results = [
            'email' => $this->sendEmail($payload),
            'sheet' => $this->sendToGoogleSheets($payload),
            'telegram' => $this->sendToTelegram($payload),
        ];

        $hasConfiguredDestination = $results['sheet']['configured'] || $results['telegram']['configured'];
        $hasSuccessfulDelivery = $results['sheet']['ok'] || $results['telegram']['ok'];

        if (! $hasConfiguredDestination) {
            return back()
                ->withInput()
                ->withErrors(['contact_form' => __('contact.integration_not_configured')]);
        }

        if (! $hasSuccessfulDelivery) {
            return back()
                ->withInput()
                ->withErrors(['contact_form' => __('contact.submit_failed')]);
        }

        return back()->with('contact_success', __('contact.submit_success'));
    }

    /**
     * Cloudflare Turnstile spam check. Graceful when unconfigured (returns true),
     * and fails OPEN on a network error so a Cloudflare outage never drops a real
     * lead — only an explicit "success:false" from Cloudflare blocks the submit.
     */
    private function passesTurnstile(Request $request): bool
    {
        $secret = trim((string) config('services.turnstile.secret_key', ''));

        if ($secret === '') {
            return true; // not configured yet
        }

        $token = (string) $request->input('cf-turnstile-response', '');
        if ($token === '') {
            return false; // widget present but not solved
        }

        try {
            $response = Http::asForm()->timeout(10)
                ->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret' => $secret,
                    'response' => $token,
                    'remoteip' => $request->ip(),
                ]);

            return $response->json('success') === true;
        } catch (\Throwable $e) {
            Log::warning('Turnstile verify unreachable — allowing submission', [
                'message' => $e->getMessage(),
            ]);

            return true; // fail open: never lose a lead to a CF outage
        }
    }

    private function sendEmail(array $payload): array
    {
        $to = trim((string) config('services.contact.notify_to', ''));

        if ($to === '') {
            return ['configured' => false, 'ok' => false];
        }

        try {
            $name = (string) config('services.contact.notify_name', 'Contact');
            Mail::to($to, $name)->send(new ContactLeadMail($payload));

            return ['configured' => true, 'ok' => true];
        } catch (\Throwable $e) {
            Log::error('Contact email failed', [
                'message' => $e->getMessage(),
                'to' => $to,
            ]);

            return ['configured' => true, 'ok' => false];
        }
    }

    private function sendToGoogleSheets(array $payload): array
    {
        $webhookUrl = (string) config('services.google_sheets.webhook_url', '');

        if ($webhookUrl === '') {
            return ['configured' => false, 'ok' => false];
        }

        try {
            /** @var \Illuminate\Http\Client\Response $response */
            $response = Http::timeout(12)
                ->acceptJson()
                ->post($webhookUrl, $payload);

            return [
                'configured' => true,
                'ok' => $response->successful(),
            ];
        } catch (\Throwable $e) {
            Log::warning('Google Sheets webhook failed', [
                'message' => $e->getMessage(),
            ]);

            return ['configured' => true, 'ok' => false];
        }
    }

    private function sendToTelegram(array $payload): array
    {
        $botToken = (string) config('services.telegram.bot_token', '');
        $chatId = (string) config('services.telegram.chat_id', '');

        if ($botToken === '' || $chatId === '') {
            return ['configured' => false, 'ok' => false];
        }

        $text = implode("\n", [
            'New Contact Lead',
            '-------------------------',
            'Name: ' . $payload['name'],
            'Email: ' . $payload['email'],
            'Phone: ' . ($payload['phone'] ?: 'N/A'),
            'Company: ' . ($payload['company'] ?: 'N/A'),
            'Project Type: ' . ($payload['project_type'] ?: 'N/A'),
            'Budget: ' . ($payload['budget'] ?: 'N/A'),
            'Locale: ' . $payload['locale'],
            'Submitted: ' . $payload['submitted_at'],
            '-------------------------',
            'Message:',
            $payload['message'],
        ]);

        try {
            /** @var \Illuminate\Http\Client\Response $response */
            $response = Http::timeout(12)
                ->asForm()
                ->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);

            return [
                'configured' => true,
                'ok' => $response->successful(),
            ];
        } catch (\Throwable $e) {
            Log::warning('Telegram notification failed', [
                'message' => $e->getMessage(),
            ]);

            return ['configured' => true, 'ok' => false];
        }
    }
}
