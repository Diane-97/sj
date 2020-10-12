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

                            <textarea class="form-control textarea ckeditor" name="statement" placeholder="Answer" id="<?php echo $ckview?>"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>

                            <div class="box-footer clearfix">
                                <button class="fa-pull-right btn btn-primary btn-sm" type="submit" id="sendEmail">Send
                                    <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                    </form>
                </div>

            </div>
               <div class="row">
                   <div class="col-sm-2">
                <span> <a class="btn btn-success btn-sm" href="{{ route('answers.show',$question->id)}}"><i class="fas fa-eye pr-1"></i>view</a></span>
                   </div>
                   <div class="col-sm-4 mt-1">
               <span> <button class="btn btn-success btn-sm" type="submit" data-toggle="collapse" data-target="#<?php echo $id ?>" aria-expanded="false" aria-controls="<?php echo $id ?>"><i class="fas fa-reply pr-1"></i>answer question</button></span>
                </div>
               </div>

            <!-- End of modal body if user login -->


                @else
        <!-- start of modal  if user not login -->
<div class="modal fade" id="<?php echo $id ?>" tabindex="-1" aria-labelledby="askquestion" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-blue text-bold" id="exampleModalLabel">Sign in to start your session</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="card-body login-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text text-blue">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text text-blue">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input primary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-sm">{{ __('Login') }}</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mb-1">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </p>
                    <p class="mb-0">
                        <a href="{{route('register')}}" class="text-center">Register new membership</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
   <span> <a class="btn btn-success btn-sm" href="{{ route('answers.show',$question->id)}}"><i class="fas fa-eye pr-1"></i>view</a></span>
    </div>
    <div class="col-sm-4 mt-1">
   <span> <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#<?php echo $id ?>" aria-expanded="false" aria-controls="<?php echo $id ?>"><i class="fas fa-reply pr-1"></i>answer question</button></span>
    </div>
</div>
             <!-- End of modal body if user login -->
                @endauth
            @endif


<!-- End of modal -->
