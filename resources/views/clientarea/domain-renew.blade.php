@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('../public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> 
                  Renew 
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
               <h5 class="fw-bold"> Renewal <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
      </div>
      <div class="row">
         <!--left block-->
         <div class="col-lg-9 col-md-9 left-block-side bg-unset">
            <section class="service-addon">
    
    <div class="">
        <div class="row">
            <div class="col-md-12">
                  <div class="header-inner-title border-bottom">
                     <h6 class="clr-hex">Domain Renewal </h6>
                  </div>
                  <div class="mt-5">
                         <div class="alert alert-info text-center"> You do not currently have any domains that are eligible for renewal</div>
                         <div class="text-center">
                         <button class="btn main-button text-white rounded-0 my-3"> <i class="fa fa-arrow-left me-2"></i> Return to Client Area</button>
                         </div>
                     </div>
                 
                 
                  
                  <!--multiple domain-->
                 
                  <!--suggested-domains-->
                 
                  
                 <!--add web hosting block-->
                   
               </div>
        </div>
        
    </div>
</section>
         </div>
         <!--right block-->
         <div class="col-lg-3 col-md-3">
            @include('sidebar.right-sidebar')
         </div>
      </div>
   </div>
</section>
@endsection