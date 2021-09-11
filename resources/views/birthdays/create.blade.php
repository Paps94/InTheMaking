@extends('layouts.app')

<!--JQuery-->
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

<!--Moment js-->
<script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}"></script>

<!--DateRangePicker js-->
<script type="text/javascript" src="{{ URL::asset('js/daterangepicker.js') }}"></script>

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">

<!--DateRangePicker css-->
<link rel="stylesheet" href="/css/daterangepicker.css">
@section('content')

<div class="jumbotron">
  <div class="container con">
    <iframe src="/audio/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
    <audio style="width: 100%; border-radius: 33px;" src="/audio/NyanCatOrchestra.mp3" controls  >
    <p>If you are reading this, it is because your browser does not support the audio element.</p>
    </audio>
    <h1 class="display-3">You made a new friend? OMEGALUL</h1>
    <p>I am kidding.. KRAPA</p>
    <a class="btn btn-primary btn-lg viewbtn" href="{{ route('birthdays.index') }}" role="button">View All Birthdays</a>
  </div>
</div>

  <div class="container con">
    <div class="row row-45 row-md-60 submit-form text-left">
      <div class="col-12">
        <!-- RD form-->
        <form method="post" action="{{ route('birthdays.store') }}" class="inset-6">
          {{ csrf_field() }}
          @include('layouts.partials._alert')
          <div class="row">
            <div class=" col-xs-12 col-sm-4	col-md-3 col-lg-3 col-xl-3">
              <label for="validationName" id="inputLabel">Name</label>
              <input type="text" class="form-control is-valid" id="validationName" placeholder="Enter a persons name" name="name" >
            </div>
            <div class=" col-xs-12 col-sm-4	col-md-3 col-lg-3 col-xl-3">
              <label for="validationBierhday" id="inputLabel">Birthday</label>
              <input type="text" class="form-control is-valid" id="validationBierhday" name="birthday"/>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <label for="validationGender" id="inputLabel">Gender</label>
              <div class="form-check form-check-inline ">
                <label class="radio-inline"> <input type="radio" name="gender" id="priorityMale" value="male"> Male </label>
                <label class="radio-inline"> <input type="radio" name="gender" id="priorityFemale" value="female"> Female </label>
              </div>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <label for="validationRelation" id="inputLabel">Relation</label>
              <div class="form-check form-check-inline ">
                <label class="radio-inline"> <input type="radio" name="relation" id="priorityFamily" value="family"> Family </label>
                <label class="radio-inline"> <input type="radio" name="relation" id="priorityFriend" value="friend"> Friend </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input class="btn btn-lg btn-primary submitBtn" type="submit" value="Add new birthday"/>
          </div>
      </div>
    </form>
  </div>


  @include('flash')

<script>
    $('input[name="birthday"]').daterangepicker({
        locale: {
          format: "DD-MM-YYYY",
            "monthNames": [
               "January",
               "February",
               "March",
               "April",
               "May",
               "June",
               "July",
               "August",
               "September",
               "October",
               "November",
               "December"
          ],
             "daysOfWeek": [
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa",
                "Su",
              ],
        },
      singleDatePicker: true,
      birthday: new Date(),
      showDropdowns: false,
      showCustomRangeLabel: false,
      alwaysShowCalendars: false,
      drops: "down",
      opens: "center",
  });
</script>
@endsection
