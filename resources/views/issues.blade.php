@extends('layouts.app')

<!--Contact css-->
<link rel="stylesheet" href="/css/issues.css">
@section('content')

<div class="banner-area" id="slider-area">
  <div id="particles-js"></div>
    <div class="banner-table">
        <div class="header">
            <div class="welcome-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="important">Welcome,</span> <br> <span style="float: right; padding-top: 10px;">to the issues you need to resolve!</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="welcome-text-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Let's get started shall we??? <span class="smily">:D</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/particles.js') }}"></script>
<script>
    particlesJS.load('particles-js', 'json/particles.json', function () {
        console.log('callback - particles.js config loaded')
    })
</script>
@endsection
