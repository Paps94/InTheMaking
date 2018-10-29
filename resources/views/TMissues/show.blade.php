@extends('layouts.app')

<!--Dropzone css-->
<link rel="stylesheet" href="/css/dropzone.css">

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">

<!--Animate css-->
<link rel="stylesheet" href="/css/animate.css">
@section('content')


<div style="padding-top: 10px;" class="jumbotron">
  <div class="container con">
    <h1>{{ $tmissue->name }}</h1>
    <div class="row">
      <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <label for="validationDeadline">Deadline: {{ $tmissue->deadline->format('l jS \\of F Y') }} || {{ Carbon\Carbon::now()->parse($tmissue->deadline)->diffForHumans() }}</label>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <label for="validationPriority">Priority: {{ $tmissue->priority }}</label>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <form action="{{ route('tmissues.destroy', [$tmissue->id]) }}" method="POST" >
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
          <button title="Delete" type="submit" href="{{ route('tmissues.destroy', [$tmissue->id]) }}" class="btn btn-success btn-lg viewbtn"> Completed </button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <a class="btn btn-primary btn-lg viewbtn" href="/tmissues" role="button">View All Issues</a>
      </div>

    </div>
  </div>
</div>

  <div class="container con">
    <div class="row row-45 row-md-60 submit-form text-left">
      <div class="col-12">
        <label for="validationName">Description:</label>
        <p>{!! nl2br($tmissue->description) !!}</p>
      </div>
    </div>
  </div>

@include('flash')
@endsection
