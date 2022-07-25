@extends('layouts.master') 

@section('content')

<!--image banner section-->
  
  <section class="hero-bg-banner light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)), url('./public/assets/images/hero-bg2.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <div class="hero-bg-text text-white p-5">
                   <h5 class="fw-bold pb-2 text-uppercase"><i class="fa fa-server"></i> RESELLER HOSTING</h5>
                   <h1 class="fw-bold pb-3">Start Your Own Web Hosting Business Today..</h1>
                   <ul class="list-unstyled">
											<li><i class="fa fa-check color-primary"></i>  State-of-the-Art Hosting Infrastructure</li>
											<li><i class="fa fa-check color-primary"></i> <b> 45-Days</b> Money-Back Guarantee</li>
											<li><i class="fa fa-check color-primary"></i> <b> FREE</b> WHMCS Client Management Software</li>
										</ul>
               </div>
           </div>
       </div>
   </div>
  </section>
  <!--choose plan section-->
    <section class="choose-plan-section block-spacing">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Deluxe</h4>
                   <div class="price"><span class="fw-bold">$24.95</span><br>  /month</div>
                   <div class="desc pt-2">Get <b>WHMCS</b> Billing Software for <b>$5</b>/mo
								</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>150 GB</b> Storage</li>
									<li class="pb-2"><b>500 GB</b> Bandwidth</li>
									<li class="pb-2"><b>UNLIMITED</b>  cPanel accounts</li>
									<li class="pb-2"><b> WHM</b> Reseller Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Professional</h4>
                   <div class="price"><span class="fw-bold">$34.95</span><br>  /month</div>
                   <div class="desc pt-2">Get <b>WHMCS</b> Billing Software for <b>$5</b>/mo
								</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                    <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>80 GB</b> Storage</li>
									<li class="pb-2"><b>750 GB</b> Bandwidth</li>
									<li class="pb-2"><b>UNLIMITED</b>  cPanel accounts</li>
									<li class="pb-2"><b> WHM</b> Reseller Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Enterprise</h4>
                   <div class="price"><span class="fw-bold">$49.95</span><br>  /month</div>
                    <div class="desc pt-2"><span class="free fw-bold">FREE</span> <b>WHMCS</b> Billing Software</div>
                     <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>120 GB</b> Storage</li>
									<li class="pb-2"><b>1000 GB</b> Bandwidth</li>
									<li class="pb-2"><b>UNLIMITED</b>  cPanel accounts</li>
									<li class="pb-2"><b> WHM</b> Reseller Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                   <div class="sticker-wrapper">
                      <div class="sticker text-uppercase text-white fw-bold text-center"> Most Popular </div>
                   </div>
                </div>
             </div>
             
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Ultimate</h4>
                   <div class="price"><span class="fw-bold">$74.95</span><br>  /month</div>
                    <div class="desc pt-2"><span class="free fw-bold">FREE</span> <b>WHMCS</b> Billing Software</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                  <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>200 GB</b> Storage</li>
									<li class="pb-2"><b>1500 GB</b> Bandwidth</li>
									<li class="pb-2"><b>UNLIMITED</b>  cPanel accounts</li>
									<li class="pb-2"><b> WHM</b> Reseller Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                </div>
             </div>
          </div>
       </div>
    </section>
    
    <!--arrow section-->
    <section class="arrow-section bg-primary-clr py-4 position-relative">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <h4 class="text-center text-uppercase text-white mb-0 fw-bold">The Best Features At The Best Price!</h4>
             </div>
          </div>
       </div>
    </section>
     
     
    
   <!--image and text block-->
    <section class="image-text-section pb-5">
     <div class="container-fluid">
      <div class="feature-content-block px-3 px-md-5 py-5 bg-white">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <ul class="list-unstyled mb-0">
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED Domains</li>
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED Sub Domains</li>
							
						</ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <ul class="list-unstyled mb-0">
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED Email Accounts</li>
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED Databases</li>
							
						</ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <ul class="list-unstyled mb-0">
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED cPanels</li>
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>PRIVATE Name Servers</li>
							
						</ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <ul class="list-unstyled mb-0">
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>FREE Domain Reseller Account</li>
							<li> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>UNLIMITED SSL Certificates</li>
							
						</ul>
               </div>
            </div>
         </div>
      </div> 
     </div>
    </section>
    
   <!--feature section-->
    <section class="feature-section">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
         <div class="feature-content py-5 px-4">
             <h6 class="mb-3 text-uppercase fw-bold"> MAKE MONEY BY HOSTING YOUR OWN CLIENTS! </h3>
             <p>Our <b> Reseller Hosting </b> Packages are designed to fully accommodate the demands of web hosts in today's industry. Combined with our 24x7x365 Live support desk, powerful servers, friendly staff & vast array of value added features unmatched by any other host, you can be rest assured that with us, you are fully equipped to provide full hosting solutions to your customers.</p>
             <p> Our Web Hosting Package comes with a <span class="free fw-bold">FREE </span> Migration, Scripts installations and 45 Days Money Back Guarantee </p>
             
             <div class="feature-hosting pt-4">
              <h6 class="mb-3 text-uppercase fw-bold"> HOW DOES RESELLER HOSTING WORK? </h3>
             <p>After signup you will be given access to our reseller control panel, <b> WHM </b> (Web Host Manager). WHM will allow you to manage and provide your customers with their own user control panels <b> (cPanel) </b> which will enable them to create and modify their own web sites. Once your customer is logged into cPanel they are able to control sub domains, email addresses, passwords and much more without requiring any assistance! In the event that you encounter any difficulties, we're available 24/7/365 to help.</p>
             </div>

             
             <div class="accordion-block pt-4">
                <h3>Technical Specifications</h3> 
                <div class="Redo-accordion pt-2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Reseller Web Hosting Features...
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                          <div class="accordion-body">
                            <ul>
								<li class="pb-1"><span class="text-warning">Unlimited</span>  cPanel Accounts, Domains, Subdomains, Email Accounts, MySQL Databases, FTP Accounts </li>
								<li class="pb-1">Easy to Use and Flexible Control Panel</li>
								<li class="pb-1">99.9% Uptime Guarantee</li>
								<li class="pb-1">No Contract, Easy Monthly Billing</li>
								<li class="pb-1">Private Name Servers based on your Domain</li>
							</ul>
                             </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Programming and Database Features...
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                          <div class="accordion-body border-0">
                            <ul>
								<li class="pb-1"><span class="text-warning">Unlimited</span>  MySQL Databases with phpMyAdmin Access</li>
								<li class="pb-1">Programming Languages: CGI, Fast CGI, PHP 5, Ruby on Rails, Perl, Python, SSI</li>
								<li class="pb-1">System Management: SSH Access and Cron Job Scheduling</li>
							</ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Emails Features...
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                          <div class="accordion-body">
                           <ul>
							<li class="pb-1"><span class="text-warning">Unlimited</span>  POP3 Email Accounts with SMTP</li>
							<li class="pb-1">WebMail Access: Choose from Horde, SquirrelMail, or RoundCube</li>
							<li class="pb-1">Receive your email to your phone via IMAP Support</li>
							<li class="pb-1">Prevent spam with SpamAssassin</li>
							<li class="pb-1"> <span class="text-warning">Unlimited</span>Autoresponders, Mail, Forwards, Email Aliases, Mailing Lists</li>
						  </ul>
                             </div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>  
       </div>
      </div>
     </div>
    </section>
    
  <!--inner parallex section-->
   <section class="parallex-section inner-parallex-section" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url(https://selodesign.com/swissdomainvault/public/assets/images/sec-bg1.jpg);">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="Redo-dark-box text-white">
               <h3 class="title mb-3 text-uppercase fw-bold">Not sure which <span class="primary-clr"> hosting plan </span> to choose?</h3>
               <p>No problem. Send us a ticket with your hosting needs and we’ll get back to you with a quote. Free of charge.</p>
               <button class="btn main-button read-more text-white rounded-0"> Request a Quote</button>
            </div>
         </div>
      </div>
   </div>
</section>
    
    

@endsection