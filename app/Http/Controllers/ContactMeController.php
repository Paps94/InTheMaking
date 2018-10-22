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
        'bodyMessage' => $request->message,
      );

      if ($results->success){
        Mail::send('emails.contact-message', $data, function ($mail) use($data) {
          $mail->from ($data['email'], $data['name']);
          $mail->to ('antreas.paps@yahoo.com');
          $mail->subject($data['subject']);
        });

        flash()->success('You are awesome!!!', 'Thank you for your message and have a great day!');
        return redirect()->route('home');
      } else {
        flash()->error('Something went wrong!!!', 'Make sure you filled everything and ticked the reCaptcha box!');
        return redirect('/contact')->withInput(Input::all());
      }
    }

}
