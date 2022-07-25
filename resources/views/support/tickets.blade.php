@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Support Tickets </h3> </div>
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
    		  <h5 class="mb-0 fw-bold">My Support Tickets <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15">  Your ticket history </span></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-md-10 left-block-side">
                     <div class="ticket-content-table">
                         <table class="table table-striped">
                          <thead>
                            <tr class="bottom-border">
                              <th scope="col">Department</th>
                              <th scope="col">Subject</th>
                              <th scope="col">Status</th>
                              <th scope="col">Last Updated</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>Testing</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>Testing</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>Testing</td>
                            </tr>
                             <tr>
                              <th scope="row">4</th>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>Testing</td>
                            </tr>
                          </tbody>
                        </table>
                     </div>
                 </div>
                  <!--right block-->
                <div class="col-md-2">
                     @include('sidebar.view-right-sidebar')
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