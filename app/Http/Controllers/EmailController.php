<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactUs(Request $request)
    {
        $details = [
            'title' => 'Contact Form Dimler',
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ];

        Mail::to('office@dimler.fr')->send(new \App\Mail\ContactFormMailable($details));

        return back()->with('success', 'Email sent successfully! We will get back to you shortly!');
    }

    public function newsLetter(Request $request){
        $details = [
            'title' => 'New Subscriber DIMLER',
            'email' => $request->email
        ];

        Mail::to('office@dimler.fr')->send(new \App\Mail\NewsletterMailable($details));

        return back()->with('subscribed', 'You were subscribed successfully!');
    }
}
