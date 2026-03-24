<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

        $results = [
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
