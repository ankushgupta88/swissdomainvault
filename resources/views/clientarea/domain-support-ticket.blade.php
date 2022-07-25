@extends('layouts.master') 
@section('content')
 
 <!--banner section-->
     <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('../public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold">  Submit Ticket </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="support-tickets-section py-5">
      <div class="container-fluid">
          <div class="row">
    		<div class="col-md-12 py-4">
    		 <div class="title pb-5 border-bottom">
    		  <h5 class="mb-0 fw-bold">Open Ticket <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5> </div>
    		  </div>
    		</div>
    		
    		<div class="row">
             <!--left block-->
              <div class="col-md-2">
                  </div>
                 <div class="col-md-8">
                    <div class="conf-domains checkout-page edit-account">
               <div class="name-servers mt-4">
                  <div id="registration">
                                          			        <form method="POST" action="https://selodesign.com/swissdomainvault/clientarea/update-account-info" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="igaCb0juGUG2lWDcZjT3eTN0sTUeKO2CzxrMnpxI">  
                        <div class="new-user-signup">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group prepend-icon mb-2">
                                    <label for="first_name" class=" text-center mb-2 fw-bold">Name</label>
                                    <input type="text" name="first_name" value="testing3" id="first_name" class="field form-control rounded-0" autofocus="" disabled="disabled"> 
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group prepend-icon mb-2">
                                    <label for="email" class=" text-center mb-2 fw-bold"> Email Address</label>
                                    <input type="email" name="email" value="sunilkumar@gmail.com" id="email" class="field form-control rounded-0" autofocus="" disabled="disabled"> 
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group prepend-icon  mb-2">
                                    <label for="address" class=" text-center mb-2 fw-bold">Subject</label>
                                    <input type="text" name="subject" value="subject" id="subject" class="field form-control rounded-0 py-2 " autofocus=""> 
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <label for="department" class=" text-center mb-2 fw-bold">Department</label>
                                 <div class="form-group prepend-icon position-relative mb-3">
                                    <select name="country" class="field form-control rounded-0 form-select" id="country">
                                        <option value="" selected>Domain Support</option>
                                        <option value="">Hosting Support</option>
                                       
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <label for="priority" class=" text-center mb-2 fw-bold">Priority</label>
                                 <div class="form-group prepend-icon position-relative mb-3">
                                    <select name="country" class="field form-control rounded-0 form-select" id="country">
                                        <option value="">High</option>
                                        <option value=""selected>Medium</option>
                                        <option value="">Low</option>
                                       
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="col-md-12">
                                 <div class="form-group prepend-icon  mb-2">
                                    <label for="address" class=" text-center mb-2 fw-bold">Message</label>
                                    <textarea name="message" value="message" id="message" class="field form-control rounded-0 py-2 " autofocus=""> </textarea >
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group prepend-icon  mb-2 " id="" >
                                    <label for="address" class=" text-center mb-2 fw-bold">Attachments</label>
                                    <div id="car_parent">
                                        <div id="car2" class="my-2">
                                    <input type="file" name="subject" value="subject" id="subject" class="field form-control rounded-0 ps-2"id="" autofocus=""> 
                                    </div>
                                      </div>
                                   <label class="ms-5 ps-5 my-2 "> Allowed File Extensions: .jpg, .gif, .jpeg, .png</label>
                                   <div class="add-more-btn ms-5 ps-5 p-2" >
                                   <a class="bg-dark text-light text-decoration-none p-2 "id="clone_btn" onlick="duplicate()" style="cursor:pointer;"><i class="fa fa-plus"></i> Add More</a>
                                   </div>
                                  
                                 </div>
                              </div>
                            
                            
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-md-12">
                              <div class="">
                                 <div class="panel-body py-3 px-2">
                                    <div class="col-md-12">
                                       
                                          <label class="form-check-label text-center" for="term_condition "> Please enter the characters you see in the image below into the text box provided. This is required to prevent automated submissions.</label>
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                           <div class="col-md-6 text-end">
                               <img src="{{ asset('public/assets/images/verifyimage.php.png') }}" class="" alt="hero-bg2.jpg"> 
                               </div>
                               <div class="col-md-6">
                                <input type="text" name="subject" value="" id="subject" class="field  rounded-0 w-25 " autofocus=""> 
                               </div>
                           </div>
                           
                           
                        </div>
                        <div class=" mt-3 mt-md-5 text-center">
                           <button type="submit" class="btn main-button text-white rounded-0 mt-3">Submit</button>
                           <button type="reset" class="btn main-button-white text-black rounded-0 mt-3">  Cancel</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
                 </div>
                 <div class="col-md-2">
                  </div>
                
                
             </div>
             
             
        </div>
       </section>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 
@endsection