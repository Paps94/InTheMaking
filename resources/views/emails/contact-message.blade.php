@extends('layouts.app')
@section('content')

<h3> Hey retard, somehow you have a contact request through your contact form</h3>
<br>
<h5>I am equally as surprised, yes.</h5>
<br>
<hr style="width: 100%;">
<div class="container">
  <div class="row">
    <div class="col-lg-6" >
       {{ $name }}
    </div>
    <div class="col-lg-6">
       {{ $email }}
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      {{ $subject }}
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      {{ $bodyMessage }}
    </div>
  </div>
</div>

@endsection
