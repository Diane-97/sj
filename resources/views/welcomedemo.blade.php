
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
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about" class="nav-link">About Us</a>
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
                                
                                <a  class="dropdown-item" href="{{ route('profile') }}" class="btn btn-default btn-flat btn-sm">Profile</a>
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
    <!-- /.navbar -->
    <div class="container-fluid">
        <div class="discy-container the-main-container">
            <div class="row">
                <div class="col-12">
                    <div class="call-action-wrap">
                        <div class="col-12">

                            <h1 class="font-weight-bold text-primary">SWALI &amp; JIBU SYSTEM</h1>

                            <div class="w-50 h-25">

                                <p class="font-weight-normal font-weight-light">
                                    We want to connect the people who have knowledge to the people who need it, to bring together people with different perspectives so they can understand each other better, and to empower everyone to share their knowledge.
                                </p>
                            </div>

                        </div>
                        <a class="btn btn-success btn-sm float-right mb-5"  href="{{ route('register') }}"><i class="fas fa-plus pr-1"></i>Create A New Account</a>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
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
                                exam
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

            <!--            End of left Card-->

            <!--            Center Card-->
            <!-- <div id="searchresult"> </div> -->
            <div class="col-6" id="recqn">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-primary font-weight-bold">Recent Questions</h2>

                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-sm card-title float-right" data-toggle="modal" data-target="#exampleModal" >Ask Question</button>
                        <!-- End of Button trigger modal -->

                    </div>
                    <div class="card-body">
                        @foreach($questions as $question)
                        <div class="post">

                            
                           <!--geting of  user name-->
                        
                             <?php $userName = $users->find($question->user_id) ?>
                        
                        
                    <div class="media">
                            <img src="assets/dist/img/user.png" class="align-self-start mr-3" style="width:60px">
                              
                            <div class="media-body">
                            <span class="username"><a href="#">Asked by:  </a><?php echo $userName->name ?></span><br>
                            <span class="description"><a href="#">Asked at:  </a>{{$question->created_at}}</span>
                                <hr>
                            <!-- /.user-block -->
                            
                            @php
                            //output question statement
                               echo $question->statement;
                
                            //get questin-id and user-id 
                            $idq =$question->id;

                      
                            //create model id used on popup model
                            $id =  "collapseId".$idq ;
                            $numberOfAnswer = $countAswer;
                            
                            
                            @endphp

                            {{-- //get the number of answer to specific question --}}
                            @foreach ($answers as $answer) 
                              

                            @endforeach


                    </div>
                    </div>
                           <!-- textbox used to answer question-->

                          @include('inc.answerTxarea')
                            
                        </div>
                        @endforeach
                        {!! $questions->links() !!}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script>











		var ckview = document.getElementById("ckview");
		CKEDITOR.replace(ckview,{
			language:'en-gb',
			filebrowserBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserUploadUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserImageBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
		});

        var ckview = document.getElementById("ckview1");
		CKEDITOR.replace(ckview1,{
			language:'en-gb',
			filebrowserBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserUploadUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			filebrowserImageBrowseUrl : '{{url("ckeditor")}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
		});
</script>

</body>
</html>
