<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ResponseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]
        );

        $mailDetails = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $noticeDetails = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => 'Eric Says HELLO',
            'message' => "Thankyou for reaching out to me, I will get back to you shortly. Do have a blessed day."
        ];

        // Send mail to my Box
        Mail::to('ebohnekwi@gmail.com')->send(new ContactMail($mailDetails));
        // Notify User of email sent
        Mail::to($request->email)->send(new ResponseMail($noticeDetails));

        $alertMessage = "Thank you for reaching out, $request->name. 
        I will do my best to revert as soon as possible. An Automatic
         response mail has been sent withregards.";

        return redirect()->back()->with('success', $alertMessage);
    }
}
