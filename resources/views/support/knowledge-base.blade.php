@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Knowledgebase </h3> </div>
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
    		  <h5 class="mb-0 fw-bold">Knowledgebase <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-md-9 left-block-side">
                     <div class="search-box">
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="What can we help you with?" aria-label="Search">
                            <button class="btn  main-button text-white" type="submit">Search</button>
                          </form>
                     </div>
                     <div class="alert-msg-box mt-5">
                         <div class="alert alert-info text-center">  No Articles Found </div>
                     </div>
                 </div>
                  <!--right block-->
                <div class="col-md-3">
                     @include('sidebar.view-right-sidebar')
                </div>
             </div>
             
             
        </div>
       </section>
       

 @endsection