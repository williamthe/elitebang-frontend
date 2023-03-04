<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="host_url" content="{{ url('/') }}">

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/settings.cs')}}s" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/navigation.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="icon" href="{{ url('images/litbang-min.png') }}">

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: 'Poppins', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
        }

        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="#" class="standard-logo" data-dark-logo="{{ asset('images/litbang-min.png') }}"><img src="{{asset('images/litbang-min.png')}}" alt="Canvas Logo"></a>
                        <a href="#" class="retina-logo" data-dark-logo=" {{ asset('images/litbang-min.png') }}"><img src="{{asset('images/litbang-min.png')}}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
{{--                        <div id="top-search" class="header-misc-icon">--}}
{{--                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>--}}
{{--                        </div>--}}
                        <!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="/litbang-admin" ><i class="icon-line-lock"></i></a>

                        </div><!-- #top-cart end -->

                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">
{{--                            <li class="menu-item">--}}
{{--                                <a class="menu-link" href="index.html"><div>Home</div></a>--}}
{{--                                <ul class="sub-menu-container">--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a class="menu-link" href="intro.html#section-niche"><div>Niche Demos</div></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a class="menu-link" href="intro.html#section-onepage"><div>One-Page Demos</div></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>--}}
{{--                                        <ul class="sub-menu-container">--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a class="menu-link" href="index-corporate.html"><div>Corporate - Layout 1</div></a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a class="menu-link" href="index-corporate-2.html"><div>Corporate - Layout 2</div></a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a class="menu-link" href="index-corporate-3.html"><div>Corporate - Layout 3</div></a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a class="menu-link" href="index-corporate-4.html"><div>Corporate - Layout 4</div></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

                        </ul>

                    </nav><!-- #primary-menu end -->

{{--                    <form class="top-search-form" action="search.html" method="get">--}}
{{--                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">--}}
{{--                    </form>--}}

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element revslider-wrap slider-parallax min-vh-100 include-header">
        <div class="slider-inner">
            <div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider" style="padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
                <div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
                    <ul>   <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000"   data-saveperformance="off"  >
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/videos/explore-poster.jpg')}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div id="main-video" class="tp-fade fadeout fullscreenvideo rs-background-video-layer"
                                 data-forcerewind="on"
                                 data-volume="mute"
                                 data-videowidth="100%"
                                 data-videoheight="100%"
                                 data-videomp4=""
                                 data-videopreload="preload"
                                 data-videoloop="none"
                                 data-forceCover="1"
                                 data-aspectratio="16:9"
                                 data-autoplay="true"
                                 data-autoplayonlyfirsttime="false"
                                 data-nextslideatend="true"
                            >
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-55','-55','-90','-90']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"></div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-10','-10']"
                                 data-fontsize="['50','50','50','36']"
                                 data-lineheight="['50','50','60','50']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-width="['800','800','560','400']"
                                 data-height="none"
                                 data-whitespace="['normal','nowrap','normal','normal']"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: normal;"></div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-desc-text"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['80','80',100,'130']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-textAlign="center"
                                 data-width="['800','800','560','400']"
                                 data-height="none"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal;"></div>

                            <div class="tp-caption ltl tp-resizeme"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['170','170','210','210']"
                                 data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1550"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"></div>

                        </li>
                        <li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1000"   data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" >
                            <!-- MAIN IMAGE -->
                            <img id="img-slider-3" src="{{asset('images/balaikota2.jpg')}}"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->

                         </li>
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500"  data-delay="10000"  data-saveperformance="off" >
                            <!-- MAIN IMAGE -->
                            <img id="img-slider-2" src="{{asset('images/balaikota-makassar.jpg')}}"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
{{--                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"--}}
{{--                                 data-x="40"--}}
{{--                                 data-y="150"--}}
{{--                                 data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"--}}
{{--                                 data-speed="800"--}}
{{--                                 data-start="1500"--}}
{{--                                 data-easing="easeOutQuad"--}}
{{--                                 data-splitin="none"--}}
{{--                                 data-splitout="none"--}}
{{--                                 data-elementdelay="0.01"--}}
{{--                                 data-endelementdelay="0.1"--}}
{{--                                 data-endspeed="1000"--}}
{{--                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222;">Bootstrap 3+ Compatible</div>--}}

{{--                            <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"--}}
{{--                                 data-x="37"--}}
{{--                                 data-y="180"--}}
{{--                                 data-transform_in="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"--}}
{{--                                 data-speed="600"--}}
{{--                                 data-start="1700"--}}
{{--                                 data-easing="easeOutCubic"--}}
{{--                                 data-splitin="chars"--}}
{{--                                 data-splitout="none"--}}
{{--                                 data-elementdelay="0.1"--}}
{{--                                 data-endelementdelay="0.1"--}}
{{--                                 data-endspeed="1000"--}}
{{--                                 data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color: #222; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">Responsive Retina Graphics</div>--}}
                        </li>
                    </ul>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        @yield('content')
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">

                <div class="row col-mb-50">
                    <div class="col-lg-8">

                        <div class="row col-mb-50">
                            <div class="col-md-4">

                                <div class="widget clearfix">

                                    <img id="logos" src="{{asset('images/litbang-min.png')}}" alt="Image" class="footer-logo" style="width: 120px;">

                                    <div style="background: url({{asset('images/world-map.png')}}) no-repeat center center; background-size: 100%;">
                                        <address>
                                            <strong>Alamat:</strong><br>
                                            <span id="alamat"></span>
                                        </address>
                                        <abbr title="Phone Number"><strong>Telepon:</strong></abbr> <span id="telepon"></span><br>
{{--                                        <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>--}}
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> <span id="email"></span>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="row col-mb-50">
                            <div class="col-md-4 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-lg-6 bottommargin-sm">
{{--                                            <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>--}}
{{--                                            <h5 class="mb-0">Total Downloads</h5>--}}
                                        </div>

                                        <div class="col-lg-6 bottommargin-sm">
{{--                                            <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>--}}
{{--                                            <h5 class="mb-0">Clients</h5>--}}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5 col-lg-12">
                                <div class="widget subscribe-widget clearfix">
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
                                        <div class="input-group mx-auto">
                                            <div class="input-group-text"><i class="icon-email2"></i></div>
                                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                            <button class="btn btn-success" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                            <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="" id="mfacebook" onclick="openFb()"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                        </div>
                                        <div class="col-6 col-md-12 col-lg-6 clearfix">
                                            <a href="#" class="social-icon si-dark si-colored si-twitter mb-0" style="margin-right: 10px;">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="" id="mtwitter" onclick="openTw()"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Twitter</small></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-4 col-md-12 col-lg-4 clearfix bottommargin-sm">
                                            <a href="#" class="social-icon si-dark si-colored si-android mb-0" style="margin-right: 10px;">
                                                <i class="icon-android"></i>
                                                <i class="icon-android1"></i>
                                            </a>
                                            <a href="{{ asset('/apk/app.apk') }}"><small style="display: block; margin-top: 3px;"><strong>App</strong><br>on Link</small></a>
                                        </div>
                                        <div class="col-4 col-md-12 col-lg-4 clearfix">
                                            <a href="#" class="social-icon si-dark si-colored si-google mb-0" style="margin-right: 10px;">
                                                <i class="icon-google-play"></i>
                                                <i class="icon-googleplay"></i>
                                            </a>
                                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>App</strong><br>Google</small></a>
                                        </div>
                                        <div class="col-4 col-md-12 col-lg-4 clearfix">
                                            <a href="#" class="social-icon si-dark si-colored si-appstore mb-0" style="margin-right: 10px;">
                                                <i class="icon-app-store"></i>
                                                <i class="icon-app-store-ios"></i>
                                            </a>
                                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>App</strong><br>Apple</small></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">
                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; {{ date("Y") }} All Rights Reserved by Litbang Makassar.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>
                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('js/functions.js')}}"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script src="{{asset('js/add/menus.js')}}"></script>
<script src="{{asset('js/components/bs-datatable.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('custom-scripts')

<script>


    var tpj = jQuery;
    var revapi202;
    var $ = jQuery.noConflict();
    var alfb = '';
    var altw = '';

    $(function () {
        loadProfile();
        loadMenu();
    })

    tpj(document).ready(function() {
        if (tpj("#rev_slider_579_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_579_1");
        } else {
            revapi202 = tpj("#rev_slider_579_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "{{asset('include/rs-plugin/js/')}}",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                responsiveLevels: [1140, 1024, 778, 480],
                visibilityLevels: [1140, 1024, 778, 480],
                gridwidth: [1140, 1024, 778, 480],
                gridheight: [728, 768, 960, 720],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                },
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:300,
                    levels:[2,4,6,8,10,12,14,16,18,20,22,24,49,50,51,55],
                },
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });
            revapi202.on("revolution.slide.onloaded",function (e) {
                setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
            });

            revapi202.on("revolution.slide.onchange",function (e,data) {
                SEMICOLON.slider.revolutionSliderMenu();
            });
        }
    }); /*ready*/

    function loadProfile(){
        $.ajax({

            timeout: 50000,
            url: '/profile/1',
            async: true,

            success: function (res) {
                console.log(res)
                if (res.status === true){
                    $('#logos').attr('src','/files-attachment/logos/'+res.data.logo);
                    $('#main-video').attr('data-videomp4','/files-attachment/main-video/'+res.data.main_video);
                    $('#img-slider-2').attr('src','/files-attachment/slider2/'+res.data.slider_2);
                    $('#img-slider-3').attr('src','/files-attachment/slider3/'+res.data.slider_3);
                    $('#alamat').text(res.data.alamat);
                    $('#telepon').text(res.data.telepon);
                    $('#email').text(res.data.email);
                    alfb = '//'+res.data.facebook;
                    altw = '//'+res.data.twitter;
                }else{
                    Swal.fire('Gagal!', res.message, 'danger');
                }
            },
            error: function (res, textstatus) {
                if (textstatus === "timeout") {
                    notice('Response Time Out', 'error');
                } else {
                    notice(res.responseJSON.message, 'error');
                }
            }
        });
    }
    function openFb(){
        window.open(alfb);
    }
    function openTw(){
        window.open(altw);
    }

</script>

</body>
</html>
