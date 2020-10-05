
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <title>S&amp;J</title>
	<script src="ckeditor/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white sticky-top">
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
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus" class="nav-link">Contact Us</a>
                    </li>

                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3" action="{{ url('search') }}" method="POST" role="search">
                    <div class="input-group input-group-sm">
                   
                        <input class="form-control form-control-navbar" name="q"  id="search" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Right navbar links -->
            
                @if (Route::has('login'))
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="img/user.png" class="user-image img-sm" alt="User Image">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                <a  class="dropdown-item" href="#" class="btn btn-default btn-flat btn-sm">Profile</a>
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
                            <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a>
                        </li>  
                        @endif
                    @endauth
                </ul>
            @endif

               
        </div>
    </nav>
<div class="content-wrapper" style="min-height: 2341.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
               
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->

                  <div class="tab-pane" id="settings">
                  
                    <form class="form-horizontal mt-3" action="{{route('users.edit', Auth::user()->id)}}" method="POST">
                    {{ csrf_field() }}
                     {{ method_field('patch') }}
                      <div class="form-group row">
                        <label for="inputName" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-7">
                          <input type="email" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->name }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-7">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->Email }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputphone" class="col-md-4 col-form-label text-md-right">PhoneNumber</label>
                        <div class="col-md-7">
                          <input type="integer" class="form-control" id="inputphone" placeholder="phone" value="{{ Auth::user()->phone }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputrole" class="col-md-4 col-form-label text-md-right">Role</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" id="inputName2" placeholder="role" value="{{Auth::user()->role }}">
                        </div>
                      </div>
                     
                    
                      <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="new password" value="{{ Auth::user()->password }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm new password" value="{{ Auth::user()->$user->confirmpassword }}">
                            </div>
                        </div>



                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>