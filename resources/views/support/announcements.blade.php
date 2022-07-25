@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> News </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>

  <!--support ticket section-->
     <section class="support-tickets-section py-4 py-md-5">
      <div class="container-fluid">
          <div class="row">
    			<div class="col-md-12 py-3 py-md-4">
    		 <div class="title pb-4 pb-md-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">News <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15">   All the latest from Swiss Domain Vault </span></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-md-9 left-block-side">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="article-title text-center pb-0 pb-md-4">
                                 <h4> Launching Total Domain Privacy </h4>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="article-box shadow p-4 mb-4 mb-md-0">
                                     <p>Now offering the ultimate start-up online marketer package.&nbsp; &nbsp;Simply select our start-up bundle and for one low monthly price you receive 1 domain name in an installed and hosted wordpress&nbsp;instance, a SSL certificate installed, and domain privacy turned on, and the 3 necessary email addresses all setup and ready to go for just $24.95 per ... </p>
                                     <p> Simply order the startup package and we take care of the rest. </p>
                                     <p class="article-items"> <i class="fa fa-calendar fa-fw text-success"></i> 15th Mar 2019 </p>
                                 </div>
                         </div>
                         <div class="col-md-6">
                             <div class="article-box shadow p-4 mb-4 mb-md-0">
                                     <p>Staying true to our heritage, we are now including domain privacy with each domain purchase made at Swiss Domain Vault or that is transferred to Swiss Domain Vault.
                                     We work hard to be the very best and most trusted domain registrar and hosting company on the planet.  </p>
                                      <p class="article-items"> <i class="fa fa-calendar fa-fw text-success"></i> 28th Dec 2018  </p>
                                 </div>
                         </div>
                     </div>
                 </div>
                  <!--right block-->
                <div class="col-md-3">
                     @include('sidebar.month-right-sidebar')
                </div>
             </div>
             
             
        </div>
       </section>
       
    <!--tabel content section -->
      <section class="ticket-table-section">
         <div class="container-fluid">
             <div class="row">
                 
             </div>
         </div>
      </section>
 @endsection