@extends('layouts.app')


<!--JQuery-->
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

<!--Isotope js-->
<script type="text/javascript" src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>

<!--SwwetAlert2 js-->
<script type="text/javascript" src="{{ URL::asset('js/sweetalert2.min.js') }}"></script>

<!--Particles js-->
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>

<!--App css-->
<link rel="stylesheet" href="/css/app.css">

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">
@section('content')

<div class="banner-area" id="slider-area">
  <div id="particles-js1"></div>
    <div class="banner-table">
        <div class="headerSpec">
          <div class="welcome-text">
            <div style="margin-bottom: 35px;"class="container">
              <div class="row">
                <div class="col-md-12">
                  <h4><span class="important">Welcome,</span> <br> <span id="subText" style="float: right; padding-top: 10px;">to the issues you need to resolve!</span></h4>
                </div>
                <a class="btn btn-danger btn-lg addIssue" href="{{ route('issues.create') }}" role="button">Add New Issue</a>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="btn-group-isotope">
                    <button class="btn btn-primary btn-shadow-1 btn-primary-transparent btn-block btn-min-width-sm active" data-isotope-filter="*" data-isotope-group="gallery">All</button>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="btn-group-isotope">
                    <button class="btn btn-primary btn-shadow-1 btn-primary-transparent btn-block btn-min-width-sm" data-isotope-filter="High" data-isotope-group="gallery">High</button>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="btn-group-isotope">
                    <button class="btn btn-primary btn-shadow-1 btn-primary-transparent btn-block btn-min-width-sm" data-isotope-filter="Medium" data-isotope-group="gallery">Medium</button>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="btn-group-isotope">
                    <button class="btn btn-primary btn-shadow-1 btn-primary-transparent btn-block btn-min-width-sm" data-isotope-filter="Low" data-isotope-group="gallery">Low</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="isotope row row-45 row-md-60 clearleft-custom" data-isotope-group="gallery" data-lightbox="gallery">
            @foreach ($issues as $issue)
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s" data-filter="{{$issue-> priority}}">
              <div class="card-group">
                <div class="card">
                  <div class="thumbnail"><a class="img-link" href="/issues/{{$issue->id}}"><img src="{{ asset('images/home/contractthumb.jpg') }}" /><span class="thumbnail-price">{{$issue->priority}}<span class="mon"> Priority</span></span></a></div>
                    <div class="card-body">
                      <div class="caption">
                        <h4>{{$issue->name}}</h4>
                        <ul class="describe-1">
                          <label>Start Date - End Date:</label>
                          <li><img src="{{ asset('images/fonts/startDate.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::parse($issue->created_at)->format('l jS \\of F Y')}}</li>
                          <li><img src="{{ asset('images/fonts/endDate.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::parse($issue->deadline)->format('l jS \\of F Y')}}</li>
                          <label class="labelStyle">Deadline:</label>
                          <li><img src="{{ asset('images/fonts/title.svg') }}" class="svgIMGcard"/>{{Carbon\Carbon::now()->parse($issue->deadline)->diffForHumans()}}</li>
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

@include('flash')

<script>
    particlesJS.load('particles-js1', 'json/particles.json', function () {
        console.log('callback - particles.js config loaded')
    })
</script>
@endsection
