@extends('layouts.app')

<!--Dropzone css-->
<link rel="stylesheet" href="/css/dropzone.css">

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">
@section('content')


<div style="padding-top: 10px;" class="jumbotron">
  <div class="container con">
    <h1>{{ $issue->name }}</h1>
    <div class="row">
      <div class=" col-xs-12 col-sm-12	col-md-3 col-lg-3 col-xl-3">
        <label for="validationDeadline">Deadline: {{ $issue->deadline }}</label>
      </div>
      <div class=" col-xs-12 col-sm-12	col-md-3 col-lg-3 col-xl-3">
        <label for="validationPriority">Priority: {{ $issue->priority }}</label>
      </div>
      <div class=" col-xs-12 col-sm-12	col-md-3 col-lg-3 col-xl-3">
        <a class="btn btn-primary btn-lg viewbtn" href="/issues" role="button">View All Issues</a>
      </div>
      <div class=" col-xs-12 col-sm-12	col-md-3 col-lg-3 col-xl-3">
        <form action="{{ route('issues.destroy', [$issue->id]) }}" method="POST" >
                  <input type="hidden" name="_method" value="delete">
                  {{ csrf_field() }}
                  <button title="Delete" type="submit" href="{{ route('issues.destroy', [$issue->id]) }}" class="btn btn-success btn-lg viewbtn"> Completed </button>
        </form>
      </div>
    </div>
  </div>
</div>

  <div class="container con">
    <div class="row row-45 row-md-60 submit-form text-left">
      <div class="col-12">
        <label for="validationName">Description:</label>
        <p>{!! nl2br($issue->description) !!}</p>
      </div>
      <div class="col-12">
        <label>Image Upload:</label>
        <form id="addPhotosForm"class="dropzone" action="/issues/{{ $issue->id}}/photos" method="POST">
          {{ csrf_field() }}
        </form>
      </div>

      <div class="col-12">
        <label for="validationName">Screenshots:</label>
        @foreach ($issue->photos as $photo)
          <img src="{{ $photo->path }}" alt="">
        @endforeach
      </div>
    </div>
  </div>



<!--SweetAlerts2 js-->
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>

@include('flash')

  <!--Dropzone js-->
  <script type="text/javascript" src="{{ URL::asset('js/dropzone.min.js') }}"></script>

  <script>
    Dropzone.option.addPhotosForm = {
        paramName: 'photo',
        maxFilesize: 3,
        acceptFiles: '.jpg', '.jpeg', '.png'
    };
  </script>
@endsection
