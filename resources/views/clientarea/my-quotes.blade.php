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
               <h5 class="fw-bold">My Quotes <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i><span class="sub-title fw-light fs-15"> Quotes we have generated for you</span></h5>
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
							<th>Quote#</th>
							<th>Subject</th>
							<th>Date Created </th>
							<th>Valid Until</th>
							<th>Stage</th>
								
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
                
               </div>
        </div>
        
    </div>
</section>
         </div>
         <!--right block-->
         <div class="col-lg-3 col-md-3">
           
<div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-filter pe-2"></i>Stage
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<a href="#"> <i class="fa fa-angle-double-right  color-primary pe-2" aria-hidden="true"></i> Delivered</a>
		</li>
		<li>
			<a href="#"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>Accepted </a>
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