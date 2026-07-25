<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactLeadMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string,string>  $lead
     */
    public function __construct(public array $lead)
    {
    }

    public function envelope(): Envelope
    {
        $name = $this->lead['name'] ?? 'Unknown';

        $replyTo = [];
        if (! empty($this->lead['email'])) {
            $replyTo[] = new Address($this->lead['email'], $name);
        }

        return new Envelope(
            subject: 'Liên hệ mới — ' . $name . (empty($this->lead['company']) ? '' : ' (' . $this->lead['company'] . ')'),
            replyTo: $replyTo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-lead',
            with: ['lead' => $this->lead],
        );
    }
}
