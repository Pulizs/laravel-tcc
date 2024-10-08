<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TesteMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $emailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dadosEmail)
    {
        $this->emailData = $dadosEmail;
    }
    
    public function build()
    {
        return $this->subject('E-mail de teste')
        ->view('email.emailteste');
    }
    

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Teste Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.emailteste',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
