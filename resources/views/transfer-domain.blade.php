@extends('layouts.master') 
@section('content')

<!--banner section-->
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

  <!--support ticket section-->
     <section class="support-tickets-section py-md-5 py-4">
      <div class="container-fluid">
          <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Shopping Cart <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-lg-10 col-md-9  left-block-side">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="transfer-domain-content">
                              <h6 class="clr-hex"> Transfer Domain </h6>  
                            </div>  
                         </div>
                         <div class="col-md-12">
                             <div class="transfer-content text-center">
                                 <h5> Transfer your domain to us </h5>
                                 <p>Transfer now to extend your domain by 1 year!* </p>
                             </div>
                               <form class="transfer-domain-form border p-4">
                         <div class="row">
                             <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Domain Name</label>
                                <input type="name" class="form-control" id="firstname" placeholder="example.com">
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="lastname" class="form-label">Authorization Code</label>
                                <input type="lastname" class="form-control" id="lastname" placeholder="Epp Code / Auth Code">
                              </div>
                         </div> 
                          <div class="save-btn text-center">
                         <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button> <br>
                         <small> * Excludes certain TLDs and recently renewed domains</small>
                     </div>
                       </form>
                         </div>
                     </div>

                    
                 </div>
                  <!--right block-->
                <div class="col-lg-2 col-md-3">
                     @include('sidebar.right-sidebar')
                </div>
             </div>
             
        </div>
       </section>
       
 @endsection