@extends('layouts.app')

<!--Contact css-->
<link rel="stylesheet" href="/css/contact.css">

<!--reCaptcha js-->
<script src='https://www.google.com/recaptcha/api.js'></script>

@section('content')

<div class="contactContainer">
		<div class="contactInfoWrap">
			<span class="contactSymbol">
				<img src="{{ asset('images/portfolio/icons/email.svg') }}" alt="SYMBOL-MAIL">
			</span>
			<a href="/"><i class="fas fa-arrow-left"></i></a>
			<form method="post" action="{{ route('contact.store') }}" class="contactInfo">

				{{ csrf_field() }}
			  <span class="contactInfoComment"> Got any feedback for me? </span>
        <span class="contactInfoComment"> Possibly a job opportunity? </span>
				<span class="contactInfoTitle">
					Get In Touch
				</span>
				@include('layouts.partials._alert')
        <h6 id="titles">Name</h6>
				<div class="detailWrap form-group">
					<input class="detailWrapInfo form-control" type="text" name="name" placeholder="e.g.  Antreas Papadopoulos">
					<span class="focus-detailWrapInfo"></span>
				</div>
        <h6 id="titles">Email</h6>
        <div class="detailWrap">
					<input class="detailWrapInfo form-control" type="text" name="email" placeholder="e.g.  antreas.paps@yahoo.com">
					<span class="focus-detailWrapInfo"></span>
				</div>
        <h6 id="titles">Subject</h6>
        <div class="detailWrap">
					<input class="detailWrapInfo form-control" type="text" name="subject" placeholder="e.g.  I am lost for words">
					<span class="focus-detailWrapInfo"></span>
				</div>
        <h6 id="titles">Description</h6>
				<div class="detailWrap">
					<textarea class="detailWrapInfo form-control" name="message" placeholder="e.g.   This has to be the most unprofessional portfolio I have ever seen"></textarea>
					<span class="focus-detailWrapInfo"></span>
				</div>
				<h6 id="titles">Captcha</h6>
				<div class="detailWrap">
					<div class="g-recaptcha" data-sitekey="6LeYIHUUAAAAAFq5uZ2mnN1yxFzrz8b5EYvEtddh"></div>
					<!--	@if($errors->has('g-recaptcha-response'))
						<span class="invalid-feedback" style="display:block;">
							<strong>{{$errors->first('g-recaptcha-response')}}</strong>
						</span>
						@endif -->
				</div>
        <div class="containerButton">
  					<button class="submitButton">
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							<span style="padding-left: 15px;"></span> Send </span>
  					</button>
  				</div>
			</form>
		</div>
	</div>

	@include('flash')

	<!-- Script for the back button -->
	<script>
		function goBack() {
		    window.history.back();
		}
	</script>
@endsection
