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
            <div class="title border-bottom">
               <h5 class="fw-bold"> My Domains <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
      </div>
      <div class="row">
         <!--left block-->
         <div class="col-lg-9 col-md-9 left-block-side bg-unset">
            <section class="service-addon">
    
    <div class="">
        <div class="row">
            <div class="col-md-12">
                  <div class="mb-4">
                      <form class="d-flex justify-content-between">

                      <select class="form-select w-25  " aria-label="Default select example">
                          <option selected>Show Entries</option>
  <option >10</option>
  <option value="1">20</option>
  <option value="2">50</option>
  <option value="3">All</option>
</select>

 <input type="text" class="form-control w-25" id="text" aria-describedby="">
                          
                      </form>
                      
                      
                  </div>
                <div class="swiss-table">
                    <div id="wrap">
			
           
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
					<thead>
						<tr>
							<th>Domain</th>
							<th>Reg Date</th>
							<th>Next Due </th>
							<th>Auto Renew</th>
							<th>Status</th>
								
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td>No Record Found</td>
							<td>
								
								</td>
							<td></td>
							
							<td class="center"></td>
							<td class="center"></td>
						</tr>
						
						
					</tbody>
				
				</table>
			</div>
		
                    
                </div>
                <p>Showing 0 to 0 of 0 entries</p>
                <form class="mt-4">
		<select class="form-select rounded-0 fs-14 w-25" aria-label="Default select">
			<option value="1">With Selected</option>
			<option value="2">Manage Nameservers</option>
			<option value="2">Auto Renewal Status</option>
			<option value="2">Registrar Lock status</option>
			<option value="2">Edit Contact Information</option>
			<option value="2">Renew Domains</option>
			
		</select>
	</form>
               </div>
        </div>
        
    </div>
</section>
         </div>
         <!--right block-->
         <div class="col-lg-3 col-md-3">
           <div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-filter pe-2"></i>View
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Active </a>
		</li>
		<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Expired </a>
		</li>
	

	</ul>
	
</div>
<div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-plus pe-2"></i>Action
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<a href="#"> <i class="fa fa-angle-double-right  color-primary pe-2" aria-hidden="true"></i> Renew</a>
		</li>
		<li>
			<a href="#"> <i class="fa fa-globe fa-fw color-primary pe-2" aria-hidden="true"></i> Register a new domain </a>
		</li>
			<li>
			<a href="#"> <i class="fa fa-share color-primary pe-2" aria-hidden="true"></i>Transfer in a Domain</a>
		</li>


	</ul>
</div>

         </div>
      </div>
   </div>
</section>
@endsection