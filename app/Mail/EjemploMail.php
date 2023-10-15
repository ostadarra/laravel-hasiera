<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class EjemploMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $nombre){}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Este es un correo de ejemplo',
            //from: new Address('ostadarra@ostadarra.eus', 'Juan Carlos Beaskoetxea'),
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            // replyTo: [
            //     new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            // ]
            );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.ejemplo',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
