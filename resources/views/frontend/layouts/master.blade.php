<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('frontend/imgs/fav.png') }}" type="image/gif" sizes="16x16">
    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com" as="font">
    <link
        href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700"
        rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preload" href="{{ asset('frontend/css/app.css') }}" as="style">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">

    <link rel="preload" href="{{ asset('frontend/css/custom.css') }}" as="style">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <style>
        .more-products-li-a {
            font-size: 12px !important
        }
        .footer-link{
            padding: 10px;
            color:white
        }

    </style>

</head>

<body>
    <div id="app">
        <div class="preloader">
            <div class="reverse-spinner"></div>
        </div>
        <div id="wrapper" class="wrapper clearfix">

            <header id="navbar-spy" class="header header-topbar header-light">
                <div id="top-bar" class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class=" pull-left">
                                    <p class="contact-info"><i class="icon-map-pin"></i> 22 Albahr St, Tanta, Egypt</p>
                                </div>
                                <div class="pull-right">
                                    <p class="contact-info"><i class="icon-phone"></i> 002 01065370701</p>
                                    <p class="contact-info"><i class="icon-document"></i> 7oroof@7oroof.com</p>
                                    <!-- Module Social -->
                                    <p class="contact-social">
                                        <span>Follow Us:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </p><!-- .module-social end -->
                                </div>

                            </div>
                            <!-- .col-lg-12 -->
                        </div>
                    </div>
                </div>
                <nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark bg-white">
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <img class="logo logo-dark" src="{{ asset('frontend/imgs/logo.png') }}"
                                alt="Easybima Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav">
                                <li class="has-dropdown mega-dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Compare
                                        Insurance Quote</a>
                                    <ul class="dropdown-menu mega-dropdown-menu">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/038-life insurance.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Life Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Provide for your loved ones</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/022-employee.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Disability Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Protecct your paycheck</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/003-insurance.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Homework Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Provide for your loved ones</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col-lg-4">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/009-car insurance.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Auto Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Provide for your loved ones</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/028-insurance.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Renters Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Provide for your loved ones</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="container row">
                                                            <div class="col-md-3">
                                                                <img class="dropdown-img"
                                                                    src="{{ asset('frontend/imgs/vector-logos/046-pet insurance.png') }}"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="col-md-9 text-left">
                                                                <div class="bubble-module--product-text--26hZW">
                                                                    <p
                                                                        class="rcl__primary-3-2C1 bubble-module--color-change--1fFMH rcl__type-a-7-bold-1nc">
                                                                        Pet Insurance</p>
                                                                    <p
                                                                        class="rcl__neutral-2-1A8 rcl__type-b-10-medium-2oW">
                                                                        Provide for your loved ones</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col-lg-4" style="margin-top: 15px; ">
                                                <li>
                                                    <span class="more-products">MORE PRODUCTS</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Insurance Checkup</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Health Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Vision Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Long Term Care Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Prescription Descount
                                                        Cards</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Jewelry Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Identity Theft Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="more-products-li-a">Travel Insurance</a>
                                                </li>
                                            </div>
                                        </div>

                                    </ul>

                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="has-dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Our Story</a>
                                        </li>
                                        <li>
                                            <a href="#">Why Easybima</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog Posts</a>
                                        </li>
                                        <li>
                                            <a href="#">Team</a>
                                        </li>
                                        <li>
                                            <a href="#">Carear</a>
                                        </li>
                                        <li>
                                            <a href="#">Press</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="#">Partnerships</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="module module-consultation">
                                        @guest
                                            <a class="btn" href="/login">Login</a>
                                            @else
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn">Logout</button>
                                                </form>
                                        @endif
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

        </div>

        </nav>
        </header>

        <div class="body">
            @yield('content')
        </div>
        <footer id="footer" class="footer footer-1">
            <div class="footer-widget">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-12 col-md-6 col-lg-8 footer--widget widget-about">
                            <div class="widget-content">
                                <img class="logo footer-logo" src="{{ asset('frontend/imgs/logo.png') }}"
                                    alt="logo">

                                <p>
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> |
                                    <a href="#" class="footer-link">Contact Now</a> |
                                    <a href="#" class="footer-link">Services</a> |
                                    <a href="#" class="footer-link">FAQs</a> |
                                    <a href="#" class="footer-link">Etc</a> 
                                </p>
                                <div class="social-icons">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                                <p>
                                    Copyright EasyBima © 2020
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 footer--widget widget-newsletter">
                            <div class="widget-title">
                                <h5>Stay Updated</h5>
                            </div>
                            <div class="widget-content">
                                <form class="form-newsletter mailchimp">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Subscribe Our Newsletter">
                                    <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                                </form>
                                <div class="subscribe-alert"></div>
                                <div class="clearfix"></div>
                                <p>Get the latest updates and offers.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    </div>



    <script src="{{ asset('frontend/js/app.js') }}" defer></script>

    <script src="{{ asset('frontend/js/plugins.js') }}" defer></script>
    <script src="{{ asset('frontend/js/functions.js') }}" defer></script>

    @yield('scripts')

</body>

</html>
