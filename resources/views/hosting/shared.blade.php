@extends('layouts.master') 

@section('content')

<!--image banner section-->
  
  <section class="hero-bg-banner light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.87)), url('./public/assets/images/wweb-hosting.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <div class="hero-bg-text text-white p-5">
                   <h5 class="fw-bold pb-2 text-uppercase"><i class="fa fa-linux"></i> Web Hosting</h5>
                   <h1 class="fw-bold pb-3">Get a website that works, It's quick and easy..</h1>
                   <ul class="list-unstyled">
											<li><i class="fa fa-check color-primary"></i> State-of-the-Art Hosting Infrastructure</li>
											<li><i class="fa fa-check color-primary"></i> <b>99.9%</b> Uptime Guarantee</li>
											<li><i class="fa fa-check color-primary"></i> <b>45-Days</b> Money-Back Guarantee</li>
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
                   <div class="desc">
                      <p> Host a single website. </p>
                   </div>
                   <div class="price"><span class="fw-bold">$2.95</span><br>  /month</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2">Single Website</li>
									<li class="pb-2"><b>1000 MB</b> Storage</li>
									<li class="pb-2"><b>10,000 MB</b> Bandwidth</li>
									<li class="pb-2"><b>25</b> Email Accounts</li>
									<li class="pb-2">cPanel Control Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Professional</h4>
                   <div class="desc">
                      <p> Best price for a basic site. </p>
                   </div>
                   <div class="price"><span class="fw-bold">$4.95</span><br>  /month</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2">Single Website</li>
									<li class="pb-2"><b>5000 MB</b> Storage</li>
									<li class="pb-2"><b>50,000 MB</b> Bandwidth</li>
									<li class="pb-2"><b>25</b> Email Accounts</li>
									<li class="pb-2">cPanel Control Panel</li>
									<li class="pb-2">Monthly Billing</li>
								</ul>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
                <div class="choose-plan-content h-100 text-center">
                   <h4 class="fw-bolder text-uppercase my-2">Enterprise</h4>
                   <div class="desc">
                      <p> Best suitable plan for your multiple sites. </p>
                   </div>
                   <div class="price"><span class="fw-bold">$5.95</span><br>  /month</div>
                     <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>UNLIMITED </b> Website</li>
									<li class="pb-2"><b>10,000 MB</b> Storage</li>
									<li class="pb-2"><b>100,000 MB</b> Bandwidth</li>
									<li class="pb-2"><b>75</b> Email Accounts</li>
									<li class="pb-2">cPanel Control Panel</li>
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
                   <div class="desc">
                      <p> Handles the most complex sites and heaviest traffic. </p>
                   </div>
                   <div class="price"><span class="fw-bold">$7.95</span><br>  /month</div>
                   <button class="btn main-button text-white rounded-0 my-3"> Add to Cart </button>
                   <ul class="plan-features list-unstyled pl-0 mb-0" id="PlanLists1">
									<li class="pb-2"><b>UNLIMITED </b> Website</li>
									<li class="pb-2"><b>25,000 MB</b> Storage</li>
									<li class="pb-2"><b>250,000 MB</b> Bandwidth</li>
									<li class="pb-2"><b>100</b> Email Accounts</li>
									<li class="pb-2">cPanel Control Panel</li>
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
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-server"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Supercharged Servers</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-support"></i></span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Best Support</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-thumbs-up"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Money Back Guarantee</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-shield"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">ActivGuard Website Security</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
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
             <h3 class="mb-3"> Get Started Quickly & Easily</h3>
             <p>Our <b>web hosting</b> packages are perfect for businesses requiring high uptime web hosting with 24x7 support and individuals &amp; bloggers that require a reliable web hosting platform. Whether you're starting your first web site or need a solution for your business, our web hosting packages are designed to fully accomodate from the most basic to the most complex requirements.</p>
             <p>Our Web Hosting Package comes with a <b class="warning-text">FREE</b> Migration, Scripts installations and 45 Days Money Back Guarantee</p>
             
             <div class="Redo-image-box p-3 my-3 my-md-5">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                  <h6 class="text-uppercase fw-bold"> Your favorite hosting app is one click away! </h6>  
                  <p class="mb-0">Our 1-click app install makes it easy to build your site with the app you love. Need a CMS? Joomla and Drupal are yours for a click. You have 200+ apps available with cPanel/Linux hosting.</p>
                </div>  
                <div class="col-lg-7 col-md-6">
                   <img src="./public/assets/images/scripts.png" class="img-fluid"> 
                </div>
              </div>
             </div>
             
             <div class="accordion-block">
                <h3>Technical Specifications</h3> 
                <div class="Redo-accordion pt-2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Web Hosting Features...
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                          <div class="accordion-body">
                            <ul>
								<li class="pb-1"><span class="text-warning">Guaranteed</span> Disk Space and Bandwidth</li>
								<li class="pb-1">Flexible, Easy to Use Control Panel</li>
								<li class="pb-1"><span class="text-warning">Unlimited</span> Sub Domains, FTP Accounts, and Database</li>
								<li class="pb-1"><span class="text-warning">99.9%</span> Uptime Guarantee</li>
								<li class="pb-1">No Contract with a 45 Day Money Back Guarantee</li>
							</ul>
                             </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Free With Each Hosting Plan...
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                          <div class="accordion-body border-0">
                            <ul>
								<li class="pb-1"><span class="text-warning">Free</span> Website Builder and Website Building Tools</li>
								<li class="pb-1"><span class="text-warning">Free</span> Global Sign's Private Domain SSL Certificate (<a href="http://www.alphassl.com/compare-ssl-certificates.html" target="_blank">Details</a>)</li>
								<li class="pb-1"><span class="text-warning">370+ Free</span> scripts can be instantly installed on your account with a few clicks</li>
								<li class="pb-1"><span class="text-warning">Free</span> Website Transfer including Domain, Script and Database</li>
							</ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            cPanel Control Panel...
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                          <div class="accordion-body">
                           <ul>
							<li class="pb-1"><span class="text-warning">Latest</span> cPanel Control Panel</li>
							<li class="pb-1">AWStats, Webalizer, Raw Log Manager, Referrer and Error Logs</li>
							<li class="pb-1">Instant Shopping Carts, Blogs, Portals, Forums, Counters, and Formmail</li>
							<li class="pb-1">Password Protected Directories and Custom Error Pages</li>
							<li class="pb-1">Web Based File Manager, Hotlink Protection, IP Deny Manager, Redirect URL</li>
						  </ul>
                             </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingfour">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Programming & Databases...
                          </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordion">
                          <div class="accordion-body">
                           <ul>
							<li class="pb-1"><span class="text-warning">Unlimited</span> MySQL Databases with phpMyAdmin Access</li>
							<li class="pb-1">CGI, Fast CGI, PHP 5, Ruby on Rails, Perl, Python, SSL</li>
							<li class="pb-1">Curl, CPAN, GD Library, ImageMagick</li>
							<li class="pb-1">Cron Job Scheduling</li>
						   </ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingfive">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            Email Features...
                          </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordion">
                          <div class="accordion-body">
                            <ul>
								<li class="pb-1">POP3 Email Accounts with SMTP</li>
								<li class="pb-1">WebMail Access: Horde, SquirrelMail, RoundCube</li>
								<li class="pb-1">Receive your email to your phone via IMAP Support</li>
								<li class="pb-1">Prevent spam with SpamAssassin</li>
								<li class="pb-1"><span>Unlimited</span> Autoresponders, Mail Forwards, Email Aliases, Mailing Lists</li>
							</ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingsix">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            Premium Support...
                          </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordion">
                          <div class="accordion-body">
                            <ul>
								<li class="pb-1"><span class="text-warning">24/7/365</span> Premium Support via Phone, Live Chat, and Ticket System</li>
								<li class="pb-1"><span class="text-warning">Automatic</span> Weekly Off-Site Data Backups</li>
								<li class="pb-1"><span class="text-warning">24/7/365</span> Server Monitoring</li>
								<li class="pb-1">Online Support Portal with Video Tutorials and Help Articles</li>
							</ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingseven">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                             Application Hosting...
                          </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordion">
                          <div class="accordion-body">
                            <ul>
								<li class="pb-1"><span class="text-warning">Instantly</span> install over 75 open-source scripts with just a click!</li>
								<li class="pb-1">WordPress Hosting - Host your very own WordPress blog</li>
								<li class="pb-1">Joomla Hosting &amp; Drupal Hosting - Professional CMS Solutions</li>
								<li class="pb-1">Magento Hosting - Free E-commerce platform for your own store</li>
								<li class="pb-1">Wiki Hosting - Start a Wiki web site with MediaWiki</li>
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