@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('../public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Client Area </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>
    
<div class="main_form review-checkout-section py-5">
    <div class="container-fluid">
        <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Change Password <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
        <div class="row pb-3">
            <div class="col-lg-10 col-md-9 left-block-side bg-unset">
                <div class="row">
                    <div class="col-lg-7 col-md-10 col-12 mx-auto">
                        <div class="form_outer py-4">
                            @if(Session::has('success'))
                              <p class="success-msg">{{ Session::get('success') }}</p>
                            @endif
                            @if(Session::has('unsuccess'))
                              <p class="unsuccess-msg">{{ Session::get('unsuccess') }}</p>
                            @endif
          			        <form method="POST" action="{{ route('clientarea.update.change.password') }}" enctype="multipart/form-data">
                                @csrf  
                                <div class="form-group prepend-icon mb-3 d-flex align-items-center">
                                    <label for="inputExistingPassword" class="col-md-3 control-label mb-2">Existing Password</label>
                                    <input type="password" name="old_password" value="{{ old('old_password') }}" id="old_password" class="field form-control rounded-0 @error('old_password') is-invalid @enderror" autofocus=""> 
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group prepend-icon mb-3 d-flex align-items-center">
                                    <label for="inputExistingPassword" class="col-md-3 control-label mb-2">New Password</label>
                                    <input type="password" name="new_password" value="{{ old('new_password') }}" id="new_password" class="field form-control rounded-0 @error('new_password') is-invalid @enderror" autofocus=""> 
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--<div class="alert alert-primary">-->
                                <!--    <strong>Tips for a good password</strong><br>Use both upper and lowercase characters<br>Include at least one symbol (# $ ! % &amp; etc...)<br>Don't use dictionary words-->
                                <!--</div>-->
                            
                                <div class="form-group prepend-icon mb-3 fw-bold d-flex align-items-center">
                                    <label for="inputExistingPassword" class="col-md-3 control-label mb-2">Confirm Password</label>
                                    <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" class="field form-control rounded-0 @error('confirm_password') is-invalid @enderror" autofocus=""> 
                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="button_form d-flex justify-content-center align-items-center pt-4">
                                    <input class="ch_button btn main-button text-white rounded-0 " type="submit" value="Save Changes">
                                    <input class="ch_button2 btn main-button ms-3 rounded-0 border-button" type="reset" value="Cancel">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!--right block-->
                <div class="col-lg-2 col-md-3">
                     @include('sidebar.my-account')
                </div>
            
        </div>
    </div>
</div>@endsection