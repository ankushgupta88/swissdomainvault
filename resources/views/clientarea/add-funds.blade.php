@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('../public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> 
                  Client Area 
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
            <div class="title  border-bottom">
               <h5 class="fw-bold">Add Funds <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i><span class="sub-title fw-light fs-15">  Deposit money in advance</span></h5>
            </div>
         </div>
      </div>
      <div class="row">
         <!--left block-->
         <div class="col-lg-9 col-md-9 left-block-side bg-unset ">
            <section class="service-addon">
    
    <div class="">
        <div class="row">
            <div class="col-md-12">
                  <div class="mb-4">
                      <div class="alert alert-danger text-center">
                            You must have at least one active order before you can add funds so you cannot proceed at the current time!
                    </div>
                      <div class="chfo-blk mt-4">
                              <table class="table table-striped mb-0">
                                <tbody><tr>
                                    <td class="text-center">Minimum Deposit</td>
                                    <td><strong>CHF10.00</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Maximum Deposit</td>
                                    <td><strong>CHF100.00</strong></td>
                                </tr>
                                <tr>
                                   <td class="text-center">Maximum Balance</td>
                                    <td><strong>CHF3,000.00</strong></td>
                                </tr>
                            </tbody></table>
                          </div>
                          <div class="domain-transfer-block dashed-border w-60 my-5">
    			         
    			            <form class="p-3">
    			                 <div class="mb-3">
                                    <label for="inputTransferDomain" class="form-label">Amount to Add:</label>
                                    <input type="text" class="form-control" id="inputTransferDomain" placeholder="0.00">
                                  </div>
                                  <div class="mb-3">
                                  <label for="inputAuthCode" class="form-label">Payment Method:</label>
                                <select class="form-select rounded-0 fs-14 ">
                                    <option value="">Credit or Debit Card</option>
                                    <option value="">Stripe ACH</option>
                                </select>
                              </div>
    			            </form>
    			            <div class="addcart-button text-center">
    			              <button class="btn main-button text-white rounded-0 mx-3 mb-4"> Add funds </button>
    			            </div>
    			            <p class="text-center">* All deposits are non-refundable.</p>
    			        </div>
                      
                  </div>
                
        
                
               </div>
        </div>
        
    </div>
</section>
         </div>
         <!--right block-->
         <div class="col-lg-3 col-md-3">
           <div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
       Add Funds
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<p>Add funds to your account with us to avoid lots of small transactions and to automatically take care of any new invoices that are generated.</p>
		</li>
	</ul>
	
</div>

<div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-university pe-2"></i>Billing
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<a href="#"> <i class="fa fa-angle-double-right  color-primary pe-2" aria-hidden="true"></i> My Invoices</a>
		</li>
		<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>My Qyotes </a>
		</li>
			<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>Mass Payment</a>
		</li>
		<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>Add Funds</a>
		</li>


	</ul>
</div>

         </div>
      </div>
   </div>
</section>
@endsection