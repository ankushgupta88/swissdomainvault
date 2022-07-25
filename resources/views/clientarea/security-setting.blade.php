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
    
  <section class="main_form review-checkout-section py-4 py-md-5">
   <div class="container-fluid">
        <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-md-5 pb-4 border-bottom">
    		  <h5 class="mb-0 fw-bold">Security Settings <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
        <div class="row py-3">
         <div class="col-lg-10 col-md-9 left-block-side bg-unset secu_outer">
            <h5 class="security_head2 mb-4">Single Sign-On</h5>
            <div class="alert alert-success">
                Third party applications leverage the Single Sign-On functionality to provide direct access to your billing
                account without you having to re-authenticate.
            </div>
            <div class="security_sec_on/off d-flex align-items-center ps-3 py-3">
                <label class="switch">
                    <input type="checkbox" id="togBtn">
                    <div class="slider round">
                        <!--ADDED HTML -->
    
                        <!--END-->
                    </div>
                </label>
                <div class="can-toggle">
                    <label for="a">
                        <div class="can-toggle__switch" data-checked="Yes" data-unchecked="No"></div>
                    </label>
                </div>
                <p class="p-0 m-0 ps-3">Single Sign-On is currently permitted for your account.</p>
            </div>
            <p class="bottom_text">You may wish to disable this functionality if you provide access to any of your third party applications to users who you do not wish to be able to access your billing account.</p>
        </div>
        <!--right block-->
          <div class="col-lg-2 col-md-3">
              @include('sidebar.my-account')
          </div>
        </div>
    </div>
  </section>
 @endsection