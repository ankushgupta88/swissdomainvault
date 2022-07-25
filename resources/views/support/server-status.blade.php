@extends('layouts.master') 
@section('content')

<!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Server Status  </h3> </div>
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
    		  <h5 class="mb-0 fw-bold">Network Status <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15">  News & Information </span></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
    		    <div class="col-md-8 mx-auto">
    		        <div class="alert alert-success text-center">
                            There are no  Network Issues Currently
                    </div>
    		    </div>
    		    <div class="col-md-12">
    		        <h4> Server Status </h4>
    		        <p> Below is a real-time overview of our servers where you can check if there's any known issues. </p>
    		    </div>
             <!--left block-->
                 <div class="col-md-10 left-block-side">
                     <div class="server-status-table">
                         <table class="table table-striped">
                          <thead>
                            <tr class="bottom-border">
                              <th scope="col">Server Name</th>
                              <th scope="col">HTTP</th>
                              <th scope="col">FTP</th>
                              <th scope="col">POP3</th>
                              <th scope="col">PHP Info</th>
                              <th scope="col">Server Load</th>
                              <th scope="col">Uptime</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Selo Services</th>
                              <td><i class="fa fa-check-circle-o text-success" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check-circle-o text-success" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check-circle-o text-success" aria-hidden="true"></i></td>
                              <td>PHP Info</td>
                              <td>Not Available</td>
                              <td>Not Available</td>
                            </tr>
                            <tr>
                              <th scope="row">Sociallity US</th>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>Testing</td>
                              <td>PHP Info</td>
                              <td>Not Available</td>
                              <td>Not Available</td>
                            </tr>
                            
                            
                          </tbody>
                        </table>
                     </div>
                 </div>
                  <!--right block-->
                <div class="col-md-2">
                     @include('sidebar.server-status-right-sidebar')
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