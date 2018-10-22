<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //Validation rules for the contact form
    public function rules()
    {
        return [
          'name'                  =>    'required|max:25',
          'email'                 =>    'required|email|min:7',
          'subject'               =>    'required|min:2',
          'message'               =>    'required|min:2',
          'g-recaptcha-response'  =>    'required'
        ];
    }

    //Custom validation messages
    public function messages() {
      return [
          'name.required'=> 'You didn\'t add a name <i class="fa fa-meh" style="font-size:20px;"></i> Hmmm.. I will call you Bob! Put Bob under "Name".',
          'name.max'=> 'Emmmm.. what kind of name is that!! Put a shorter one please.',

          'email.required'=> 'You either didn\'t enter an email or do you not have one? ..it\'s 2018 get yourself an email!',
          'email.email'=> 'That ain\'t no email senior!',
          'email.min'=> 'There is NO WAY your email is that short.. nope, no way.',

          'subject.required'=> 'I do need a subject here boss.. Ideally somewhat descriptive but a simple "Hi" will do I guess .',
          'subject.min'=> 'Eyyy boss, what kind of subject is that! At this point a simple "Hi" will do. <i class="far fa-flushed" style="font-size:20px;"></i>',

          'message.required'=> 'Psssst.. You didn\'t put a message for me. <i class="far fa-frown" style="font-size:20px;"></i>',
          'message.min'=> 'I mean you already did the trouble of coming here. Make the message meaningfull!',

          'g-recaptcha-response.required'=> 'I am scared of bots so to prove you ain\'t one.. complete the reCaptcha box!',
          'g-recaptcha-response.recaptcha'=>'Please ensure that you are a human!',

      ];
    }
}
