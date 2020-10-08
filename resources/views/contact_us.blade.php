<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/dist/img/logo.png">
    <title>S&amp;J</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="assets/dist/img/logo.png" alt="SJ Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <!--                <span class="brand-text font-weight-bold">S&J</span>-->
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                    </li>
                </ul>

            </div>

            <!-- Right navbar links -->

            @if (Route::has('login'))
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-bold text-blue" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary btn-sm" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-primary btn-sm ml-2" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif

        </div>
    </nav>
    <!-- /.navbar -->
    <div class="call-action-wrap"style="background-color:#D1E5EB;">
        <div class="col-12" >

            <h1 class="font-weight-bold text-primary">SWALI &amp; JIBU SYSTEM</h1>

            <div class="w-50 h-25">

                <p class="font-weight-normal font-weight-light">
                    We want to connect the people who have knowledge to the people who need it, to bring together people with different perspectives so they can understand each other better, and to empower everyone to share their knowledge.
                </p>
            </div></div></div>
    <div class="container pt-1">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{session()->get('success')}}

                            </div>
                        @endif
                        <form method="POST" action="{{route('contact.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" required="">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                            </div>
                            <label for=subject">subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp" placeholder="Enter subject" minlength="3" required="">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="6" name="message" minlength="5" required=""></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                    <div class="card-body">
                        <p class="text-blue text-bold">Get these data from about us</p>
                        <p> <strong>Postal address:</strong> P.O Box:77588</p>
                        <p><strong>Region:</strong> Dar es salaam</p>
                        <p><strong>country:</strong> Tanzania</p>
                        <p><strong>Email address:</strong> techsharelimited@gmail.com</p>
                        <p><strong>Tel:</strong> +255762595847</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <script src="/js/app.js"></script>
    </body>
</html>
