
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
	<script src="/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="/assets/dist/img/logo.png" alt="SJ Logo" class="brand-image img-circle elevation-3"
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
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>

                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                                <img src="/img/user.png" class="user-image img-sm" alt="User Image">
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
                            <a class="btn btn-primary btn-sm ml-3" href="{{ route('register') }}">Register</a>
                        </li>  
                        @endif
                    @endauth
                </ul>
            @endif

               
               
            

        </div>
    </nav>
    <!-- /.navbar -->
    <div class="container-fluid">
        <div class="discy-container the-main-container">
            <div class="row" >
                <div class="col-12" style="background:url('{{asset('img/back.jpeg')}}');">
                    <div class="call-action-wrap">
                        <div class="col-12" >

                            <h1 class="font-weight-bold text-primary">SWALI &amp; JIBU SYSTEM</h1>

                            <div class="w-50 h-25">

                                <p class="font-weight-normal font-weight-bold text-white" style="font-size:25px;">
                                    We want to connect the people who have knowledge to the people who need it, to bring together people with different perspectives so they can understand each other better, and to empower everyone to share their knowledge.
                                </p>
                            </div>

                        </div>
                        <a class="btn btn-success float-right mb-5" href="{{ route('register') }}"><i class="fas fa-plus pr-1"></i>Create A New Account</a>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="row">

            <!--           Starting of Left card-->
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Classes &amp; Exams</h2>
                    </div>
                    <div class="card-body">
                        <div class="post">
                            <div class="user-block">
                                <span class="username">
                                    <a href="#">Class name</a>
                              </span>
                                <span class="description">Shared date</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                         
                            </p>
                        </div>
                    </div>
                </div>
                <!--                    End of class and exam Card-->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Links</h2>
                    </div>
                    <div class="card-body">
                        <div class="post">
                           
                                    <p></p>

                        </div>
                    </div>
                </div>
            </div>

            <!--            End of left Card-->

            <!--            Center Card-->
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Question Aswers</h2>

                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-sm card-title float-right" data-toggle="modal" data-target="#exampleModal" >Ask Question</button>
                        <!-- End of Button trigger modal -->

                    </div>
                    <div class="card-body">
           
                        <!-- display spacific question and user who ask question -->
                        <h4>QUESTION:</h4>
                        <hr>
                        <div class="post">
                            <div class="box-body" style="font-size:50px">
                                <?php echo $question->statement ?>
                                @php
                                 //get questin-id  
                                $idq = $question->id;

                                //create model id used on popup model
                                $id =  "collapseId".$idq ;   
                                @endphp
                            </div>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="/assets/dist/img/user.png" alt="user image">
                                <span class="username">
                                    <?php $userName = $users->find($question->user_id) ?>
                                    <a href="#"> <?php echo $userName->name ?> </a>
                              </span>
                                <span class="description">{{$question->created_at}}</span><br>
                            </div>
                            <!-- /.user-block -->
                        </div>
                    <h4>{{$countAswer}} ANSWERS:</h4>
                    <hr>
                         <!-- display answer of question and user who give answer -->
                        @foreach($answers as $answer)
                        <div class="post">
     
                           <!--geting of  user name-->
                        
                             <?php $userName = $users->find($answer->user_id) ?>
                        
                        

                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="/assets/dist/img/user.png" alt="user image">
                                <span class="username">
                                   
                          <a href="#"><?php echo $userName->name ?></a>
                                </span>
                                <span class="description">{{$answer->created_at}}</span>
                            </div>
                            <!-- /.user-block -->
                            
                            @php
                            //output question statement
                               echo $answer->statement;
                
                          

                            @endphp
                            
                        </div>
                        @endforeach

                         <!-- textbox used to answer question-->

                        
                    
{{-- aaaasssssssssssssssssss --}}

<!-- textarea of answer -->

@if (Route::has('login'))
            
<!-- start of modal if user login -->
    @auth
    <div class="collapse multi-collapse" id="<?php echo $id ?>">
        <div class="box-body">
            <form action="{{ route('answers.store') }}" method="POST">
                @csrf
                    <div>
                    <!-- input field to get question id -->
                <input  name="questionId" value="<?php echo $idq ?>" style="display:none">

                <!-- input field to get user id -->
                    <input  name="userId" value="{{Auth::user()->id}}" style="display:none">
                
                    <textarea class="form-control textarea ckeditor" name="statement" id="ckview" placeholder="Answer"
                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                    <div class="box-footer clearfix">
                        <button class="fa-pull-right btn btn-primary btn-sm" type="submit" id="sendEmail">Send
                            <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
            </form>
        </div>
       
    </div>
       <p>
        <span data-toggle="tooltip" title="3 Number of answers" class="badge bg-success">{{$question->id}}</span>
       <span> <button class="btn btn-success btn-sm" type="submit" data-toggle="collapse" data-target="#<?php echo $id ?>" aria-expanded="false" aria-controls="<?php echo $id ?>"><i class="fas fa-reply pr-1"></i>answer question</button></span>
        </p>
    
    <!-- End of modal body if user login -->

   
        @else
<!-- start of modal  if user not login --> 
<div class="modal fade" id="<?php echo $id ?>" tabindex="-1" aria-labelledby="askquestion" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">please login </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</div>
<p>
<span data-toggle="tooltip" title="3 Number of answers" class="badge bg-success">{{$question->id}}</span>

<span> <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#<?php echo $id ?>" aria-expanded="false" aria-controls="<?php echo $id ?>"><i class="fas fa-reply pr-1"></i>answer question</button></span>
</p>
     <!-- End of modal body if user login -->
        @endauth
    @endif


<!-- End of modal -->
                </div>
                </div>
            </div>
            <!--            End of center card-->

            <!--            Right Card-->
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Popular Questions</h2>
                    </div>
                    <div class="card-body">
                        @foreach ($popularQuestions as $popularQuestion)
                        <div class="post">
                            
                            <!-- /.user-block -->
                            @php
                                   echo $popularQuestion->statement
                            @endphp
                          
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <!--                    End of popular Question Card-->

                <!--                Advertisements Card-->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Advertisements</h2>
                    </div>
                    <div class="card-body">
                        <div class="post">
                            <ul>
                                <li>
                                    <p>
                                        Link
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>


            </div>
            <!--            End of Right Card-->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Swali &amp; Jibu System
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020<a href="#">Techshare Limited</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- include popup pages -->
@include('inc.popup')

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script src="/js/bootstrap.js"></script>

<script>
		var ckview = document.getElementById("ckview");
		CKEDITOR.replace(ckview,{
			language:'en-gb',
			filebrowserBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserUploadUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserImageBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
		});
</script>

</body>
</html>
