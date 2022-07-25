@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> 
                  Shopping Cart
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
               <h5 class="fw-bold">Shopping Cart  <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
      </div>
      <div class="row">
         <!--left block-->
         <div class="col-lg-9 col-md-9 left-block-side bg-unset">
            @if(app('request')->input('a') === 'add' && app('request')->input('pid'))
            	@include('checkout.cart.add-pid')
            @elseif(app('request')->input('a') === 'view')
            	@include('checkout.cart.view')
            @elseif(app('request')->input('a') === 'confproduct' && app('request')->input('i') === '0')
                @include('checkout.cart.conf-product-i')
            @elseif(app('request')->input('a') === 'confdomains')
            	@include('checkout.cart.conf-domains')
            @elseif(app('request')->input('a') === 'checkout' && app('request')->input('e') === 'false')
            	@include('checkout.cart.checkout')
            @elseif(app('request')->input('a') === 'add' && app('request')->input('domain') === 'register' && app('request')->input('keyword'))
            	@include('checkout.cart.domain-register-keyword')
            @elseif(app('request')->input('a') === 'add' && app('request')->input('domain') === 'register'))
            	@include('checkout.cart.domain-register')
            @elseif(app('request')->input('a') === 'add' && app('request')->input('domain') === 'transfer' && app('request')->input('keyword'))
            	@include('checkout.cart.domain-transfer-keyword')
        	@elseif(app('request')->input('a') === 'add' && app('request')->input('domain') === 'transfer')
            	@include('checkout.cart.domain-transfer')
            @elseif(app('request')->input('gid') === 'addons')
            	@include('checkout.cart.addons')
            @else
            	@include('checkout.cart.hosting-service-list')
            @endif
         </div>
         <!--right block-->
         <div class="col-lg-3 col-md-3">
            @include('sidebar.right-sidebar')
         </div>
      </div>
   </div>
</section>
@endsection