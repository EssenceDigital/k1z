@extends('_site-layout')

@section('title', 'K1Z Auto Sales | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('styles')
  <link href="{{ url('_site-assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{ url('css/ie.css') }}" media="screen" /><![endif]-->
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="{{ url('_site-assets/css/extralayers.css') }}" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ url('_site-assets/vendor/revslider/css/settings.css') }}" media="screen" />

  <!-- GOOGLE FONTS FOR SLIDER REVOLUTION -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
  <link href="{{ url('_site-assets/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
  <!-- Color Style -->
  <link href="{{ url('_site-assets/css/colors/color5.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ url('_site-assets/js/modernizr.js') }}"></script><!-- Modernizr -->
@endsection

@section('content')

  <!-- START REVOLUTION SLIDER 4.5.0 fullwidth mode -->
  <div class="hero-area">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>	<!-- SLIDE  -->
          <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide 1">
            <!-- MAIN IMAGE -->
            <img src="{{ url('_site-assets/images/slide-1.jpg') }}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                data-x="center" data-hoffset="225"
                data-y="center" data-voffset="-70"
                data-speed="600"
                data-start="800"
                data-easing="Power4.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">EASY<br />FINANCING
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
                data-x="center" data-hoffset="210"
                data-y="center" data-voffset="60"
                data-speed="600"
                data-start="900"
                data-easing="Power4.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Get approved and drive<br/>away in a great vehicle
            </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide 2">
            <!-- MAIN IMAGE -->
            <img src="{{ url('_site-assets/images/slide-2.jpeg') }}"  alt="fullslide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                data-x="center" data-hoffset="215"
                data-y="center" data-voffset="-70"
                data-speed="600"
                data-start="800"
                data-easing="Power4.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">WE HAVE IT
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
                data-x="center" data-hoffset="225"
                data-y="center" data-voffset="40"
                data-speed="600"
                data-start="900"
                data-easing="Power4.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Check out our huge<br/>selection of ready vehicles
            </div>
          </li>
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-8">
          <div class="toggle-make">
            <a href="#"><i class="fa fa-navicon"></i></a>
              <span>Browse by body style</span>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-4">
          <ul class="utility-icons social-icons social-icons-colored">
            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="by-type-options">
      <div class="container">
        <div class="row">
          <ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
            <li class="item"> <a href="results-list.html"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
            <li class="item"> <a href="results-list.html#"><img src="images/body-types/minicar.png" alt=""> <span>Minicar</span></a></li>
            <li class="item"> <a href="results-list.html"><img src="images/body-types/sedan.png" alt=""> <span>Sedan</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


<!-- Start Body Content -->
<div class="main" role="main">
  <div id="content" class="content full padding-b0">
    <div class="container">
      <!-- Welcome Content and Services overview -->
      <div class="row">
        <div class="col-md-6">
          <h1 class="uppercase strong">Welcome to <br>K1Z Auto Sales</h1>
          <p class="lead">We are Lethbridge's<br>top spot for <span class="accent-color">quality pre-owned vehicles</span></p>
        </div>
        <div class="col-md-6">
          <p>Finding the right vehicle for yourself or your family can be a challenging process. At K1Z we are here to guide you every step of the way. From selecting the right make and model to ensuring financing is in place, our job is to make things simple. </p>
          <p>We work hard to give you the best deals in the Lethbridge area. We are proud to bring you high quality vehicles at great prices with helpful financing options. We have grown our business steadily over the years and we believe consistency and hard work leaves our customers satisfied. We strive to build a positive relationship with any one who walks through our doors.
          </p>
        </div>
      </div>
      <hr class="fw">
      <div class="spacer-30"></div>

      <!-- Recently Listed Vehicles -->
      <section class="listing-block recent-vehicles">
        <div class="listing-header">
          <h3>Recently Listed Vehicles</h3>
        </div>
        <div class="listing-container">
          <div class="carousel-wrapper">
            <div class="row">
              <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="4" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                @foreach($recentInventory as $vehicle)
                  <li class="item">
                    <div class="vehicle-block format-standard">
                      <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                      <div class="vehicle-block-content">
                        <span class="label label-default vehicle-age">{{ $vehicle->year }}</span>
                        <h5 class="vehicle-title"><a href="vehicle-details.html">{{ $vehicle->make . ' ' . $vehicle->model }}</a></h5>
                        <span class="vehicle-meta">{{ number_format($vehicle->kms) . ' km | ' . $vehicle->trans . ' | ' . $vehicle->color  }}</span>
                        <span class="vehicle-cost">${{ number_format($vehicle->price) }}</span>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </section>
      <hr class="fw">
      <div class="spacer-30"></div>

      <div class="row">
        <div class="col-md-4">
          <div class="icon-box ibox-rounded">
            <div class="ibox-icon">
              <i class="fa fa-check"></i>
            </div>
            <h3>Get Approved</h3>
            <p>We offer an exclusive credit rebuilding program for those who need some assistance financing their purchase.
            Whether you have good credit or bad credit, we'll get you into the used car you want at a price you can afford.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box ibox-rounded">
            <div class="ibox-icon">
              <i class="fa fa-money"></i>
            </div>
            <h3>Cash Back</h3>
            <p>With our refer a friend program we will give you up to $100 back in cold hard cash! Contact us today to get
            the full details and get cash in your pocket today!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box ibox-rounded">
            <div class="ibox-icon">
              <i class="fa fa-car"></i>
            </div>
            <h3>Best Stock in Lethbridge</h3>
            <p>We'll be sure to find you the vehicle you desire! And if you dont see the used car you're looking for, <span class="accent-color">we will find it for you!</span>
            Come experience the K1Z difference today.</p>
          </div>
        </div>
      </div>
      <hr class="fw">

      <!-- Latest Testimonials -->
      <div class="row">
        <section class="listing-block latest-testimonials">
          <div class="listing-header">
            <h3>Testimonials</h3>
          </div>
          <div class="listing-container">
            <div class="carousel-wrapper">
              <div class="row">
                <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                  <li class="item">
                    <div class="testimonial-block">
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                      </blockquote>
                      <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="60" height="60"></div>
                      <div class="testimonial-info">
                        <div class="testimonial-info-in">
                          <strong>Lori Bailey</strong><span>My car Experts</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial-block">
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                      </blockquote>
                      <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="60" height="60"></div>
                      <div class="testimonial-info">
                        <div class="testimonial-info-in">
                          <strong>Lori Bailey</strong><span>My car Experts</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial-block">
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                      </blockquote>
                      <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="60" height="60"></div>
                      <div class="testimonial-info">
                        <div class="testimonial-info-in">
                          <strong>Willie &amp; Heather Obrien</strong>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div> <!--/ Testimonials -->
    </div> <!-- / container -->

    <div class="spacer-75"></div>

    <!-- FAQ -->
    <div class="lgray-bg padding-tb75" id="faqs">
      <div class="container">
        <h4 class="accent-color short">K1Z Auto Sales F.A.Q.</h4>
        <h3>Common Questions Asked by People Who Haven't Used Our Services Yet</h3>
        <div class="spacer-30"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="accordion" id="toggleArea">
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Do you take trade-in’s?<i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Yes, we accept all trades at fair market price. The price will be determined once we appraise your vehicle and determine what your current vehicle is worth.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Do you offer warranty?<i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Yes! K1Z AUTO SALES offers a comprehensive warranty to all of our customers.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Do you provide carproof? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseThird" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Yes! All of our vehicles come with a CarFax and a full mechanical fitness inspection.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> How can I rebuild my credit? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseForth" class="accordion-body collapse">
                  <div class="accordion-inner">
                    The best way to rebuild credit is to get yourself an installment loan. Some effective ways are through financing a vehicle or paying off a credit card. The key is to make your payments on time (this goes for phone and utility bills, as well). By being responsible with an installment loan on a vehicle, the credit bureau will keep track of your efforts and it will prove to the banks that you are trustworthy for future loans. Keep in mind, it takes both time and patience. Make a point to pay your bills on time, and you’ll quickly re-establish your credit.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSixth"> I’ve been declined elsewhere. Can I still get approved for financing? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseSixth" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Of course! K1Z AUTO SALES has an incredibly high rate of approvals, even if you’ve been declined before. The process is quick, easy and hassle-free; just fill out our 30 second online credit application and leave the rest to us! Your information is strictly confidential and will never be shared with third-party companies. Once we get the approval from our lenders, we’ll work our magic and find the perfect vehicle fit for you.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSeventh"> How long does the process take? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseSeventh" class="accordion-body collapse">
                  <div class="accordion-inner">
                    From the time you fill out an application, we’ll get the process started within just a few short hours. In the best circumstances, we can even have you driving away in your new vehicle within just 24-48 hours! It’s really that easy.
                  </div>
                </div>
              </div>
              <div class="accordion-group panel">
                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEighth"> Can I purchase a vehicle if I live out of province? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                <div id="collapseEighth" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Yes! In fact, we have many buyers from out-of-province. We can either arrange to have the vehicle shipped to you or you can come drive it home yourself!
                  </div>
                </div>
              </div>
            </div>
            <!-- End Toggle -->
          </div><!-- / col -->
        </div><!-- / row -->
      </div>
    </div> <!-- / FAQ -->

  </div><!-- /content -->
</div>
<!-- End Body Content -->



@endsection

@section('scripts')
  <script src="{{ url('_site-assets/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
  <script src="{{ url('_site-assets/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
  <script src="{{ url('_site-assets/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
  <script src="{{ url('_site-assets/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
  <script src="{{ url('_site-assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
  <script src="{{ url('_site-assets/vendor/password-checker.js') }}"></script> <!-- Password Checker -->
  <script src="{{ url('_site-assets/js/bootstrap.js') }}"></script> <!-- UI -->
  <script src="{{ url('_site-assets/js/init.js') }}"></script> <!-- All Scripts -->
  <script src="{{ url('_site-assets/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="{{ url('_site-assets/vendor/revslider/js/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('_site-assets/vendor/revslider/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script type="text/javascript">
  	jQuery(document).ready(function() {
  		jQuery('.tp-banner').show().revolution(
  		{
  			dottedOverlay:"none",
  			delay:3000,
  			startwidth:1170,
  			startheight:550,
  			hideThumbs:200,

  			thumbWidth:100,
  			thumbHeight:50,
  			thumbAmount:5,

  			navigationType:"none",
  			navigationArrows:"solo",
  			navigationStyle:"preview2",

  			touchenabled:"on",
  			onHoverStop:"on",

  			swipe_velocity: 0.7,
  			swipe_min_touches: 1,
  			swipe_max_touches: 1,
  			drag_block_vertical: false,


  			keyboardNavigation:"on",

  			navigationHAlign:"center",
  			navigationVAlign:"bottom",
  			navigationHOffset:0,
  			navigationVOffset:20,

  			soloArrowLeftHalign:"left",
  			soloArrowLeftValign:"center",
  			soloArrowLeftHOffset:20,
  			soloArrowLeftVOffset:0,

  			soloArrowRightHalign:"right",
  			soloArrowRightValign:"center",
  			soloArrowRightHOffset:20,
  			soloArrowRightVOffset:0,

  			shadow:0,
  			fullWidth:"on",
  			fullScreen:"on",

  			spinner:"spinner0",

  			stopLoop:"off",
  			stopAfterLoops:-1,
  			stopAtSlide:-1,

  			shuffle:"off",

  			autoHeight:"off",
  			forceFullWidth:"off",

  			hideThumbsOnMobile:"off",
  			hideNavDelayOnMobile:1500,
  			hideBulletsOnMobile:"off",
  			hideArrowsOnMobile:"off",
  			hideThumbsUnderResolution:0,

  			hideSliderAtLimit:0,
  			hideCaptionAtLimit:0,
  			hideAllCaptionAtLilmit:0,
  			startWithSlide:0
  		});
  	});	//ready
  </script>
@endsection
