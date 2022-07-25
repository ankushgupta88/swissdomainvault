@extends('layouts.master') 

@section('content')

<!--image banner section-->
  
  <section class="hero-bg-banner light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)), url('./public/assets/images/hero-bg2.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <div class="hero-bg-text text-white p-5">
                   <h5 class="fw-bold pb-2 text-uppercase"><i class="fa fa-server"></i> CLOUD SERVERS</h5>
                   <h1 class="fw-bold pb-3">The performance of a VPS with Cloud availability..</h1>
                   <ul class="list-unstyled">
											<li><i class="fa fa-check color-primary"></i>  State-of-the-Art Hosting Infrastructure</li>
											<li><i class="fa fa-check color-primary"></i> <b> 45-Days</b> Money-Back Guarantee</li>
											<li><i class="fa fa-check color-primary"></i> <b> FREE</b> cPanel License</li>
										</ul>
               </div>
           </div>
       </div>
   </div>
  </section>
  
  <!--multi tab section-->
   <section class="multi-tab-sec block-spacing">
      <div class="container-fluid">
          <div class="row shadow-box">
            <div class="col-md-12">
                <div class="multi-tab-content position-relative px-3">
                     <ul class="mutli-navbar d-md-inline-flex list-unstyled w-100">
                      <li><a href="javascript:void(0)" onclick="multilevel('level1')"><i class="fa fa-server"></i> Level 1</a></li>
                      <li><a href="javascript:void(0)" onclick="multilevel('level2')"><i class="fa fa-server"></i> Level 2</a></li>
                      <li><a href="javascript:void(0)" onclick="multilevel('level3')"><i class="fa fa-server"></i> Level 3</a></li>
                      <li><a href="javascript:void(0)" onclick="multilevel('level4')"><i class="fa fa-server"></i> Level 4</a></li>
                      <li><a href="javascript:void(0)" onclick="multilevel('level5')"><i class="fa fa-server"></i> Level 5</a></li>
                    </ul>
                    @if (Auth::check())
                        <a href="{{ url('hosting-service?slug=vps-hosting') }}" class="btn main-button sign-up-button text-white rounded-0"> Vps Hosting </a>
                    @else
                        <a href="{{ url('register') }}" class="btn main-button sign-up-button text-white rounded-0"> Signup Now! </a>
                    @endif
                    
                    <div id="level1" class="multicontent">
                      <div class="row align-items-center">
                          <div class="col-md-2 px-0 pe-md-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-desktop"></i> CPU</p>
									<h5 class="fw-bold">0.5 Core</h5>
                              </div>
                          </div>
                          <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-magic"></i> RAM</p>
									<h5 class="fw-bold">512 MB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-database"></i> Storage</p>
									<h5 class="fw-bold">25 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-dashboard"></i> Bandwidth</p>
									<h5 class="fw-bold">500 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<div class="price"><span class="fw-bold">$19.95</span><br>  /month</div>
                              </div>
                          </div>
                              <div class="col-md-12">
                            <div class="level-inner-para py-3">
                               <h6> <b> <span class="free fw-bold"> cPanel </span> Control Panel not recommended </b> </h6>
                               <p> One Dedicated IP included with each level. And Virtual Private Servers with no control panel are considered semi-managed. </p>
                            </div>
                            </div>
                      </div>
                    </div>
                    
                    <div id="level2" class="multicontent">
                      <div class="row align-items-center">
                          <div class="col-md-2 pe-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-desktop"></i> CPU</p>
									<h5 class="fw-bold">1 Core</h5>
                              </div>
                          </div>
                          <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-magic"></i> RAM</p>
									<h5 class="fw-bold">1 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-database"></i> Storage</p>
									<h5 class="fw-bold">50 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-dashboard"></i> Bandwidth</p>
									<h5 class="fw-bold">1 TB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<div class="price"><span class="fw-bold">$49.95</span><br>  /month</div>
                              </div>
                          </div>
                              <div class="col-md-12">
                            <div class="level-inner-para py-3">
                               <h6> FREE <b> <span class="free fw-bold"> Control Panel</b> </h6>
                               <p> One Dedicated IP included with each level. Fully managed services included with cPanel control panel only.</p>
                            </div>
                            </div>
                      </div> 
                    </div>
                    
                    <div id="level3" class="multicontent">
                      <div class="row align-items-center">
                          <div class="col-md-2 pe-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-desktop"></i> CPU</p>
									<h5 class="fw-bold">2 Core</h5>
                              </div>
                          </div>
                          <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-magic"></i> RAM</p>
									<h5 class="fw-bold">2 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-database"></i> Storage</p>
									<h5 class="fw-bold">200 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-dashboard"></i> Bandwidth</p>
									<h5 class="fw-bold">1.5 TB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<div class="price"><span class="fw-bold">$89.95</span><br>  /month</div>
                              </div>
                          </div>
                              <div class="col-md-12">
                            <div class="level-inner-para py-3">
                               <h6> FREE <b> <span class="free fw-bold"> Control Panel</b> </h6>
                               <p> One Dedicated IP included with each level. Fully managed services included with cPanel control panel only.</p>
                            </div>
                            </div>
                      </div>
                    </div>
                    <div id="level4" class="multicontent">
                      <div class="row align-items-center">
                          <div class="col-md-2 pe-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-desktop"></i> CPU</p>
									<h5 class="fw-bold">2 Core</h5>
                              </div>
                          </div>
                          <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-magic"></i> RAM</p>
									<h5 class="fw-bold">4 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-database"></i> Storage</p>
									<h5 class="fw-bold">170 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-dashboard"></i> Bandwidth</p>
									<h5 class="fw-bold">2 TB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<div class="price"><span class="fw-bold">$129.95</span><br>  /month</div>
                              </div>
                          </div>
                              <div class="col-md-12">
                           <div class="level-inner-para py-3">
                               <h6> FREE <b> <span class="free fw-bold"> Control Panel</b> </h6>
                               <p> One Dedicated IP included with each level. Fully managed services included with cPanel control panel only.</p>
                            </div>
                            </div>
                      </div>
                    </div>
                    <div id="level5" class="multicontent">
                      <div class="row align-items-center">
                          <div class="col-md-2 pe-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-desktop"></i> CPU</p>
									<h5 class="fw-bold">4 Core</h5>
                              </div>
                          </div>
                          <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-magic"></i> RAM</p>
									<h5 class="fw-bold">8 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-database"></i> Storage</p>
									<h5 class="fw-bold">250 GB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<p class="mb-1"><i class="fa fa-dashboard"></i> Bandwidth</p>
									<h5 class="fw-bold">3 TB</h5>
                              </div>
                          </div>
                            <div class="col-md-2 px-0">
                              <div class="multi-tab-description text-center py-4">
									<div class="price"><span class="fw-bold">$159.95</span><br>  /month</div>
                              </div>
                          </div>
                              <div class="col-md-12">
                            <div class="level-inner-para py-5 px-3">
                               <h6> <b> <span class="free fw-bold"> cPanel </span> Control Panel not recommended </b> </h6>
                               <p> One Dedicated IP included with each level. And Virtual Private Servers with no control panel are considered semi-managed. </p>
                            </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-12">
                <div class="level-inner-para px-3">
                   <h6> <b> SINGLE CLICK HOSTED APPLICATIONS.</b> </h6>
                   
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
                <h4 class="text-center text-uppercase text-white mb-0 fw-bold">INCLUDED WITH YOUR MACHINE</h4>
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
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-clock-o"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Instant</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-sliders"></i></span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Flexibility</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-server"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Scalability</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-rocket"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Max Speeds</h5>
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
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Proactive Support </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Robust Hardware </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Remote Reboot </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> DDoS Protection </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i><span class="free fw-bold"> FREE </span>Contol Panel </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Serial console access </h6>
                 <p class="ps-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div> 
          </div>
       <div class="col-md-12">
         <div class="feature-content mb-5 px-4">
            <!--block 1-->
             <div class="accordion-block pt-4">
                <div class="Redo-accordion pt-2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Technical Specifications
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                          <div class="accordion-body d-md-flex">
                            <ul class="p-0">
								<li class="pb-1">1 IPv4 addresses</li>
								<li class="pb-1">Auto failover</li>
								<li class="pb-1">Re-size without rebooting on selected OS</li>
							</ul>
							<ul>
								<li class="pb-1">Intel Xeon minimum 8 core</li>
								<li class="pb-1">ECC registered RAM</li>
								<li class="pb-1">Redundant Power Supplies</li>
							</ul>
							<ul>
								<li class="pb-1">Enterprise grade HP Powered</li>
								<li class="pb-1">15K SAS/SSD Disks</li>
								<li class="pb-1">High levels of redundancy</li>
							</ul>
							<ul>
								<li class="pb-1">1Gbit for each HyperVisor</li>
								<li class="pb-1">Global Network with over 200Gbit of capacity</li>
								<li class="pb-1">24x7 Security</li>
							</ul>
                             </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            More Available Addons
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                          <div class="accordion-body border-0">
                            <div class="row">
                                <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i> Extra IPv4 addresses</h6>
                                        <span class="price"><span class="fw-bold">$2.00</span>/month</span>
                                        <p class="mb-0 py-2">Add an extra IP address so you can separate services on you dedicated server.</p>
                                    </div>
                                </div>
                                 <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>  Extra CPU</h6>
                                        <span class="price"><span class="fw-bold">$5.00</span>per GHz per month</span>
                                        <p class="mb-0 py-2">Add an extra IP address so you can separate services on you dedicated server.</p>
                                    </div>
                                </div>
                                 <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>  Extra RAM</h6>
                                        <span class="price"><span class="fw-bold">$10.00</span>per GB per month</span>
                                        <p class="mb-0 py-2">Add all important RAM to boost your cloud performance.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>  Extra HDD</h6>
                                        <span class="price"><span class="fw-bold">$10.00</span> GB per 10GB per month</span>
                                        <p class="mb-0 py-2">Add extra storage to your cloud.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>   Cloud Linux</h6>
                                         <span class="price"><span class="fw-bold">$10.00</span> per moth per server</span>
                                    </div>
                                </div>
                                 <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>  Windows licenses</h6>
                                        <span class="price">
                                            <span class="free fw-bold"> FREE </span>for the 1st Month then from<span class="fw-bold">$7.50</span>/month</span>
                                       
                                    </div>
                                </div>
                                 <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6 class="fw-bold"><i class="fa fa-plus-circle primary-clr"></i>  cPanel licences</h6>
                                        <span class="price"><span class="fw-bold">$10</span>per month per server</span>
                                    </div>
                                </div>
                                 <div class="col-md-3 mb-4">
                                    <div class="addon-text">
                                        <h6><i class="fa fa-plus-circle primary-clr"></i> Plesk (100) licences</h6>
                                        <span class="price"><span class="fw-bold">$7.50</span>per moth per server</span>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
          <!--block 2-->
         <div class="accordion my-5" id="accordionfaq">
              <div class="accordion-item">
                  <h5 class="fw-bold py-3 mb-0 px-3"> Your questions, our answers </h5>
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Do you offer sever management?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <p>Each server can have our proactive Managed Services by on-site technicians added to it. Information about this service can be found on our Managed Services page.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    How reliable is VPS Hosting?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                   <p>Our cloud servers are designed and built to keep your data online; should your virtual server suffer an outage your data will be instantly transferred to a live machine with no interruption.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    How can I set up my VPS Hosting?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p>Simply select your resources from above and click the “Signup now” button. Your machine will be online within a few clicks.</p>
                  </div>
                </div>
              </div>
               <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                     Why should I choose VPS Hosting over a dedicated server?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                  <div class="accordion-body">
                    <p>While a dedicated server grants you full control and a range of benefits, VPS Hosting is perfect for those who have a lesser resource requirement for their machine. VPS Hosting is more cost-effective and its ability to scale up and down as required gives you more freedom to grow your site or application without committing fully to the expense of a dedicated server.</p>
                  </div>
                </div>
              </div>
               <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                    How do you monitor your data centers and servers?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                  <div class="accordion-body">
                    <p>We are on-site and available 24/7/365 to ensure our servers – and your sites – are running at peak performance.</p>
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
               <h3 class="title mb-3 text-uppercase fw-bold">NOT SURE WHICH <span class="primary-clr"> PLAN IS BEST </span> FOR YOU?</h3>
               <p>No problem. Send us a ticket with your questions and we’ll get back to you with a quote. Free of charge.</p>
               <button class="btn main-button read-more text-white rounded-0"> Request a Quote</button>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
    //multilevel tab
    multilevel("level1")
    function multilevel(cityName) {
        var i;
        var x = document.getElementsByClassName("multicontent");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        document.getElementById(cityName).style.display = "block";  
    }
</script>
@endsection

