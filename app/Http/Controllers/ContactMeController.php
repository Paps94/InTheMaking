<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Mail;

class ContactMeController extends Controller
{
    public function show()
    {
      return view('contact');
    }

    public function store(StoreFormValidation $request)
    {

      $subject = $request->subject;
      
      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message,
      );

      Mail::to('antreas.paps@yahoo.com')->send(new ContactFormMail($data));

      flash()->success('You are awesome!!!', 'Thank you for your message and have a great day!');
      return redirect()->route('home');

    }

}
