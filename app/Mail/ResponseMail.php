<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $noticeDetails;

    public function __construct($noticeDetails)
    {
        $this->noticeDetails = $noticeDetails;
    }


    public function build()
    {
        return $this->subject("Eric Says HELLO")->view('emails.notifysender');
    }
}
