<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AutoGleam - Car Detailing Business</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white d-none plr--9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                                <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black  ltn__logo-right-menu-option plr--9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-12 col-lg-12 col-xl-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo" style="max-width:150px;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul style="justify-content:end !important;">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('giftcard') }}">Gift Card</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li class="special-link"><a href="{{ route('booking') }}">BOOK NOW</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2" style="flex:0 0 50%; justify-content:end;">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle" style="width:45px; height:45px;">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('giftcard') }}">Gift Card</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('booking') }}">Book Now</a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        {{--<div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="{{ asset('frontend/img/bg/4.jpg') }}">
                            <h6 class="ltn__secondary-color text-uppercase">// time shedule</h6>
                            <h4 class="footer-title">Meet In Timeline.</h4>
                            <ul>
                                <li>Monday <span>07:00AM - 20:00PM</span></li>
                                <li>Tuesday <span>07:00AM - 20:00PM</span></li>
                                <li>Wednesday <span>07:00AM - 20:00PM</span></li>
                                <li>Thursday <span>07:00AM - 20:00PM</span></li>
                                <li>Friday <span>07:00AM - 20:00PM</span></li>
                                <li>Saturday <span>07:00AM - 20:00PM</span></li>
                                <li>Sunday <span>Official Holiday</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Services.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service.html">Engine Diagnostics</a></li>
                                    <li><a href="service.html">Vehicles Damaged</a></li>
                                    <li><a href="service.html">Air Conditioning Evac</a></li>
                                    <li><a href="service.html">Anti Lock Brake Service</a></li>
                                    <li><a href="service.html">Computer Diagnostics</a></li>
                                    <li><a href="service.html">Performance Upgrades</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service.html">Car Wash & Cleaning</a></li>
                                    <li><a href="service.html">Choose your Repairs</a></li>
                                    <li><a href="service.html">Free Consultancy</a></li>
                                    <li><a href="service.html">Emergency Time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">News Feeds.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 28, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">Electric Car Maintenance, Servicing & Repairs</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo" style="max-width:100px;"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h4 class="mb-2">Copyright &copy; {{ date('Y') .' '. config('app.name') }}</h4>
                                    <h6>Developed by <a href="https://locaatech.com"><u>LocaaTech</u></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            {{--<ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.cus_date').attr('type', 'text');
            $('.cus_date').focus(function () {
                $(this).attr('type', 'date');
            });
            $('.cus_date').blur(function () {
                $(this).attr('type', 'text');
            });
        })
    </script>
  
</body>
</html>
