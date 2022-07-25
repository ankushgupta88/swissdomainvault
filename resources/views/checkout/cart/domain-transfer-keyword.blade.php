@extends('layouts.master') 
@section('content')
  <!--banner inner section-->
    <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Shopping Cart </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>
    
 <!--shopping content section-->
  <section class="shopping-content-section py-5">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 py-4">
				<div class="title pb-5 border-bottom">
					<h5 class="mb-0 fw-bold">Shopping Cart  <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5> </div>
			</div>
          </div>
          <div class="row">
             <!--left block-->
    			<div class="col-lg-10 col-md-9 left-block-side">
    			           <div class="shoping-heading-text text-center py-4">
                			    <h4 class="fw-bold"> Transfer your domain to us </h4>
                			    <p> Transfer now to extend your domain by 1 year!<span class="text-danger fw-bold"> *</span> </p>
                			     </div>
    			        <div class="domain-transfer-block dashed-border w-60">
    			            <h6 class="fw-bold border-bottom p-3 text-center"> Single domain transfer </h6>
    			            <form class="p-3">
    			                 <div class="mb-3">
                                    <label for="inputTransferDomain" class="form-label">Domain Name</label>
                                    <input type="text" class="form-control" id="inputTransferDomain"  placeholder="example.com">
                                  </div>
                                  <div class="mb-3">
                                  <label for="inputAuthCode" class="form-label">Authorization Code </label>
                                <input type="text" class="form-control" id="inputAuthCode" data-original-title="Required" placeholder="Epp Code / Auth Code">
                              </div>
    			            </form>
    			            <div class="addcart-button text-center">
    			              <button class="btn main-button text-white rounded-0 mx-3 mb-4"> Add to Cart </button>
    			            </div>
    			        </div> 
    			        <p class="text-center pt-4"><span class="text-danger fw-bold"> * </span> Excludes certain TLDs and recently renewed domains</p>
    			</div>
    		<!--right block-->
               <div class="col-lg-2 col-md-3">
                    @include('sidebar.right-sidebar')
               </div>
          </div>
      </div>
  </section>

 
@endsection