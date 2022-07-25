
@extends('layouts.master')

@section('content')

<style>
    html , body { height:100%; }
   .login-section {height:100%;}
</style>
 
 
 <section class="login-section light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)), url('./public/assets/images/loginBg.jpg'); background-repeat: no-repeat; background-size: cover;">
 <div class="container login-detail-page">
     
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-9 col-12">
            <div class="card login-page-detail border-0">
                <div class="login-title text-uppercase fw-bold text-white text-center py-3 px-1"><i class="fa fa-key pe-2"></i> {{ __('ACCOUNT LOGIn') }}</div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row pb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                  @if (Route::has('password.request'))
                                    <a class="btn btn-link forgetpass-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button type="submit" class="btn main-button text-white w-100 rounded-0 mt-4">
                                    {{ __('Login') }}
                                </button>
                                <small class="pt-1">You will be redirected after login</small>
                            </div>
                        </div>
                    </form>
                </div>
                
            <!--create account-->
             <div class="col-md-12">
                 <div class="create-account pt-5">
                   <div class="card-header text-uppercase fw-bold"><i class="fa fa-paper-plane pe-2" aria-hidden="true"></i>{{ __('Create an account with us . . .') }}</div>  
                   <div class="login-button mx-3 my-4 d-flex justify-content-between">
                            <a class="btn button-banner text-white rounded-0 me-md-4 color-bg-primary fs-14" href="{{ url('register') }}">Register </a>
                            <a class="btn button-banner return-home  rounded-0 fs-14" href="{{ url('/') }}"> Return Home </a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
