<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use Illuminate\Http\Request;
use Mail;

class ContactMeController extends Controller
{
    public function show()
    {
      return view('contact');
    }

    public function store(StoreFormValidation $request)
    {

      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      Mail::send('emails.contact-message', $data, function ($mail) use($data) {
        $mail->from ($data['email'], $data['name']);
        $mail->to ('antreas.paps@yahoo.com');
        $mail->subject($data['subject']);
      });

      flash()->success('You are awesome!!!', 'Thank you for your message and have a great day!');
      return redirect()->back();
      //return redirect()->route('home');
    }
}
