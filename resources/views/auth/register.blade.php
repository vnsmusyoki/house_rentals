<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <meta name="robots" content="noindex, nofollow">
    <title>Sign Up Page</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>

<body class="account-page">
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <form class="login-userset" method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- <div class="login-logo logo-normal">
                            <img src="{{  asset('backend/assets/img/logo.png') }}" alt="img">
                        </div> --}}
                        {{-- <a href="index.html" class="login-logo logo-white">
                            <img src="assets/img/logo-white.png" alt>
                        </a> --}}
                        <div class="login-userheading">
                            <h3>Hello,</h3>
                            <h4>Welcome to our Rental Management System</h4>
                        </div>
                        <div class="form-login">
                            <label>Full Name</label>
                            <div class="form-addons">
                                <input type="text" placeholder="Enter your full name" name="name">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" placeholder="Enter your email address" name="email">
                                <img src="{{ asset('backend/assets/img/mail.svg') }}" alt="img">

                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" placeholder="Enter your password"
                                    name="password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-login">
                            <label>Confirm Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" placeholder="Enter your password"
                                    name="password_confirmation">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-login">
                            <button class="btn btn-login" type="submit">Sign Up</button>
                        </div>
                        <div class="signinform text-center">
                            <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign In</a>
                            </h4>
                        </div>

                    </form>
                </div>
                <div class="login-img">
                    <img src="{{ asset('backend/assets/img/login.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
</body>

</html>
