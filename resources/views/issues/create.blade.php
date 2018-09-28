@extends('layouts.app')

<!--SwwetAlert2 js-->
<script type="text/javascript" src="{{ URL::asset('js/sweetalert2.min.js') }}"></script>

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">
@section('content')

<div class="jumbotron">
  <div class="container con">
    <iframe src="/audio/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
    <audio style="width: 100%; border-radius: 33px;" src="/audio/NyanCat.mp3" controls autoplay>
    <p>If you are reading this, it is because your browser does not support the audio element.</p>
    </audio>
    <h1 class="display-3">New issue pretty boy?</h1>
    <p>When are you going to learn!</p>
    <a class="btn btn-primary btn-lg viewbtn" href="/issues" role="button">View All Issues</a>
  </div>
</div>

  <div class="container con">
    <div class="row row-45 row-md-60 submit-form text-left">
      <div class="col-12">
        <!-- RD form-->
        <form method="post" action="{{ route('issues.store') }}" class="inset-6">
          {{ csrf_field() }}
          @include('layouts.partials._alert')
          <div class="row">
            <div class=" col-xs-12 col-sm-8	col-md-6 col-lg-6 col-xl-6">
              <label for="validationName">Name</label>
              <input type="text" class="form-control is-valid" id="validationName" placeholder="Enter a brief title" name="name" >
            </div>
            <div class=" col-xs-12 col-sm-4	col-md-3 col-lg-3 col-xl-3">
              <label for="validationDeadline">Deadline</label>
              <input type="date" class="form-control is-valid" id="validationDeadline" name="deadline" >
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <label for="validationPriority">Priority</label>
              <div class="form-check form-check-inline ">
                <label class="radio-inline"> <input type="radio" name="priority" id="priorityLow" value="Low"> Low </label>
                <label class="radio-inline"> <input type="radio" name="priority" id="priorityMedium" value="Medium"> Medium </label>
                <label class="radio-inline"> <input type="radio" name="priority" id="priorityHigh" value="High"> High </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label-outside small" style="margin-top: 20px;" for="Description">Description</label>
            <textarea style="height:150px;" class="form-control"  name="description" placeholder="" ></textarea>
          </div>
          <div class="form-group">
            <input class="btn btn-lg btn-primary submitBtn" type="submit" value="Submit New Issue"/>
          </div>
      </div>
    </form>
  </div>


  @include('flash')

@endsection
