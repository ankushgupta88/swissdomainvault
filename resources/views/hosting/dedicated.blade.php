@extends('layouts.master') 
@section('content')

<!--image banner section-->
  <section class="hero-bg-banner light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)), url('./public/assets/images/hero-bg2.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <div class="hero-bg-text text-white p-5">
                   <h5 class="fw-bold pb-2 text-uppercase"><i class="fa fa-server"></i> DEDICATED SERVER</h5>
                   <h1 class="fw-bold pb-3">Go Dedicated and get the whole box to yourself..</h1>
                   <ul class="list-unstyled">
											<li><i class="fa fa-check color-primary"></i>   Complete Control</li>
											<li><i class="fa fa-check color-primary"></i> Dedicated Resource, No Restrictions</li>
											<li><i class="fa fa-check color-primary"></i> More Power, Flexibility and Security</li>
										</ul>
               </div>
           </div>
       </div>
   </div>
  </section>
  
  <!--table content section-->
   <section class="table-content-list block-spacing">
      <div class="container-fluid">
          <div class="row shadow-box py-4 px-3">
            <div class="col-md-12">
                <div class="table-heading">
                    <h5 class="fw-bold"> ENTRY-LEVEL SERVERS </h5>
                    <p> Get started with a Dedicated Server within your budget</p>
                </div>
              <div class="table-content table-responsive">
               <table class="table table-striped table-hover">
                  <thead>
                        <tr>
                          <th scope="col">Server Model</th>
                          <th scope="col">Processor</th>
                          <th scope="col">Speed</th>
                          <th scope="col">Memory</th>
                          <th scope="col">Hard Drives</th>
                          <th scope="col">Bandwidth</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                    <!--1st row-->
                        <tr>
                          <th scope="row" class="bg-primary-clr">
                              <div class="server-info d-flex align-items-center justify-content-center"> <img src="/swissdomainvault/public/assets/images/intel-atom.png" class="me-2"><h6 class="fw-bold mb-0 text-white">EL1</h6></div> </th>
                          <td><b> Intel®Atom™ C2750 </b> </td>
                          <td> <b> 8 Cores x 2.4 GHz </b> <br> <small> <b>(Turbo Boost) </b></small></td>
                          <td><b>8 GB</b> <br> <small>DDR3 ECC</small></td>
                           <td><b>1000 GB</b> <br> <small>(2x500 GB SATA)</small></td>
                            <td><b>10TB</b> <br> <small>(at 100 Mbit/s port)</small></td>
                            <td class="bg-primary-clr">
                                <div class="price-table text-white"><s>$119</s><span class="fw-bold">$19.95</span> /mo <br> <a href="#" class="btn configure-btn bg-dark text-white  my-2 rounded-0 fs-14">Configure</a></div> 
                            </td>
                        </tr>
                       <!--2nd row-->
                        <tr>
                          <th scope="row" class="bg-primary-clr">
                              <div class="server-info d-flex align-items-center justify-content-center"> <img src="/swissdomainvault/public/assets/images/amd.png" class="me-2"><h6 class="fw-bold mb-0 text-white">EL3</h6></div> </th>
                          <td><b> Intel® Quad-Core </b> </td>
                          <td> <b> 4 Cores x 2.8 GHz </b></td>
                          <td><b>16 GB</b> <br> <small>DDR3</small></td>
                           <td><b>1000 GB</b> <br> <small>(2x500 GB SATA)</small></td>
                            <td><b>10TB</b> <br> <small>(at 100 Mbit/s port)</small></td>
                            <td class="bg-primary-clr">
                                <div class="price-table text-white"><span class="fw-bold">$149</span> /mo <br> <a href="#" class="btn configure-btn bg-dark text-white  my-2 rounded-0 fs-14">Configure</a></div> 
                            </td>
                        </tr>
                        <!--3nd row-->
                        <tr>
                          <th scope="row" class="bg-primary-clr">
                              <div class="server-info d-flex align-items-center justify-content-center"> <img src="/swissdomainvault/public/assets/images/intel-xeon.png" class="me-2"><h6 class="fw-bold mb-0 text-white">EL2</h6></div> </th>
                          <td><b> Intel®Xeon® E3-1270 V3 </b> </td>
                          <td> <b> 4 Cores (HT) x 3.5 GHz </b></td>
                          <td><b>16 GB</b> <br> <small>DDR3</small></td>
                           <td><b>1000 GB</b> <br> <small>(2x500 GB SATA)</small><br> <span class="free fw-bold"> SSD Optional </span></td>
                            <td><b>10TB</b> <br> <small>(at 100 Mbit/s port)</small></td>
                            <td class="bg-primary-clr">
                                <div class="price-table text-white"><span class="fw-bold">$199</span> /mo <br> <a href="#" class="btn configure-btn bg-dark text-white  my-2 rounded-0 fs-14">Configure</a></div> 
                            </td>
                        </tr>
                      </tbody>
            </table>
             </div>  
            </div>
          </div>
          
    <!--performance block-->
        <div class="row shadow-box py-4 px-3 mt-5">
            <div class="col-md-12">
                <div class="table-heading">
                    <h5 class="fw-bold"> PERFORMANCE SERVERS </h5>
                    <p> More powerful servers for medium and large projects</p>
                </div>
              <div class="table-content table-responsive">
               <table class="table table-striped table-hover">
                  <thead>
                        <tr>
                          <th scope="col">Server Model</th>
                          <th scope="col">Processor</th>
                          <th scope="col">Speed</th>
                          <th scope="col">Memory</th>
                          <th scope="col">Hard Drives</th>
                          <th scope="col">Bandwidth</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                       <!--1st row-->
                        <tr>
                          <th scope="row" class="bg-primary-clr">
                              <div class="server-info d-flex align-items-center justify-content-center"> <img src="/swissdomainvault/public/assets/images/amd-opteron.png" class="me-2"><h6 class="fw-bold mb-0 text-white">PS1</h6></div> </th>
                          <td><b> AMD Opteron™ 6338P </b> </td>
                          <td> <b> 12 Cores x 2.3 GHz </b></td>
                          <td><b>32 GB</b> <br> <small>DDR3</small></td>
                           <td><b>1000 GB</b> <br> <small>(2x500 GB SATA)</small></td>
                            <td><b>10TB</b> <br> <small>(at 100 Mbit/s port)</small></td>
                            <td class="bg-primary-clr">
                                <div class="price-table text-white"><s>$119</s><span class="fw-bold">$129</span> /mo <br> <a href="#" class="btn configure-btn bg-dark text-white  my-2 rounded-0 fs-14">Configure</a></div> 
                            </td>
                        </tr>
                        <!--2nd row-->
                        <tr>
                          <th scope="row" class="bg-primary-clr">
                              <div class="server-info d-flex align-items-center justify-content-center"> <img src="/swissdomainvault/public/assets/images/intel.png" class="me-2"><h6 class="fw-bold mb-0 text-white">PS2</h6></div> </th>
                          <td><b> Intel® Quad-Core </b> </td>
                          <td> <b> 4 Cores x 2.8 GHz </b></td>
                          <td><b> <s>32 GB </s> </b> <br> <small>DDR3</small><br> <span class="free fw-bold"> 64 GB </span></td>
                           <td><b>1000 GB</b> <br> <small>(2x500 GB SATA)</small><br> </td>
                            <td><b>10TB</b> <br> <small>(at 100 Mbit/s port)</small></td>
                            <td class="bg-primary-clr">
                                <div class="price-table text-white"><span class="fw-bold">$199</span> /mo <br> <a href="#" class="btn configure-btn bg-dark text-white  my-2 rounded-0 fs-14">Configure</a></div> 
                            </td>
                        </tr>
                      </tbody>
            </table>
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
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-rocket"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Fast Delivery</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-sliders"></i></span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">High-tech Component</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-lock"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Anti-DDoS Pro</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-users"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Expert assistance</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
             <div class="col-lg-3 col-md-6 col-12">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-users"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Over 90 preinstallations</h5>
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
              <h6 class="fw-bold pb-4"> More Available Enhancements </h6>
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>  Cloud Storage </h6>
                 <p class="ps-4"> Each server includes 10GB of free cloud storage with upgrade options of up to 2TB storage available.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>  Firewalls </h6>
                 <p class="ps-4"> Stop internal & external attacks, prevent unauthorized access & achieve regulatory compliance w/ a Juniper hardware firewall.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>  Rapid Restore </h6>
                 <p class="ps-4"> A new backup and restore point with 100% of your server’s data is created every 24 hours.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Load Balancing </h6>
                 <p class="ps-4"> Distribute your workload & throughput across multiple servers with our enterprise load-balancing solution.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>SSL Certificates</h6>
                 <p class="ps-4"> Ensure your online commerce is encrypted and secure with our industry leading SSL certificates.</p>
             </div> 
          </div>
          <div class="col-md-4 mb-3">
             <div class="media-content-block">
                 <h6 class="fw-bold"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>  DDoS </h6>
                 <p class="ps-4"> Protect your Windows or Linux dedicated server against malicious attacks with our DDoS mitigation.</p>
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
                            Operating Systems
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                          
                          <div class="accordion-body">
                                <p class="fw-bold"> Choose from a wide range of Linux, Windows and BSD operating systems with every server you order.</p>
                           <p> On the rare occasion someone requires an OS we don’t provide, we allow self-installs to be done via remote KVM-over-IP. No matter what OS you choose, you can count on a 4 hour server deployment.</p>
                           <ul class="checklist">
										<li>CentOS</li>
										<li>Debian</li>
										<li>VMware</li>
										<li>FreeBSD</li>
										<li>Red Hat Linux</li>
										<li>Ubuntu</li>
										<li>Windows Server 2008 &amp; 2012</li>
										<li>Xen Server</li>
										<li>CloudLinux</li>
									</ul>
                             </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0 mb-1">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Control Panels
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                          <div class="accordion-body">
                                <p class="fw-bold"> We offer a wide range of both Linux and Windows supported control panels that are all built to simplify server and website management.</p>
                          <p>Whether you have just a few sites to manage, a few thousand sites, or you want to create virtual servers on your server(s), we have a great control panel option for you.</p>
                           <ul class="checklist">
										<li>cPanel</li>
										<li>DirectAdmin</li>
										<li>Parallels H-Sphere</li>
										<li>Parallels Virtuozzo</li>
										<li>SolusVM</li>
										<li>ProxMox</li>
										<li>Webmin</li>
										<li>Parallels Plesk Panel</li>
										<li>WebsitePanel</li>
									</ul>
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
                    Will I be able to manage my server through a web-based control panel?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                   <p>Yes. Every dedicated server hosting plan comes with Web Host Manager (WHM), which gives you complete control over creating and customizing your account, as well as managing all aspects of your server.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Can I upgrade my VPS hosting account to a dedicated server?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p>Yes. If you currently have a VPS hosting account with us, you can upgrade to our dedicated hosting at any time by ordering a new server. For fully managed customers, we will migrate your data from your current account to your new server. You can also upgrade either your VPS or your dedicated server with Premium DNS, which improves both your security and performance.</p>
                  </div>
                </div>
              </div>
               <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                     What kind of RAID options do you offer?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                  <div class="accordion-body">
                   <p>We provide hardware based RAID with far superior reliability and performance than software based RAID solutions. After you have selected a second hard drive in your cart, RAID 1, 5 and 10 options will be presented.</p>
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
               <h3 class="title mb-3 text-uppercase fw-bold">DIDN'T FIND WHAT <span class="primary-clr"> YOU'RE LOOKING </span>  FOR?</h3>
               <p>No problem. Send us a ticket with your questions and we’ll get back to you with a quote. Free of charge.</p>
               <button class="btn main-button read-more text-white rounded-0"> Request a Quote</button>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection

