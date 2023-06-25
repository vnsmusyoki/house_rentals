<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="{{ route('home') }}" class="logo logo-normal">
                    <img src="assets/img/logo.png" alt>
                </a>
                <a href="{{ route('home') }}" class="logo logo-white">
                    <img src="assets/img/logo-white.png" alt>
                </a>
                <a href="{{ route('home') }}" class="logo-small">
                    <img src="assets/img/logo-small.png" alt>
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                    <i data-feather="chevrons-left" class="feather-16"></i>
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item nav-searchinputs">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search">
                                <div class="search-addon">
                                    <span><i data-feather="search" class="feather-14"></i></span>
                                </div>
                            </div>

                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow flag-nav nav-item-box">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                        role="button">
                        <i data-feather="globe"></i>
                    </a>

                </li>

                <li class="nav-item nav-item-box">
                    <a href="javascript:void(0);" id="btnFullscreen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <li class="nav-item nav-item-box">
                    <a href="#">
                        <i data-feather="mail"></i>
                        <span class="badge rounded-pill">0</span>
                    </a>
                </li>

                <li class="nav-item dropdown nav-item-box">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i data-feather="bell"></i><span class="badge rounded-pill">2</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Rental Payments</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">

                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span
                                                        class="noti-title">{{ ucwords(Auth::user()->name) }}</span>
                                                    Paid <span class="noti-title">Ksh 1000 for
                                                        {{ ucwords($apartments[0]->apartment_name) }}
                                                        Room 2B</span></p>
                                                <p class="noti-time"><span
                                                        class="notification-time">{{ ucwords(Auth::user()->created_at->diffForHumans()) }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item nav-item-box">
                    <a href="#"><i data-feather="settings"></i></a>
                </li>
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-info">
                            <span class="user-letter">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt
                                    class="img-fluid">
                            </span>
                            <span class="user-detail">
                                <span class="user-name">{{ ucwords(Auth::user()->name) }}</span>
                                <span class="user-role">Active Now</span>
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img
                                        src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt>
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>{{ ucwords(Auth::user()->name) }}</h6>
                                    <h5>Land Lord</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="#"> <i class="me-2" data-feather="user"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="#"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><img
                                    src="{{ asset('backend/assets/img/icons/log-out.svg') }}" class="me-2"
                                    alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="submenu-open"> 
                            <ul>
                                <li class="active">
                                    <a href="{{ route('home') }}"><i data-feather="grid"></i><span>Dashboard</span></a>
                                </li>
                                
                        </li>
                        @role('landlord')
                        @include('layouts.landlord-menu')
                        @endrole
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('backend/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ asset('backend/assets/js/script.js') }}"></script>

    @yield('scripts')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>
