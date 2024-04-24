<?php

namespace App\Mail;

use App\Models\Package;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendBookingMail extends Mailable
{
    use Queueable, SerializesModels;
    public $bookingInfo;
    public $packageName;

    /**
     * Create a new message instance.
     */
    public function __construct($bookingInfo)
    {
        $this->bookingInfo = $bookingInfo;
        $package = Package::find($bookingInfo['package']);
        $this->packageName = $package->title;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.booking',
        );
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
