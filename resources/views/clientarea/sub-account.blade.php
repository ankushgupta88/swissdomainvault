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

  <!--support ticket section-->
     <section class="support-tickets-section py-5">
      <div class="container-fluid">
          <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Add New Contact <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
                 <div class="col-lg-10 col-md-9  left-block-side">
                      <div class="alert alert-block alert-info py-2 mb-4">
                     <div class="row align-items-center">
                        <label for="inputContactId" class="col-sm-3 control-label text-end">Choose Contact</label>
                        <div class="col-sm-6">
                            <select name="contactid" id="inputContactId" onchange="submit()" class="form-control">
                                                    <option value="new" selected="selected">Add New Contact</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-default btn-block">Go</button>
                        </div>
                        </div>
                     </div>
                     <div class="client-form-content">
                       <form>
                         <div class="row">
                             <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">First Name</label>
                                <input type="name" class="form-control" id="firstname">
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="lastname" class="form-control" id="lastname">
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="address1" class="form-label"> Address 1</label>
                                <input type="address1" class="form-control" id="address1">
                              </div>
                               <div class="mb-3 col-md-6">
                                <label for="address2" class="form-label"> Address 2</label>
                                <input type="address2" class="form-control" id="address2">
                              </div>
                                <div class="mb-3 col-md-6">
                                <label for="companyname" class="form-label"> Company Name</label>
                                <input type="companyname" class="form-control" id="companyname">
                              </div>
                                <div class="mb-3 col-md-6">
                                <label for="City" class="form-label"> City</label>
                                <input type="City" class="form-control" id="City">
                              </div>
                               <div class="mb-3 col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="state" class="form-label"> State/Region</label>
                                <input type="state" class="form-control" id="state">
                              </div>
                               <div class="mb-3 col-md-6">
                                <label for="phoneno" class="form-label"> Phone Number</label>
                                <input type="phoneno" class="form-control" id="phoneno">
                              </div>
                               <div class="mb-3 col-md-6">
                                <label for="zipcode" class="form-label"> Zip Code</label>
                                <input type="zipcode" class="form-control" id="zipcode">
                              </div>
                               <div class="mb-3 col-md-6">
                                   <label for="subaccount" class="form-label"> Activate Sub-Account</label>
                               <div class="form-check ps-0">
                                  <label><input type="checkbox" name="subaccount" id="inputSubaccountActivate"> Tick to configure as a sub-account with client area access</label>
                                </div>
                              </div>
                               <div class="mb-3 col-md-6">
                                   <label for="subaccount" class="form-label"> Country</label>
                               <select class="form-select" aria-label="Default select example">
                                  <option value="AF" selected>Afghanistan</option>
                                  <option value="AX">Aland Islands</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                </select>
                              </div>
                                <div class="mb-3 col-md-12">
                                  <div class="form-group">
                                    <label class="control-label form-label mb-2">Email Preferences</label>
                                    <div class="controls checkbox">
                                        <label>
                                            <input type="checkbox" name="generalemails" id="generalemails" value="1">
                                            General Emails - General Announcements &amp; Password Reminders
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="productemails" id="productemails" value="1">
                                            Product Emails - Order Details, Welcome Emails, etc...
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="domainemails" id="domainemails" value="1">
                                            Domain Emails - Renewal Notices, Registration Confirmations, etc...
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="invoiceemails" id="invoiceemails" value="1">
                                            Invoice Emails - Invoices &amp; Billing Reminders
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="supportemails" id="supportemails" value="1">
                                            Support Emails - Receive a copy of all support ticket communications created by the parent account holder
                                        </label>
                                    </div>
                                </div>
                              </div>
                              
                         </div>  
                       </form>
                     </div>
                     <div class="save-btn">
                         <button class="btn main-button text-white rounded-0 my-3"> Save Changes </button>
                         <button class="btn main-button rounded-0 my-3 border-button ms-3"> Cancel </button>
                     </div>
                 </div>
                  <!--right block-->
                <div class="col-lg-2 col-md-3">
                     @include('sidebar.my-account')
                </div>
             </div>
             
        </div>
       </section>
       
 @endsection