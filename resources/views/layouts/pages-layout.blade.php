<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" /> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet" /> 
    <link rel="stylesheet" href="{{  asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('front/css/style.css') }}" />
</head>

<body> 
    {{-- <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5">
                </circle>
            </svg>
        </div>
    </div>  --}}
    <header class="header-area">
        <div class="header-top-bar padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-left">
                                <ul class="list-items">
                                    <li>
                                        <a href="#"><i class="la la-phone mr-1"></i>(123) 123-456</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="la la-envelope mr-1"></i>trizen@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
                                            <option
                                                data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>
                                                Bahasa Indonesia
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>
                                                Deutsch
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)'
                                                selected>
                                                English US
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>
                                                English UK
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>
                                                Romanian
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-es mr-1"></span> Español'>
                                                Español
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>
                                                Francais
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>
                                                Italiano
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>
                                                Polski
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'>
                                                Portuguese
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'>
                                                Turkish
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'>
                                                Russian
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'>
                                                Japanese
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'>
                                                Mandarin
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'>
                                                Mandarin Chinese
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'>
                                                Korean
                                            </option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'>
                                                Hindi
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
                                            <option value="1">AED</option>
                                            <option value="2">AUD</option>
                                            <option value="3">BRL</option>
                                            <option value="4">CAD</option>
                                            <option value="5">CHF</option>
                                            <option value="6">CNY</option>
                                            <option value="7">EUR</option>
                                            <option value="8">GBP</option>
                                            <option value="9">HKD</option>
                                            <option value="10">IDR</option>
                                            <option value="11">INR</option>
                                            <option value="12">JPY</option>
                                            <option value="13">KRW</option>
                                            <option value="14">MYR</option>
                                            <option value="15">NZD</option>
                                            <option value="16">PHP</option>
                                            <option value="17">PLN</option>
                                            <option value="18">RUB</option>
                                            <option value="19">SAR</option>
                                            <option value="20">SGD</option>
                                            <option value="21">THB</option>
                                            <option value="22">TRY</option>
                                            <option value="23">TWD</option>
                                            <option value="24" selected>USD</option>
                                            <option value="25">VND</option>
                                            <option value="26">MXN</option>
                                            <option value="27">ARS</option>
                                            <option value="28">INR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                                        data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                    <a href="#" class="theme-btn theme-btn-small" data-toggle="modal"
                                        data-target="#loginPopupForm">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                                <!-- end menu-toggler -->
                            </div>
                            <!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">Home <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="index.html">Home - main</a></li>
                                                <li><a href="index2.html">Home - Hotel</a></li>
                                                <li><a href="index3.html">Home - Activity</a></li>
                                                <li><a href="index4.html">Home - Car</a></li>
                                                <li><a href="index5.html">Home - Cruise</a></li>
                                                <li><a href="index6.html">Home - Flight</a></li>
                                                <li><a href="index7.html">Home - City Tour</a></li>
                                                <li>
                                                    <a href="index8.html">Home - Bus
                                                        <span class="badge bg-2 text-white">New</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Tour <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li>
                                                    <a href="tour-fullwidth.html">Tour Full width</a>
                                                </li>
                                                <li><a href="tour-grid.html">Tour Grid</a></li>
                                                <li><a href="tour-list.html">Tour List</a></li>
                                                <li>
                                                    <a href="tour-left-sidebar.html">Tour Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="tour-right-sidebar.html">Tour Right Sidebar</a>
                                                </li>
                                                <li><a href="tour-details.html">Tour details</a></li>
                                                <li><a href="tour-booking.html">Tour Booking</a></li>
                                                <li>
                                                    <a href="tour-search-result.html">Tour Search Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Cruise <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="cruises.html">Cruises</a></li>
                                                <li><a href="cruises-list.html">Cruise list</a></li>
                                                <li>
                                                    <a href="cruise-sidebar.html">Cruise Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="cruise-details.html">Cruise details</a>
                                                </li>
                                                <li>
                                                    <a href="cruise-booking.html">Cruise Booking</a>
                                                </li>
                                                <li>
                                                    <a href="cruise-search-result.html">Cruise Search Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages <i class="la la-angle-down"></i></a>
                                            <div class="dropdown-menu-item mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="col-lg-3 mega-menu-item">
                                                        <ul>
                                                            <li><a href="add-hotel.html">add hotel </a></li>
                                                            <li>
                                                                <a href="add-flight.html">add flight </a>
                                                            </li>
                                                            <li><a href="add-tour.html">add tour </a></li>
                                                            <li>
                                                                <a href="add-cruise.html">add cruise </a>
                                                            </li>
                                                            <li><a href="add-car.html">add car</a></li>
                                                            <li>
                                                                <a href="user-dashboard.html">User Dashboard</a>
                                                            </li>
                                                            <li>
                                                                <a href="admin-dashboard.html">Admin Dashboard</a>
                                                            </li>
                                                            <li><a href="career.html">career</a></li>
                                                            <li>
                                                                <a href="route-map.html">route map<span
                                                                        class="badge bg-2 text-white">New</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3 mega-menu-item">
                                                        <ul>
                                                            <li>
                                                                <a href="route.html">route<span
                                                                        class="badge bg-2 text-white">New</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="route-destination.html">route destination<span
                                                                        class="badge bg-2 text-white">New</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="career-details.html">career details</a>
                                                            </li>
                                                            <li>
                                                                <a href="user-profile.html">User profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="become-local-expert.html">Become Local
                                                                    Expert</a>
                                                            </li>
                                                            <li><a href="contact.html">contact</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li>
                                                                <a href="recover.html">recover password</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3 mega-menu-item">
                                                        <ul>
                                                            <li>
                                                                <a href="payment-received.html">payment received</a>
                                                            </li>
                                                            <li>
                                                                <a href="payment-complete.html">payment complete</a>
                                                            </li>
                                                            <li>
                                                                <a href="destinations.html">Destinations</a>
                                                            </li>
                                                            <li><a href="about.html">about</a></li>
                                                            <li>
                                                                <a href="services.html">Our Services</a>
                                                            </li>
                                                            <li><a href="gallery.html">Gallery</a></li>
                                                            <li><a href="pricing.html">pricing</a></li>
                                                            <li><a href="faq.html">faq</a></li>
                                                            <li>
                                                                <a href="add-new-post.html">add new post</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3 mega-menu-item">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-full-width.html">blog full width</a>
                                                            </li>
                                                            <li><a href="blog-grid.html">blog grid</a></li>
                                                            <li>
                                                                <a href="blog-sidebar.html">blog sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-single.html">blog details</a>
                                                            </li>
                                                            <li>
                                                                <a href="coming-soon.html">Coming Soon</a>
                                                            </li>
                                                            <li><a href="page-404.html">404 page</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Flight <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="flight-grid.html">Flight grid</a></li>
                                                <li><a href="flight-list.html">Flight list</a></li>
                                                <li>
                                                    <a href="flight-sidebar.html">Flight sidebar </a>
                                                </li>
                                                <li>
                                                    <a href="flight-single.html">Flight details</a>
                                                </li>
                                                <li>
                                                    <a href="flight-booking.html">Flight Booking</a>
                                                </li>
                                                <li>
                                                    <a href="flight-search-result.html">Flight Search Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Hotel <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="hotel-grid.html">Hotel grid</a></li>
                                                <li><a href="hotel-list.html">Hotel list</a></li>
                                                <li>
                                                    <a href="hotel-sidebar.html">Hotel sidebar </a>
                                                </li>
                                                <li><a href="hotel-single.html">Hotel details</a></li>
                                                <li>
                                                    <a href="hotel-booking.html">Hotel Booking</a>
                                                </li>
                                                <li>
                                                    <a href="hotel-search-result.html">Hotel Search Result</a>
                                                </li>
                                                <li>
                                                    <a href="#">Rooms <i class="la la-plus"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="room-list.html">Room List</a></li>
                                                        <li><a href="room-grid.html">Room Grid</a></li>
                                                        <li>
                                                            <a href="room-search-result.html">Search Result</a>
                                                        </li>
                                                        <li>
                                                            <a href="room-search-result-list.html">Search Result
                                                                list</a>
                                                        </li>
                                                        <li>
                                                            <a href="room-details.html">Room Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">car <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="car-grid.html">car grid</a></li>
                                                <li><a href="car-list.html">car list</a></li>
                                                <li><a href="car-sidebar.html">car sidebar </a></li>
                                                <li><a href="car-single.html">car details</a></li>
                                                <li><a href="car-booking.html">Car Booking</a></li>
                                                <li>
                                                    <a href="car-search-result.html">Car Search Result</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end main-menu-content -->
                            <div class="nav-btn">
                                <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>
                            </div>
                            <!-- end nav-btn -->
                        </div>
                        <!-- end menu-wrapper -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end header-menu-wrapper -->
    </header>
        @yield('content')
    <!-- Template JS Files -->
    <script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front/js/moment.min.js') }}"></script>
    <script src="{{ asset('front/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('front/js/animated-headline.js') }}"></script>
    <script src="{{ asset('front/js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('front/js/quantity-input.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
</body>

</html>
