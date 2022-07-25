@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Submit Ticket </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>

  <!--support ticket section-->
     <section class="support-tickets-section py-5">
      <div class="container-fluid">
          <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Open Ticket <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-lg-10 col-md-9 mx-auto">
                   <div class="row">
                       <div class="col-md-12">
                          <div class="open-ticket-content mb-4 text-center">
                            <p> If you can't find a solution to your problems in our knowledgebase, you can submit a ticket by selecting the appropriate department below. </p>
                         </div>  
                       </div>
                       <div class="col-md-6">
                           <div class="support-form border py-4 text-center">
                               <h6 class="mb-3"> Domain Support </h6>
                               <a href="/swissdomainvault/clientarea/domain-support-ticket" class="btn main-button text-white py-2 fs-15"> <i class="fa fa-envelope me-2" aria-hidden="true"></i> Domain Support </a>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="support-form border py-4 text-center">
                               <h6 class="mb-3"> Hosting Support </h6>
                               <a href="/swissdomainvault/clientarea/hosting-support-ticket" class="btn main-button text-white py-2 fs-15"> <i class="fa fa-envelope me-2" aria-hidden="true"></i> Hosting Support </a>
                           </div>
                       </div>
                   </div>
                 </div>
             </div>
             
        </div>
       </section>
       
 @endsection