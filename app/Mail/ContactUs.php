<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_mails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact_mails)
    {
        $this->contact_mails = $contact_mails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact_us');
    }
}
