<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Digiformemail extends Mailable
{
    use Queueable, SerializesModels;

    public $reg_id;
    public $nama;
    public $nomornika;

    /**
     * Create a new message instance.
     */
    public function __construct($reg_id,$nama,$nomornika)
    {
        //
        $this->reg_id=$reg_id;
        $this->nama=$nama;
        $this->nomornika=$nomornika;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Digiform Bank Victoria',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'cthemail',
        );
    }

    public function build()
    {
        return $this->from('estatement@victoriabank.co.id', 'Digital Form')
            ->view('cthemail')
            ->subject('Data Nasabah')
            ->with([
                'reg_id' => $this->reg_id,
                'nama' => $this->nama,
                'nomornika' => $this->nomornika,
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
