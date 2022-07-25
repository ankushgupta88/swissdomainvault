@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> Shopping Cart </h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Shopping Cart content section-->
<section class="shopping-cart-section py-5">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 py-4">
            <div class="page-inner-title pb-5">
               <h5 class="mb-0 fw-bold">Shopping Cart <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
         <div id="order-standard_cart">
            <div class="row">
               <!--left block-->
               <div class="col-md-9 left-block-side">
                  <div class="header-inner-title border-bottom">
                     <h6 class="clr-hex">Register Domain</h6>
                  </div>
                  <p class="pt-2">Find your new domain name. Enter your name or keywords below to check availability.</p>
                  <div class="domain-checker-block">
                     <div class="domain-checker-bg" style="background-image:url('./public/assets/images/globe.png');">
                        <form method="POST" action="#" enctype="multipart/form-data" id="domain_search" class="serach-cart py-5">
                              @csrf
                              <input type="hidden" name="a" value="checkDomain">
                           <div class="inner-group-box d-flex p-2 bg-white rounded-10">
                              <input class="form-control" type="search" name="domain_name" value="{{ app('request')->input('keyword') }}" placeholder="Search" aria-label="Search" id="domain_name">
                              <button class="btn bg-primary-clr text-white rounded-0 domain_submit" type="submit">Search</button> 
                           </div>
                        </form>
                     </div>
                  </div>
                  <div id="Domain-search-results">
                     <div class="domain_search_responce"></div> 
                     <div class="domain_search_default text-center">
                        <p><i class="fa fa-spinner fa-pulse text-black"></i> Searching...</p>
                     </div>
                  </div>
                  <!--multiple domain-->
                  <div class="row pt-2">
                    <div class="row spotlight_search_responce"></div>
                    <div class="row spotlight_search_default">
                        <div class="col-md-3">
                            <div class="spotlightcom text-center position-relative p-3">
                                <div class="spotlight-tld-hot">Hot</div>
                                <p class=" fw-bold mb-0"> .com </p>
                           <p class="com_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class=" fw-bold mb-0"> .ch</p>
                           <p class="ch_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <p class=" fw-bold mb-0"> .me </p>
                           <p class="me_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class="fw-bold mb-0"> .us </p>
                           <p class="us_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!--suggested-domains-->
                  <div class="suggested-domains py-4">
                     <div class="panel-heading pb-2 px-2"> Suggested Domains</div>
                     <div class="suggestion_search_default text-center pt-3">
                        <p class="mb-0"><i class="fa fa-spinner fa-pulse text-black"></i>  Generating suggestions for you </p>
                     </div>
                     <div class="suggestion_search_responce"></div>
                  </div>
                  
                 <!--add web hosting block-->
                   <div class="row">
                     <div class="col-md-12">
                        <div class="panel-footer more-suggestions text-center">
                           <p class="fs-11"> Domain name suggestions may not always be available. Availability is checked in real-time at the point of adding to the cart.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="promo-domain-box p-4 h-100">
                           <div class="domain-promo-box d-flex justify-content-between">
                              <div class="domain-promo-box-content">
                                 <h4 class="mb-0">Add Web Hosting</h4>
                                 <p class="warning-text">Choose from a range of web hosting packages</p>
                              </div>
                              <div class="domain-promo-box-icon">
                                 <i class="fa fa-server fa-4x" aria-hidden="true"></i>
                              </div>
                           </div>
                           <p class="mb-2">We have packages designed to fit every budget</p>
                           <a href="{{ url('hosting-service?slug=wordpress-hosting') }}" class="btn warning-btn text-white fs-14 rounded-0">Explore packages now</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="promo-domain-box p-4 h-100">
                           <div class="domain-promo-box d-flex justify-content-between">
                              <div class="domain-promo-box-content">
                                 <h4 class="mb-0">Transfer your domain to us</h4>
                                 <p class="primary-clr">Transfer now to extend your domain by 1 year!*</p>
                              </div>
                              <div class="domain-promo-box-icon">
                                 <i class="fa fa-globe fa-4x" aria-hidden="true"></i>
                              </div>
                           </div>
                           <a href="{{ url('cart?a=add&domain=transfer') }}" class="btn primary-btn text-white fs-14 rounded-0">Transfer a domain</a>
                           <p class="small pt-2">* Excludes certain TLDs and recently renewed domains</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--right block-->
               <div class="col-md-3">
                    @include('sidebar.right-sidebar')
               </div>
             </div>
           </div>
         </div>
       </div>
   </section>
@endsection