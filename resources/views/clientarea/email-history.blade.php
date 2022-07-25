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
    		  <h5 class="mb-0 fw-bold">My Emails <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15">  Your email history with us </span></h5> </div>
    		  </div>
    		</div>
      <div class="row pb-3">
       <div class="col-lg-10 col-md-9 left-block-side bg-unset secu_outer">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date Sent</th>
              <th scope="col">Message Subject</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Test</th>
              <td>Test</td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>
         
          <!--right block-->
          <div class="col-lg-2 col-md-3">
              @include('sidebar.my-account')
          </div>
          
        </div>
    </div>
  </section>
 @endsection