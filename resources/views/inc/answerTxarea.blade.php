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
                        
                            <textarea class="form-control textarea ckeditor" name="statement" placeholder="Answer" id="ckview"
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
                <span data-toggle="tooltip" title="3 Number of answers" class="badge bg-success">@php
                    echo  $numberOfAnswer;
                @endphp</span>
                <span> <a class="btn btn-success btn-sm" href="{{ route('answers.show',$question->id)}}"><i class="fas fa-eye pr-1"></i>view</a></span>
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
<span data-toggle="tooltip" title="3 Number of answers" class="badge bg-success">{{$countAswer}}</span>
   <span> <a class="btn btn-success btn-sm" href="{{ route('answers.show',$question->id)}}"><i class="fas fa-eye pr-1"></i>view</a></span>
   
   <span> <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#<?php echo $id ?>" aria-expanded="false" aria-controls="<?php echo $id ?>"><i class="fas fa-reply pr-1"></i>answer question</button></span>
    </p>
             <!-- End of modal body if user login -->
                @endauth
            @endif
       
   
<!-- End of modal -->