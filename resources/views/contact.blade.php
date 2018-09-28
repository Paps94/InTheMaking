@extends('layouts.app')

<!--Contact css-->
<link rel="stylesheet" href="/css/contact.css">

<!--SweetAlerts2 css-->
<link rel="stylesheet" href="/css/sweetalert2.css">

@section('content')

<div class="contactContainer">
	@include('layouts.partials._alert')
		<div class="contactInfoWrap">
			<span class="contactSymbol">
				<img src="{{ asset('images/portfolio/icons/email.svg') }}" alt="SYMBOL-MAIL">
			</span>
			<a href="/"><i class="fas fa-arrow-left"></i></a>
			<form method="post" action="{{ route('contact.store') }}" class="contactInfo">

				{{ csrf_field() }}
			  <span class="contactInfoComment"> Got any feedback for me? </span>
        <span class="contactInfoComment"> Possibly a job offer :D? </span>
				<span class="contactInfoTitle">
					Get In Touch
				</span>
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
					<input class="detailWrapInfo form-control" type="text" name="subject" placeholder="e.g.  This has to be the most unprofessional portfolio I have ever seen">
					<span class="focus-detailWrapInfo"></span>
				</div>
        <h6 id="titles">Description</h6>
				<div class="detailWrap">
					<textarea class="detailWrapInfo form-control" name="message" placeholder="e.g.   Please..."></textarea>
					<span class="focus-detailWrapInfo"></span>
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

	<!-- Script for the back button -->
	<script>
		function goBack() {
		    window.history.back();
		}
	</script>
@endsection
