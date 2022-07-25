@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Affiliates  </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>

  <!--support ticket section-->
     <section class="support-tickets-section py-4 py-md-5">
      <div class="container-fluid">
          <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Affiliates <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15"> These statistics are in real time and update instantly </span> </h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-lg-12 col-md-9">
                   <div class="row">
                      <div class="col-md-4 col-sm-4">
                          <div class="affiliates-stat-block mb-4 mb-md-0 py-4 text-center alert-success">
                             <i class="fa fa-check-square-o" aria-hidden="true"></i>
                             <h1> 0 </h1>
                             <h4> Clicks </h4>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="affiliates-stat-block mb-4 mb-md-0 py-4 text-center alert-danger">
                             <i class="fa fa-user-plus" aria-hidden="true"></i>
                             <h1> 0 </h1>
                             <h4> Signups  </h4>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="affiliates-stat-block mb-4 mb-md-0 py-4 text-center alert-info">
                             <i class="fa fa-line-chart" aria-hidden="true"></i>
                             <h1> 0% </h1>
                             <h4> Conversions  </h4>
                          </div>
                      </div>
                      <div class="col-md-12 my-4 my-md-5">
                          <div class="affiliate-referral-link border py-4 text-center">
                              <h5>Your Unique Referral Link</h5>
                              <p class="mb-0"> https://www.swissdomainvault.com/aff.php?aff=5 </p>
                          </div>
                          <div class="chfo-blk mt-4">
                              <table class="table table-striped mb-0">
                                <tbody><tr>
                                    <td class="text-end">Commissions Pending Maturation:</td>
                                    <td><strong>CHF0.00</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-end">Available Commissions Balance:</td>
                                    <td><strong>CHF0.00</strong></td>
                                </tr>
                                <tr>
                                   <td class="text-end">Total Amount Withdrawn:</td>
                                    <td><strong>CHF0.00</strong></td>
                                </tr>
                            </tbody></table>
                          </div>
                          <div class="request-withdrawal-btn text-center my-4">
                              <button class="btn main-button text-white rounded-0 my-3"> <i class="fa fa-bank me-2"></i> Request Withdrawal </button>
                              <p class="mb-0"> You will be able to request a withdrawal as soon as your balance reaches the minimum required amount of CHF25.00. </p>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="referrals-content">
                            <h5 class="mb-3"> Your referrals </h5>  
                             <div class="referral-table table-responsive">
                                 <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Signup Date</th>
                                  <th scope="col">Product/Service</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Commission</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Test</td>
                                  <td>Test</td>
                                  <td>Test</td>
                                  <td>Test</td>
                                </tr>
                              </tbody>
                            </table>
                             </div>
                          </div>
                      </div>
                   </div>
                 </div>
             </div>
             
        </div>
       </section>
       
 @endsection