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
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                <span class="important">Welcome, much to do...</span>
                </div>
                <a class="btn btn-danger btn-lg addIssue" href="{{ route('issues.create') }}" role="button">Add New Issue</a>
              </div>
            </div>
            <div class="container">
              <div class="col-12" style="padding: 0; margin-bottom: 15px;">
                <h2 id="isotopeTitles">Priority</h2>
                <div id="filters" class="button-group">
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn is-checked" data-filter="*">Show all</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".low">Low</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".medium">Medium</button>
                  <button class=" btn btn-primary btn-shadow-1 isotopeBtn" data-filter=".high">High</button>
                <!--   <button class="button" data-filter="ium">tmr</button>  -->
                </div>

                <h2 id="isotopeTitlesS">Sort</h2>
                <div id="sorts" class="button-group">
                  <button class="sortBtn is-checked" data-sort-by="original-order">Original Order</button>
                  <button class="sortBtn" data-sort-by="name">Name</button>
                <!--  <button class="sortBtn" data-sort-by="today">Today</button>
                  <button class="sortBtn" data-sort-by="tomorrow">Tomorrow</button>
                  <button class="sortBtn" data-sort-by="dateIssued">Date Issued</button>
                  <button class="sortBtn" data-sort-by="dateTerminated">Date Terminated</button> -->
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="grid isotope row row-45 row-md-60 clearleft-custom">
            @foreach ($issues as $issue)
            <div class="isotope-item col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInUp element-item {{$issue->priority}}" data-wow-delay=".2s">
              <div class="card-group">
                <div class="card">
                  <div class="thumbnail"><a class="img-link" href="/issues/{{$issue->id}}"><img src="{{ asset('images/home/contractthumb.jpg') }}"/><span class="thumbnail-price prio">{{$issue->priority}}<span class="mon"> Priority</span></span></a></div>
                    <div class="card-body">
                      <div class="caption">
                        <h4 class="name">{{$issue->name}}</h4>
                        <ul class="describe-1">
                          <label>Start Date - End Date:</label>
                          <li class="dateIssued"><img src="{{ asset('images/fonts/startDate.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::parse($issue->created_at)->format('l jS \\of F Y')}}</li>
                          <li class="dateTerminated"><img src="{{ asset('images/fonts/endDate.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::parse($issue->deadline)->format('l jS \\of F Y')}}</li>
                          <label class="labelStyle">Deadline:</label>
                          <li class="deadline"><img src="{{ asset('images/fonts/deadline.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::now()->parse($issue->deadline)->diffForHumans()}}</li>
                        <label class="labelStyle">Description:</label>                                                                                                                                                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
                        <p>{!! nl2br($issue->description) !!}</p>
                        <form action="{{ route('issues.destroy', [$issue->id]) }}" method="POST" >
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
                          <button title="Delete" type="submit" href="{{ route('issues.destroy', [$issue->id]) }}" class="btn btn-success btn-success-transparent btn-block deleteBtn"> Completed </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated: {{$issue->updated_at->diffForHumans()}}</small>
                </div>
              </div>
            @endforeach

          </div>
        </div>

          {{-- Use in the build in links() method to create the different pages --}}
          {{$issues->links()}}

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
    //Sort Issues ending the same day
    today: function( itemElem ) {
      var today = $( itemElem ).find('.deadline').text();
      return today.match( /hours from now/);
    },
    //Sort Issues ending the following days
    tomorrow: function( itemElem ) {
      var name = $( itemElem ).find('.deadline').text();
      return name.match( /1 day from now/ );
    },
    //Sort Issued based on the date they were created
    dateIssued: function( itemElem ) {
      var dateIssued = $( itemElem ).find('.dateIssued').text();
      //alter dateIssued by making in into integer and then sort
      return dateIssued;
    },
    //Sort Issued based on the date they end
    dateTerminated: function( itemElem ) {
      var dateTerminated = $( itemElem ).find('.dateTerminated').text();
      //alter dateTerminated by making in into integer and then sort
      return dateTerminated;
    },
  }
});

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});


// filter functions
var filterFns = {
  // show if number is greater than 50
  upcoming: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.deadline').text();
    return name.match( /1 day from now/ );
  }
};


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
