<!-- popup Modal for asking question-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="askquestion" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        @if (Route::has('login'))

        <!-- start of modal if user login -->
            @auth
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">

            <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>statements of question:</strong>
                            <textarea class="form-control ckeditor" style="height:150px" id="ckview1" name="statement" placeholder="Detail"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>

            <!-- End of modal body if user login -->


                @else

        <!-- start of modal  if user not login -->
            <div class="modal-header">
                <p class="login-box-msg text-bold text-blue font-weight-bold">Please sign in to start your session</p>
            <button type="button" class="close text-blue" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="login-box">
                    <!-- /.login-logo -->
                    <div class="card">
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
                                <a href="{{route('register')}}" class="text-center">Register a new membership</a>
                            </p>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
             <!-- End of modal body if user login -->
                @endauth
            @endif

    </div>
    </div>
</div>
<!-- End of modal -->
