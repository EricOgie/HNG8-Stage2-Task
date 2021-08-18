<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailDetails;
    public function __construct($mailDetails)
    {
        $this->mailDetails = $mailDetails;
    }


    public function build()
    {
        $subject = $this->mailDetails['subject'];
        return $this->subject($subject)->view('emails.contact-mail');
    }
}
