@extends('layouts.app')

<!--For the SVG animations js-->
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

<!--Bootstrap js-->
<script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>

<!--Magnific popup js-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script>

<!--Owl Carousel js-->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>

<!--Mixitup js-->
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>

<!--Owl Carousel js-->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>

<!--Typed js-->
<script type="text/javascript" src="{{ URL::asset('js/typed.js') }}"></script>

<!--particle js-->
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>

<!--Main js-->
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>


@section('content')
    <!--preloader starts-->

     <div class="loader_bg">
       <div class="loader">
       </div>
     </div>

    <!--preloader ends-->

    <!--navigation area starts-->

    <header class="nav-area navbar-fixed-top">
        <div id="special" class="container">
            <div class="row">
                <!--main menu starts-->

                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">

                            <div class="navbar-header">
                                <a href="/" class="navbar-brand">#Logo</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smooth-menu" href="#home">Home</a></li>
                                        <li><a class="smooth-menu" href="#about">About Me</a></li>
                                        <li><a class="smooth-menu" href="#resume">Resume</a></li>
                                        <li><a class="smooth-menu" href="#interests">Interests</a></li>
                                        <li><a class="smooth-menu" href="#projects">Projects</a></li>
                                        <li><a class="smooth-menu" href="#portfolio">Portfolio</a></li>
                                        <li><a class="smooth-menu" href="#testimonial">Testimonial</a></li>
                                        <li><a class="smooth-menu" href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main menu ends-->
            </div>
        </div>
    </header>

    <!--navigation area ends-->

    <!--slider area starts-->

    <div id="home"></div>
    <div class="banner-area" id="slider-area">
      <div id="particles-js"></div>
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Welcome, I am</h4>
                                <h2>Antreas Papadopoulos</h2>
                                <div class="text-affect"></div>
                                <p class="banner-btn"><a href="#contact">Contact Now</a></p>
                                <div class="clearfix"></div>
                                <div class="mouse-icon hidden-sm hidden-xs">
                                    <div class="wheel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--slider area ends-->

    <!--about area starts-->

    <div id="about" class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="about-left wow fadeInDown" data-wow-delay="0.4s">
                        <img src="{{ asset('images/about/ProfilePic2.1.jpg') }}" alt="A pretty face">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7">
                    <div class="about-right wow fadeInDown" data-wow-delay="0.8s">
                        <h1>Hi, I'm <span class="text-primary">Antreas Papadopoulos</span></h1>
                        <p>I'm a 23 year-old  <a id="ClickMe" href="https://giphy.com/gifs/Cz6TlrRVVyv9S" target="_blank">Computer Science graduate</a>. Ever since graduation I have been working
                          on personal projects which include a decentralized web app called <span class="text-primary">Balloo</span> as part of my dissertation and this personal website of mine.
                           I have a decent knowledge in <span class="text-primary">HTML, Css, PHP, Laravel (PHP framewok)</span> and I have been looking more into Javascript and JQuery.
                        </p>
                         <p>Although I don't have any knowledge when it comes to mobile application development, I always strive to create high quality, fully responsive and tested services in a wide range
                            of devices, even though browser support can be a nightmare on a daily basis!
                         </p>
                         <p>As a programmer, I tend to use a variety of libraries and toolkits (everything being MIT licensed) to aid me in my final result instead of making my own from scratch;
                           no point to reinvent the wheel now is there? In this project some examples would be: <br> <span class="libraries"></span> <br>
                         </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--about area ends-->

    <!--resume area starts-->

    <div id="resume" class="resume-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>My Resume</h2>
                        <p class="line1"></p>
                        <p class="line2"></p>
                        <a class="face-button" href="/download">
                          <div class="face-primary">
                            <span class="icon fa fa-download"></span>
                            Download
                          </div>
                          <div class="face-secondary" style="padding: 0 5px;">
                            <span class="icon fa fa-hdd-o"></span>
                            Size: 1.2 MB
                          </div>
                        </a>
                        <p class="line2"></p>
                        <p class="line1"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5>Education</h5>
                    <div class="timeline">
                        <div class="wrapper right">
                            <div class="content">
                                <div class="education-area wow fadeInDown" data-wow-delay="0.2s">
                                    <h6>2015-2018</h6>
                                    <h4>BSc In Computer Science</h4>
                                    <h3>University of Liverpool</h3>
                                    <p>A degree that teaches a variety of skills from Web Designing, Scripting Languages and Database Design all the way to Algorithms, Multi-agent Systems and Artificial intelligence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Experience</h5>
                    <div class="timeline">
                        <div class="wrapper right">
                            <div class="content">
                                <div class="experience-area wow fadeInDown" data-wow-delay="0.4s">
                                    <h6>August 2018 - Present</h6>
                                    <h4 class="mb-2">Freelancer</h4>
                                    <h3 class="mb-2">Web Developer</h3>
                                    <p>Small Projects here and there, mainly designing and setting up websites for clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper right">
                            <div class="content">
                                <div class="experience-area wow fadeInDown" data-wow-delay="0.8s">
                                  <h6>March 2018 - July 2018</h6>
                                  <h4 class="mb-2">University of Liverpool - Computing services</h4>
                                  <h3 class="mb-2">AV Student support</h3>
                                  <p>Providing technical support using University systems and equipment. Responsible for the maintenance and upgrade of certain building equipment. Aimed to improve the teaching experience to both the lecturers and the students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--resume area ends-->

    <!--interests area starts-->

    <div id="interests" class="interests-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>My Interests</h2>
                        <p class="line1"></p>
                        <p class="line2"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <i class="fa fa-superpowers"></i>
                        </div>
                        <div class="services-content">
                            <h3>UI/UX</h3>
                            <p>Always enjoyed interacting with people and hence while growing up I found myself more keen towards a User Interface and experience role</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="services-content">
                            <h3>Web Design</h3>
                            <p>Would like to think I can be creative from time to time and Web Designing would be a nice profession to follow where I can express this creativity of mine</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="0.6s">
                        <div class="services-icon">
                            <i class="fa fa-terminal"></i>
                        </div>
                        <div class="services-content">
                            <h3>Web Development</h3>
                            <p>Didn't think at first it can be so frustrating to set up a website and have it up running but there is nothing more rewarding than completing a project</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="services-content">
                            <h3>Vector Design</h3>
                            <p>This is my latest interest - Scalable Vector Graphics (SVG). I have been messing around Adobe Illustrator and AfterEffects in an attempt to only use vectors in my websites </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="1s">
                        <div class="services-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="services-content">
                            <h3>Back-End Development</h3>
                            <p>Yes I did technically mention (literally above) that I am a front-end guy but sometimes, just sometimes, I wished I never touched this stuff and turned my focus on the back-end. Hence why I started learning Laravel and developing my projects there</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-services text-center wow fadeInDown" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="fa fa-bitcoin"></i>
                        </div>
                        <div class="services-content">
                            <h3>Blockchain</h3>
                            <p>I see a bright future in this technology and I am not just talking about cryptocurrencies.
                              The idea of decentralized, distributed networks providing security and transparency fascinated me, hence why I focused my dissertation towards that</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--interests area ends-->



    <!-- projects area starts-->

    <div id="projects" class="projects-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Code Projects</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div id="Project" class="col-lg-12">
                <h1 style="margin: 0 0 5px 0;">Latest Project</h1>
                <h2>Codename: "Balloo"</h2>
                <h3>Description:</h3>
                <p>Balloo is a decentralised application (Dapp) that makes use of Ethereum's smart contract functionality to digitalise rental agreements and automate the process.</p>
                <h3>Current State:</h3>
                <p>The application is still under development <span class="text-primary">(STRICTLY FOR EDUCATIONAL PURPOSES).</span> I have been waiting on some well known connectivity bugs to be fixed by the Ethereum developers (like some event handling).</p>
                <h3>Future plans:</h3>
                <p>I aim to re-structure the database and make it more of a platform for both landlords and tenants to use. That includes (1)private chat rooms between parties.
                 (2)A dashboard that adds functionality like time remaining before the next rent payment, wallet account balance and others. (3)More customization on the smart contracts. (4)Link of Dapp
                with smart house readers for even more automation. (5) Rating system for the users.</p>
                <div class="Link-Button">
                  <a href="http://www.balloo.tech" target="_blank"><button class="button btn-lg" style="vertical-align:middle"><span>Visit Balloo</span></button></a>
                </div>
              </div>
              <div id="Carousel" class="col-lg-12">
                <div class="carousel-container">
                  <ul class="karousel my-carousel carousel--thumb">
                    <input class="carousel__activator" type="radio" id="K" name="thumb" checked="checked"/>
                    <input class="carousel__activator" type="radio" id="L" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="M" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="N" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="O" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="P" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="Q" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="R" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="S" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="T" name="thumb"/>
                    <input class="carousel__activator" type="radio" id="U" name="thumb"/>

                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="U"></label>
                      <label class="carousel__control carousel__control--forward" for="L"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="K"></label>
                      <label class="carousel__control carousel__control--forward" for="M"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="L"></label>
                      <label class="carousel__control carousel__control--forward" for="N"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="M"></label>
                      <label class="carousel__control carousel__control--forward" for="O"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="N"></label>
                      <label class="carousel__control carousel__control--forward" for="P"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="O"></label>
                      <label class="carousel__control carousel__control--forward" for="Q"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="P"></label>
                      <label class="carousel__control carousel__control--forward" for="R"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="Q"></label>
                      <label class="carousel__control carousel__control--forward" for="S"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="R"></label>
                      <label class="carousel__control carousel__control--forward" for="T"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="S"></label>
                      <label class="carousel__control carousel__control--forward" for="U"></label>
                    </div>
                    <div class="carousel__controls">
                      <label class="carousel__control carousel__control--backward" for="T"></label>
                      <label class="carousel__control carousel__control--forward" for="K"></label>
                    </div>
                    <li class="carousel__slide">
                      <h3 id="x">Welcome page where top right buttons change depending on the log in status of the user</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">Example of validation when a user attempts to log in with an account that either does not exist or was not activated</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">Registration page</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">If registration was successful an email will be sent to the set email address where you can acticate your account</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">Email verification arriving shortly after registering</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">The email for activating your account, as simple as it gets</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">This is the page you are redirevted to in the case you have not received an activation email and you need a new one</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">Further confirmation notifications to make sure the user is aware of what is happening</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">Confirmation of re-sent activation email</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x1">After activating your account you are redirected to the dashboard page (I know, there is nothign there :p) Read (2) of future plans</h3>
                    </li>
                    <li class="carousel__slide">
                      <h3 id="x">Abstraction of a basic Smart Contract to be deployed</h3>
                    </li>
                    <div class="carousel__indicators">
                      <label class="carousel__indicator" for="K"></label>
                      <label class="carousel__indicator" for="L"></label>
                      <label class="carousel__indicator" for="M"></label>
                      <label class="carousel__indicator" for="N"></label>
                      <label class="carousel__indicator" for="O"></label>
                      <label class="carousel__indicator" for="P"></label>
                      <label class="carousel__indicator" for="Q"></label>
                      <label class="carousel__indicator" for="R"></label>
                      <label class="carousel__indicator" for="S"></label>
                      <label class="carousel__indicator" for="T"></label>
                      <label class="carousel__indicator" for="U"></label>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
            <div id="specialrow" class="row">
              <div id="Tech" class="col-lg-12">
                <div class="title">
                  <h3>Technologies used:</h3>
                </div>
                <div class="Front-End">
                  <h4 style="width: 150px;">Front-End</h4>
                  <ul class="fa-ul">
                    <li><img src="{{ asset('images/portfolio/icons/html.svg') }}" class="svgIMG"/>HTML</li>
                    <li><img src="{{ asset('images/portfolio/icons/css.svg') }}" class="svgIMG"/>CSS</li>
                    <li><img src="{{ asset('images/portfolio/icons/javascript.svg') }}" class="svgIMG1"/>JavaScript</li>
                  </ul>
                </div>
                <div class="Back-End">
                  <h4 style="width: 150px;">Back-End</h4>
                  <ul class="fa-ul">
                    <li><img src="{{ asset('images/portfolio/icons/php.svg') }}" class="svgIMG1"/>PHP</li>
                    <li><img src="{{ asset('images/portfolio/icons/jquery.svg') }}" class="svgIMG1"/>JQuery</li>
                    <li><img src="{{ asset('images/portfolio/icons/phpmyadmin.svg') }}" class="svgIMG1"/>phpMyAdmin</li>
                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Solidity_logo.svg" class="svgIMGS"/>Solidity</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>

    <!--projects area ends-->

    <!-- SVG portfolio area starts-->

    <div id="portfolio" class="portfolio-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Portfolio - SVG Designs</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
            <!-- Bootstrap layout -->
            <div class="row">
                <!-- About a 3 coloumn view on all screens -->
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <!-- Small animation when hovering over image -->
                    <div class="gallery-items wow fadeInLeft" data-wow-delay="0.2s">
                        <!-- Image after mouse click -->
                        <a class="view img" href="images/SVGs/InTheMakingAttempt2.svg">
                            <!-- Preview image -->
                            <img src="{{ asset('images/SVGs/InTheMakingAttempt2.svg') }}" alt="One Perfect Night">
                        </a>
                        <div class="gallery-text">
                          <h2>Perfect night</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="gallery-items wow fadeInDown" data-wow-delay="0.4s">
                        <a class="view img" href="images/portfolio/2.png">
                          <img src="{{ asset('images/SVGs/cs.jpg') }}" alt="Nights like this">
                        </a>

                        <div class="gallery-text">
                            <h2>Nights like this</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="gallery-items wow fadeInRight" data-wow-delay="0.6s">
                        <a class="view img" href="images/portfolio/3.png">
                          <img src="{{ asset('images/SVGs/cs.jpg')  }}" alt="City by Night">
                        </a>

                        <div class="gallery-text">
                            <h2>City by Night</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--portfolio area ends-->

    <!--testimonial area starts-->


<div id="testimonial" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>What My Friends And Family Say About Me</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                    <small>* You can scroll through with the mouse - Click and Drag*</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p>"Lying to him that he will find a job soon is bad enough but I can't keep up the financial support until he finds one!"</p>
                        </div>
                        <div class="pic">
                            <img src="images/testimonial/philippepotey.jpg" alt="testimonial image">
                        </div>
                        <div class="testimonial-title">
                            <h3>Philippe Potey</h3>
                            <small>PhD Student</small>
                            <small>(Only if he doesn't fail)</small>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p>"I changed my mind of having children after seeing how much of a disappointment Antreas is to his parents"</p>
                        </div>
                        <div class="pic">
                            <img src="images/testimonial/yuricholak.jpg" alt="testimonial image">
                        </div>
                        <div class="testimonial-title">
                            <h3>Yuri Cholak</h3>
                            <small>Wannabe Enginner</small>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p>"Most handsome boy I know"</p>
                        </div>
                        <div class="pic">
                            <img src="images/testimonial/mum.jpg" alt="testimonial image">
                        </div>
                        <div class="testimonial-title">
                            <h3>My mum</h3>
                            <small>Being my mum</small>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p>"I'm not sure if Antreas can become a bigger let down than he already is. Seeing him pour warm milk into his bowl before adding cereal was the last drop."</p>
                        </div>
                        <div class="pic">
                            <img src="images/testimonial/dominykarubeziute.jpg" alt="testimonial image">
                        </div>
                        <div class="testimonial-title">
                            <h3>Dominika Rybezuite</h3>
                            <small>Barely an engineering graduate</small>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p>"Hard-working, reliable, a natural born leader. Andreas is many things. But none of the aforementioned. Spare yourself the trouble, move along."</p>
                        </div>
                        <div class="pic">
                            <img src="images/testimonial/theofanis.jpg" alt="testimonial image">
                        </div>
                        <div class="testimonial-title">
                            <h3>Theofanis Michaelidis</h3>
                            <small>Lawyer.. pfff</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--testimonial area ends-->

    <!--invitation area starts-->

    <div class="invitation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="single-invite text-center">
                    <h2>do you have any project i can help you with?</h2>
                    <p>Feel free to contact me if you think there is a project I can be of assistance! Drop me an email, give me a call, use the contact form, any will do!</p>
                    <a id="contactFormButton"href="/contact"><img src="{{ asset('images/portfolio/icons/browser.svg') }}" class="svgIMG1"/></i>Contact Form</a>
                </div>
            </div>
        </div>
    </div>

    <!--invitation area ends-->

  <!--contact area starts-->

     <div id="contact" class="contact-area section-padding">
         <div class="container">
             <div class="row">
                 <div class="section-header">
                     <h2>contact me</h2>
                     <p class="line1"></p>
                     <p class="line2"></p>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-12 col-lg-12">

                     <div class="top-contact">

                         <div class="row">
                             <div class="col-sm-3 col-md-3">
                                 <div class="top-contact-text wow fadeInDown" data-wow-delay="0.2s">
                                     <div class="contact-icon">
                                         <ul>
                                             <li><a href="https://www.google.com/maps/search/?api=1&query=Nevern+Roa%2C+SW59PJ" target="_blank"><i class="fa fa-map-marker"></i></a></li>
                                         </ul>
                                     </div>

                                     <h2>Address / Street</h2>
                                     <p>Nevern Road, SW5 9PJ, London</p>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                                 <div class="top-contact-text wow fadeInDown" data-wow-delay="0.4s">
                                     <div class="contact-icon">
                                         <ul>
                                             <li><a href="tel:+447999435635"><i class="fa fa-phone"></i></a></li>
                                         </ul>
                                     </div>
                                     <h2>Contact Number</h2>
                                     <p>+44 (0)7 999 435 635</p>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                                 <div class="top-contact-text wow fadeInDown" data-wow-delay="0.4s">
                                     <div class="contact-icon">
                                         <ul>
                                             <li><a href="mailto:antreas.paps@yahoo.com?Subject=Feedback%20Timeeee" target="_top"><i class="fa fa-envelope"></i></a></li>
                                         </ul>
                                     </div>
                                     <h2>Email Address</h2>
                                     <p>antreas.paps@yahoo.com</p>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                                 <div class="top-contact-text wow fadeInDown" data-wow-delay="0.6s">
                                     <div class="contact-icon">
                                         <ul>
                                             <li><a href="#contact"><i class="fa fa-gg"></i></a></li>
                                         </ul>
                                     </div>

                                     <h2>Social Media</h2>
                                     <div class="social">
                                        <a href="https://github.com/Paps94" target="_blank"><i class="fa fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/antreas-papadopoulos-819891158/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/antreas.paps/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </div>
                                 </div>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>
         </div>

    </div>

  <!--contact area ends-->

    <!--Footer Area Starts-->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p><i class="fa fa-copyright" style="padding: 0 5px;"></i>All Rights Reserved <i class="fa fa-copyright" style="padding-right: 5px;"></i></p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Area Ends-->

<script src="{{ asset('js/particles.js') }}"></script>
<script>
    particlesJS.load('particles-js', 'json/particles.json', function () {
        console.log('callback - particles.js config loaded')
    })
</script>

<script type="text/javascript">
      $(document).ready(function(){
          $('.nav li').click(function(){
              $('.nav li').removeClass('active');
              $(this).addClass('active');
          });

          $('.nav a').on('click', function(){
            $('.navbar-toggle').click();

        });
      });
</script>

@endsection
