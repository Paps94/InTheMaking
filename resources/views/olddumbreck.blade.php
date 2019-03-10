<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Old Dumbreck - King of the castle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Sarabun:500" rel="stylesheet">
        <!-- ==================================== Scripts ==================================== -->
          <!--JQuery-->
          <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

          <!-- Mouse Parallax-->
          <script type="text/javascript" src="{{ URL::asset('/js/jquery.parallaxmouse.min.js') }}"></script>

          <!--Bootstrap js-->
          <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>

          <!--Magnific popup js-->
          <script type="text/javascript" src="{{ URL::asset('/js/jquery.magnific-popup.js') }}"></script>

          <!--Owl Carousel js-->
          <script type="text/javascript" src="{{ URL::asset('/js/owl.carousel.js') }}"></script>



        <!-- ==================================== end of Scripts ==================================== -->

        <!-- ==================================== CSS ==================================== -->
          <!--Font Awesome css-->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

          <!--Bootstrap css-->
          <link rel="stylesheet" href="/css/app.css">

          <!--Main css-->
          <link rel="stylesheet" href="/css/main.css">

          <!--Responsive css-->
          <link rel="stylesheet" href="/css/responsive.css">

          <!--Animate css-->
          <link rel="stylesheet" href="/css/animate.css">

          <!--Owl Carousel css-->
          <link rel="stylesheet" href="/css/owl.carousel.css">
          <link rel="stylesheet" href="/css/owl.theme.default.css">


        <!-- ==================================== end of CSS ==================================== -->

    </head>
    <body style="height: 4000px">
      <section id="home" class="intro">
        <div id="wrapper">
          <img id="castle1"  class="parallax" src="images/castle1.png">
          <img id="castle2"  class="parallax" src="images/castle2.png">
          <img id="ground"   class="parallax" src="images/star3.png">
          <img id="sword"    class="parallax" src="images/star5.png">
          <img id="bottle"   class="parallax" src="images/star4.png">
          <img id="logo"     class="parallax" src="images/svg/Logo/LogoFull.svg">
        </div>
      </section>
      <nav class="navbar sticky-top navbar-expand-md navbar-light top-navbar" data-toggle="sticky-onscroll">
        <div class="container">
            <a class="navbar-brand" href="#home"><img class="logo" src="images/svg/General/castle.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul id="top-menu" class="navbar-nav pull-right">
                    <li class="nav-item"><a class="nav-link smooth-menu" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smooth-menu" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link smooth-menu" href="#range">The Range</a></li>
                    <li class="nav-item"><a class="nav-link smooth-menu" href="#cocktail">Cocktail Fusion</a></li>
                    <li class="nav-item"><a class="nav-link smooth-menu" href="#contact">Contact</a></li>
                </ul>

            </div>
        </div>
      </nav>

      <section id="about" class="about section-padding">
        <div class="container">
          <div class="section-title"> About </div>
          <p class="line1"></p>
          <p class="line2"></p>
          <div class="story">
            <h1 class="title">The story</h1>
            <p>Old Dumbreck is sympolising the <span class="primary-text">real Scotish Spirit</span>.
            Aged in oak barrels for a <span class="primary-text">minimum period of 3 years</span> before careful selection and blending Old Dumbreck embodies the finest traditions of Scotch Whisky.
            Its <span class="primary-text">distictive fragrance</span>, welcoming flavour and soft trailing notes of toffee, domiate the taste of this quality blend.
            Old Dumbreck is especially blended to be <span class="text-priamry">enjoyed at any time of the day or night</span>. It's <span class="text-priamry">easy drinking style</span>
             and <span class="text-priamry">superb as a neat dram</span> or perfect with a splash of water or a cube of ice. On one side it mingles easily with the mixers while the other side
             of its character offers a <span class="primary-text">sound basis for cocktails</span> </p>
          </div>
          <div class="design">
            <h1 class="title">The Design</h1>
            <p>Its elegant label design emphasizes the traditional side of the brand that has been inspired by the rich Scottish heritage.
              The <span class="primary-text">castle</span>, where it all begun centuries ago, used as <span class="primary-text">the brand's logo</span>, adds to its noble pedigree.</p>
          </div>
          <div class="characteristics">
            <h1 class="title">Characteristics</h1>
            <div class="row">
              <div class="col-xl-3 col-md-6 col-12">
                <div class="card box-shadow-4 pull-up fixed-height">
                  <div class="text-center">
                    <div class="card-body">
                        <h4 class="card-title">Colour</h4>
                        <img class="img-logo-lefts" src="images/svg/Characteristics/gold.svg">
                        <hr>
                        <p class="card-subtitle"><span style="color: #FECA38;">Light golden </span>hue</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-12">
                <div class="card box-shadow-4 pull-up fixed-height">
                  <div class="text-center">
                    <div class="card-body">
                        <h4 class="card-title">Nose</h4>
                        <hr>
                        <img class="img-logo-left" src="images/svg/Characteristics/acorn.svg">
                        <p class="card-subtitle">Soft oak, fruity tones with hints of spice</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-12">
                <div class="card box-shadow-4 pull-up fixed-height">
                  <div class="text-center">
                    <div class="card-body">
                        <h4 class="card-title">Taste</h4>
                        <hr>
                        <img class="img-logo-right" src="images/svg/Characteristics/nuts.svg">
                        <img class="img-logo-left" src="images/svg/Characteristics/toffee.svg">
                        <p class="card-subtitle">Toffee, nuts and muscovado</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-12">
                <div class="card box-shadow-4 pull-up fixed-height">
                  <div class="text-center">
                    <div class="card-body">
                        <h4 class="card-title">Finish</h4>
                        <img class="img-logo-rights" src="images/svg/Characteristics/medal.svg">
                        <hr>
                        <p class="card-subtitle">Smooth, rounded and rewardingue</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div style="position: relative;">
        <div class="section-divider">
          <img class="logo-svg" src="images/svg/General/castleOutline.svg" alt="">
        </div>
      </div>

      <section id="range" class="range section-padding">
        <div class="container">
          <div class="section-title"> The Range </div>
          <p class="line1"></p>
          <p class="line2"></p>

          <div class="rangeContent">
            <h3 class="primary-text">Sizes (C/L)</h3>
            <p>*From left to right as seen in the image*</p>
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-2"><span class="highlight">35</span> (C/L)</div>
              <div class="col-sm-2"><span class="highlight">50</span> (C/L)</div>
              <div class="col-sm-2"><span class="highlight">100</span> (C/L)</div>
              <div class="col-sm-2"><span class="highlight">75</span> (C/L)</div>
              <div class="col-sm-2"><span class="highlight">20</span> (C/L)</div>
              <div class="col-sm-1"></div>
            </div>
            <div class="images">
              <img class="rangeBottles"src="images/RangeBottles/FullBottleRange.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <div style="position: relative;">
        <div class="section-divider">
          <img class="logo-svg" src="images/svg/General/castleOutline.svg" alt="">
        </div>
      </div>

      <section id="cocktail" class="cocktail section-padding" >
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="section-title">Cocktail Fusion</div>
              <p class="line1"></p>
              <p class="line2"></p>
              <p style="text-align: center">*If you want to read any of the cocktails, just hover over it and the autoplay will stop*</p>
              <a class="btn carouselBtn play"> Play <i class="fas fa-play" style="margin-left: 10px;"></i></a>
              <a class="btn carouselBtn stop"> Pause <i class="fas fa-pause" style="margin-left: 10px;"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="services-carousel" class="owl-carousel owl-theme">
            <!-- First Cocktail-->
            <div class="single-services text-center item" style="margin: 0 15px 15px;">
              <img class="cocktail-image" src="images/cocktails/The-Witty-Comeback.jpg" />
              <div class="services-content">
                  <div class="highlight">The Witty Comeback</div> <!--edit the service you give-->
                  <div class="clash-card__level clash-card__level--barbarian top-left">1/5</div>
                  <hr>
                  <h5 style="text-transform: capitalize;">Ingredients</h5>
                  <ul class=" text-left" style="margin-left: 15px;">
                    <li>2 oz Old Dumbreck</li>
                    <li>½ ounce Averna amaro</li>
                    <li>½ ounce fresh lemon juice</li>
                    <li>½ ounce Ginger Simple Syrup</li>
                    <li>Orange twist (for serving)</li>
                  </ul>
                  <hr>
                  <h5 style="text-transform: capitalize;">Summary</h5>
                  <p>This is an example of a house cocktail with three key elements: accessible main ingredients (rye and lemon), something homemade (ginger syrup), and something a little obscure (Averna amaro).</p>
              </div>
            </div>

            <!-- Second Cocktail-->
            <div class="single-services text-center item" style="margin: 0 15px 15px;">
              <img class="cocktail-image" src="images/cocktails/libertine.jpg" />
              <div class="services-content">
                  <div class="highlight">The Libertine</div>
                  <div class="clash-card__level clash-card__level--barbarian top-left">2/5</div>
                  <hr>
                  <h5 style="text-transform: capitalize;">Ingredients</h5>
                  <ul class=" text-left" style="margin-left: 15px;">
                    <li>4 oz Old Dumbreck</li>
                    <li>2 oz simple syrup</li>
                    <li>2 sprigs fresh rosemary</li>
                    <li>2 oz fresh lemon juice</li>
                    <li>2 tsp orange marmalade</li>
                    <li>1 tbsp maple syrup</li>
                    <li>1 tbsp fresh orange juice</li>
                    <li>1 egg white</li>
                  </ul>
                  <hr>
                  <h5 style="text-transform: capitalize;">Summary</h5>
                  <p>Essentially just whiskey, lemon or lime juice and simple syrup, the tartness of the citrus is a wonderful match to some of the sweet notes in whiskey. This is a perfectly easy drink that works with a great variety of whiskies.</p>
              </div>
            </div>

            <!-- Third Cocktail-->
            <div class="single-services text-center item" style="margin: 0 15px 15px;">
              <img class="cocktail-image" src="images/cocktails/nelie.jpg" />
              <div class="services-content">
                  <div class="highlight">The Nellie Kuh</div>
                  <div class="clash-card__level clash-card__level--barbarian top-left">3/5</div>
                  <hr>
                  <h5 style="text-transform: capitalize;">Ingredients</h5>
                  <ul class=" text-left" style="margin-left: 15px;">
                    <li>1 tbsp very finely chopped crystallized ginger</li>
                    <li>1 tbsp sugar</li>
                    <li>Lime wedge (for glass)</li>
                    <li>2 ½ oz Old Dumbreck</li>
                    <li>1 oz fresh lime juice</li>
                    <li>½ oz. Ginger Syrup</li>
                    <li>¼ teaspoon orange-flower water</li>
                  </ul>
                  <hr>
                  <h5 style="text-transform: capitalize;">Summary</h5>
                  <p>Ginger, lime, and orange blossom add tropical flavors to this slightly spicy and pleasantly floral cocktail.</p>
              </div>
            </div>

            <!-- Forth Cocktail-->
            <div class="single-services text-center item" style="margin: 0 15px 15px;">
              <img class="cocktail-image" src="images/cocktails/whisky-collins.jpg" />
              <div class="services-content">
                  <div class="highlight">Whisky Collins</div>
                  <div class="clash-card__level clash-card__level--barbarian top-left">4/5</div>
                  <hr>
                  <h5 style="text-transform: capitalize;">Ingredients</h5>
                  <ul class=" text-left" style="margin-left: 15px;">
                    <li>1/3 cup sugar</li>
                    <li>2 cups Old Dumbreck whisky</li>
                    <li>1 cup fresh lemon juice (from about 5 lemons)</li>
                    <li>1 12-oz can club soda</li>
                    <li>Lemon twists (optional; for serving)</li>
                  </ul>
                  <hr>
                  <h5 style="text-transform: capitalize;">Summary</h5>
                  <p>This riff on a Tom Collins calls for Japanese whisky, which is known for being exceptionally balanced and smooth. Your favorite Scotch whisky is a good substitute.</p>
              </div>
            </div>

            <!-- Fifth Cocktail-->
            <div class="single-services text-center item" style="margin: 0 15px 15px;">
              <img class="cocktail-image" src="images/cocktails/the-rattlesnake.jpg" />
              <div class="services-content">
                  <div class="highlight">The Rattlesnake</div>
                  <div class="clash-card__level clash-card__level--barbarian top-left">5/5</div>
                  <hr>
                  <h5 style="text-transform: capitalize;">Ingredients</h5>
                  <ul class=" text-left" style="margin-left: 15px;">
                    <li>½ cup sugar</li>
                    <li>4 large egg whites*, separated individually</li>
                    <li>8 oz Old Dumbreck whiskey</li>
                    <li>4 oz fresh lemon juice</li>
                    <li>Pernod or absinthe (for serving)</li>
                    <li>½ oz. Ginger Syrup</li>
                    <li>¼ teaspoon orange-flower water</li>
                  </ul>
                  <hr>
                  <h5 style="text-transform: capitalize;">Summary</h5>
                  <p>The double-shake method is key to this cocktail’s texture. The first round is to break up the egg white; the second is to chill and froth the drink.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      </section>

      <div style="position: relative;">
        <div class="section-divider">
          <img class="logo-svg" src="images/svg/General/castleOutline.svg" alt="">
        </div>
      </div>

      <section id="contact" class="contact section-padding" >
        <div class="container" style="position:relative">
          <div class="section-title">Contact</div>

            <div class="hr">
              <div class="separator">
                <img class="logo-contact" src="images/svg/General/whiskeys.svg" alt="">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 contactDetails" id="phone" >
                <div class="card box-shadow-4 fixed-height-contact">
                  <div class="text-center">
                    <div class="card-body">
                        <h4 class="card-title">Reach us at</h4>
                        <hr>
                        <div style="display: inline-block">
                          <img class="contactSVG" src="images/svg/Contact/phone-receiver.svg" alt="">
                          <div class="highlight">+357 25 212 220</div>
                        </div>
                        <div style="display: inline-block">
                          <img class="contactSVG" src="images/svg/Contact/mobile.svg" alt="">
                          <div class="highlight">+357 99 570 197</div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 contactDetails" id="address">
                <div class="card box-shadow-4 fixed-height-contact">
                  <div class="text-center">
                    <div class="card-body">
                      <h4 class="card-title">Find us at</h4>
                      <hr>
                      <div class="highlight">Astra Spirits Beverages Ltd</div>
                      <span style="margin-left: 20px;">Limassol, Cyprus</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 contactDetails" id="email">
                <div class="card box-shadow-4 fixed-height-contact">
                  <div class="text-center">
                    <div class="card-body">
                      <h4 class="card-title">  Send your e-mail</h4>
                      <hr>
                      <p style="font-size: 12px">*Click the bellow image*</p>
                      <div class="highlight"><a href="mailto:maxim.orekhov@astraspiritsbeverages.com"><img class="emailLink" src="images/svg/Contact/email.svg" alt=""></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hr">
              <div class="separator">
                <img class="logo-contact" src="images/svg/General/whiskeys.svg" alt="">
              </div>
            </div>
        </div>
      </section>

      <div class="footer-area">
        <div class="container-fluid">
          <div class="row">
            <div class="column left"></div>
            <div class="column middle">
              <div class="fcontent">
                <div>
                  <a href="#">Privacy Policy</a>
                </div>
                <div>
                  <p><i class="fa fa-copyright" style="padding: 0 5px;"></i>All Rights Reserved <i class="fa fa-copyright" style="padding-right: 5px;"></i></p>
                </div>
                <div>
                  <a href="#">Terms of use</a>
                </div>
              </div>
            </div>
            <div class="column right"></div>
          </div>
        </div>
    </div>
    </body>


<script>
  //*** Services carousel

    $("#services-carousel").owlCarousel({
        nav: true,
        autoplayHoverPause: true,
        pagination: true,
        slideSpeed: 800,
        paginationSpeed: 800,
        smartSpeed: 500,
        autoplay: true,
        dots: true,
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
          ],
        singleItem: true,
        loop: true,
        responsive:{
            0:{
                items:1
            },
            680:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });
    var owl = $('#services-carousel');
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000]);
    });
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay');
    });
</script>

<script>
  // Plugin Test
  $(window).parallaxmouse({
      invert: true,
      range: 400,
      elms: [
        {el: $('#castle1'), rate: 0.2},
        {el: $('#castle2'), rate: 0.2},
        {el: $('#ground'), rate: 0.2},
        {el: $('#sword'), rate: 0.3},
        {el: $('#bottle'), rate: 0.4}
      ]
  });
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

<script>
jQuery(document).ready(function(jQuery) {
          var topMenu = jQuery("#top-menu"),
              offset = 40,
              topMenuHeight = topMenu.outerHeight()+offset,
              // All list items
              menuItems =  topMenu.find('a[href*="#"]'),
              // Anchors corresponding to menu items
              scrollItems = menuItems.map(function(){
                var href = jQuery(this).attr("href"),
                id = href.substring(href.indexOf('#')),
                item = jQuery(id);
                //console.log(item)
                if (item.length) { return item; }
              });

          // so we can get a fancy scroll animation
          menuItems.click(function(e){
            var href = jQuery(this).attr("href"),
              id = href.substring(href.indexOf('#'));
                offsetTop = href === "#" ? 0 : jQuery(id).offset().top-topMenuHeight+1;
            jQuery('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
          });

          // Bind to scroll
          jQuery(window).scroll(function(){
             // Get container scroll position
             var fromTop = jQuery(this).scrollTop()+topMenuHeight;

             // Get id of current scroll item
             var cur = scrollItems.map(function(){
               if (jQuery(this).offset().top < fromTop)
                 return this;
             });

             // Get the id of the current element
             cur = cur[cur.length-1];
             var id = cur && cur.length ? cur[0].id : "";

             menuItems.parent().removeClass("active");
             if(id){
                  menuItems.parent().end().filter("[href*='#"+id+"']").parent().addClass("active");
             }

          })
      })
</script>
</html>
