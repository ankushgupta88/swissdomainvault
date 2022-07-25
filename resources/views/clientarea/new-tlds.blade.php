@extends('layouts.master') 
@section('content')
    
    
    
    
    <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('../public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> 
                  New TLDs 
               </h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Review & Checkout section-->
<section class="review-checkout-section py-5">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 py-4">
            <div class="title border-bottom">
               <h5 class="fw-bold"> New TLDs <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
      </div>
      <div class="row">
          <div class="col-md-3">
              </div>
          <div class="col-md-6">
              <div class="header-inner-title text-center" >
                     <h4 class="clr-hex fw-bold">Bad User name or Password</h4>
                  </div>
                  
                  
                  <img src="{{ asset('public/assets/images/oops.jpg') }}" class="d-block w-100" alt="hero-bg2.jpg">
                  <h3 class="something text-center py-4 ">
                      This portal has not been configured.
                  </h3>
                  <p>You must publish before viewing your Watchlist. If you have questions please contact support.</p>
          </div>
          <div class="col-md-3">
              </div>
      </div>
      </div>
      </div>
      </div>
      </section>
@endsection 