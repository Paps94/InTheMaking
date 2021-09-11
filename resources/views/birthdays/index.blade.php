@extends('layouts.app')


<!--JQuery-->
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

<!--Isotope js-->
<script type="text/javascript" src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>

<!--Particles js-->
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>

<!--App css-->
<link rel="stylesheet" href="/css/app.css">

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">

@section('content')
@include('flash')
<div class="banner-area" id="slider-area">
  <div id="particles-js1"></div>
    <div class="banner-table">
        <div class="headerSpec">
          <div class="welcome-text">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                <span class="important">Birthday Reminder!!!</span>
                </div>
                <a class="btn btn-danger btn-lg addIssue" href="{{ route('birthdays.create') }}" role="button">Add new birthday</a>
              </div>
            </div>
            <div class="container-fluid">
              <div class="col-12" style="padding: 0; margin-bottom: 15px;">
                <h2 id="isotopeTitles">Priority</h2>
                <div id="filters" class="button-group">
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn is-checked" data-filter="*">Show all</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".male">Male</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".female">Female</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".friends">Friends</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".family">Family</button>
                </div>

                <h2 id="isotopeTitlesS">Sort</h2>
                <div id="sorts" class="button-group">
                  <button class="sortBtn is-checked" data-sort-by="original-order">Original Order</button>
                  <button class="sortBtn shuffle-button" data-sort-by="random">Random</button>
                  <button class="sortBtn" data-sort-by="name">Name</button>
                  <button class="sortBtn" data-sort-by="birthday">Upcoming Birthday</button>
                  <button class="sortBtn" data-sort-by="gender">Gender</button>
                  <button class="sortBtn" data-sort-by="relationship">Relationship</button>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="grid isotope row row-45 row-md-60 clearleft-custom">
            @foreach ($birthdays as $birthday)
            <div class="isotope-item col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInUp element-item" data-wow-delay=".2s">
              <div class="card-group">
                <div class="card">
                  <div class="thumbnail"><a class="img-link" href=""><img src="{{ asset('images/home/contractthumb.jpg') }}"/></a></div>
                    <div class="card-body">
                      <div class="caption">
                        <h4 class="name">{{$birthday->name}}</h4>
                        <ul class="describe-1">
                          <label>Birthday:</label>
                          <li><img src="{{ asset('images/fonts/startDate.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::parse($birthday->birthday)->format('l jS \\of F Y')}}</li>
                          <li class="birthday" style="display: none;"><img src="{{ asset('images/fonts/startDate.svg') }}" class="svgIMGcard"/>{{$birthday->birthday}}</li>

                          <label class="labelStyle">Age:</label>
                          <li class="deadline"><img src="{{ asset('images/fonts/birthday.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::now()->parse($birthday->birthday)->age}} years old</li>

                          <label class="labelStyle">Days till birthday:</label>
                          <li class="deadline"><img src="{{ asset('images/fonts/daysTillBirthday.svg') }}" class="svgIMGcard"/>{{$birthday->days_till_birthday}}</li>

                          <label class="labelStyle">Relationship:</label>
                          <li class="relation"><img src="{{ asset('images/fonts/relation.svg') }}" class="svgIMGcard"/>{{$birthday->relation}}</li>

                          <label class="labelStyle">Gender:</label>
                          <li class="gender"><img src="{{ asset('images/fonts/gender.svg') }}" class="svgIMGcard"/>{{$birthday->gender}}</li>

                        <form action="{{ route('birthdays.destroy', [$birthday->id]) }}" method="POST" >
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
                          <button title="Delete" type="submit" href="{{ route('birthdays.destroy', [$birthday->id]) }}" class="btn btn-danger btn-danger-transparent btn-block deleteBtn" style="margin-top: 10px;"> Remove </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

          {{-- Use in the build in links() method to create the different pages --}}
          {{$birthdays->links()}}

      </div>
</div>

<script>
// external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    //Sort Name in alphabetical order
    name: '.name',
    gender: '.gender',
    relationship: '.relation',
    //Sort Issued based on the date they were created
    birthday: function( itemElem ) {
      var birthday = $( itemElem ).find('.birthday').text();
      var intDateIssued = Date.parse(birthday);
      //console.log(intDateIssued);
      return intDateIssued;
    },
  },
  sortAscending: {
    name: true,
    gender: true,
    relationship: true,
    birthday: true,
  }
});

// filter functions
var filterFns = {
};

//Keep randoming when the button is clicked not jsut once
$('.shuffle-button').on( 'click', function() {
  $grid.isotope('shuffle');
});

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});


// bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

</script>

<script>
    particlesJS.load('particles-js1', 'json/particles.json', function () {
        console.log('callback - particles.js config loaded')
    })
</script>
@endsection
