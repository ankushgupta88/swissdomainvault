@extends('layouts.master')

@section('content')
<style>
    html , body { height:100%; }
   .login-section {height:100%;}
</style>

<section class="login-section light-bg d-flex align-items-center" 
style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)),
url('/swissdomainvault/public/assets/images/emailBg.jpg'); background-repeat: no-repeat; background-size: cover;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-9 col-12">
            <div class="card border-0">
                <div class="card-header login-title text-white text-center fw-bold text-uppercase">{{ __('Reset Password') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn main-button text-white w-100 rounded-0 mt-4">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
