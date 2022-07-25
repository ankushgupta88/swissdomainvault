@include('layouts.head')
   <body class="{{ Request::path() == 'login' || Request::path() == 'password/reset' ? 'cutom-login-hide' : '' }} @if(Request::is('password/reset/*')) cutom-login-hide @endif ">
    <!--navigation-->
     <header class="navigation_bar w-100">
        <div class="pree-header">
        <div class="container-fluid">
         <div class="row  py-1 align-items-center">
          <div class="col-lg-4 col-md-7 col-4">
            <div class="contact_header_detail">
             <ul class="text-white d-flex list-unstyled mb-0">
                <li class="px-3"><i class="fa fa-phone pe-2"></i><span>+41 43 505 1054</span></li>
                 <li class="px-3"> <i class="fa fa-envelope-o pe-2"></i><span>info@swissdomainvault.com</span></li>
             </ul>
            </div>  
          </div>
          
          <div class="col-lg-4 col-md-6 col-12 call-expert">
                     
     
        
            <div class="call-action ">
               <div class="massage text-center text-white">
                  <p class="mb-0 text-decoration-underline py-1">Call one of our experts now: +41 43 505 1054</p>
               </div>
            </div>
         
    
  
                 </div>
          
          
          
          <div class="col-lg-4 col-md-5 col-8">
              <div class="shop-cart float-end">
                <ul class="text-white d-flex list-unstyled mb-0">
                    <li class="pe-3">
                        <a href="{{ url('cart?a=view') }}"><i class="fa fa-shopping-cart pe-2"></i><span class="badge up badge-success count-cart-item" id="cartItemCount">
                            @if(Session::get('cart'))  
                               @php echo count(Session::get('cart')); @endphp
                            @else 
                                0 
                            @endif 
                        </span></a>
                    </li>
                 <li class="nav-item dropdown language-convertor">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    English
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"> <i class="fa fa-list"></i> Choose language </a></li>
                    <li><a class="dropdown-item" href="{{ url('/') }}">English</a></li>
                  </ul>
                </li>
             </ul> 
              </div>
          </div>
         </div>
        </div>
        </div>
        <div class="container-fluid py-2">
         <div class="row main-header align-items-center">
          <div class="col-md-4 col-12">
              <div class="logo_block">
                 <a href="{{ url('/') }}"><img src="{{ asset('public/assets/images/logo-dark.png') }}" class="img-fluid"></a>
              </div>
               </div>
              <div class="col-md-8 col-12">
               <div class="navigation_block float-md-end">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"> <i class="fa fa-bars" aria-hidden="true"></i> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-md-auto mb-2 mb-lg-0">
                            <li class="nav-item pe-2 ps-4 ps-md-0">
                              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item pe-2 ps-4 ps-md-0 dropdown">
                                <a class="nav-link dropdown-toggle droplink" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Services
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                    @if (Auth::check())
                                        <a class="dropdown-item" href="{{ url('/clientarea/my-services') }}">My Services</a>
                                        <a class="dropdown-item" href="{{ url('cart?gid=addons') }}">View Available Addons</a> 
                                    @endif
                                  <a class="dropdown-item" href="{{ url('/web-hosting') }}">Shared Hosting</a>
                                  <a class="dropdown-item" href="{{ url('/reseller-hosting') }}">Reseller Hosting</a>
                                  <a class="dropdown-item" href="{{ url('/vps-hosting') }}"> VPS Hosting</a>
                                  <a class="dropdown-item" href="{{ url('/dedicated-servers') }}"> Dedicated Servers</a>
                                  <a class="dropdown-item" href="{{ url('/ssl-certificates') }}"> SSL Certificates</a>
                                </div>
                              </li>
                              @if (Auth::check())
                              <li class="nav-item pe-2 ps-4 ps-md-0 dropdown">
                                <a class="nav-link dropdown-toggle droplink" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Domains
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="{{ url('/clientarea/my-domain') }}"> My Domains</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/domain-renew') }}"> Renew Domains</a>
                                  <a class="dropdown-item" href="{{ url('/cart?a=add&domain=register') }}"> Register a New Domain </a>
                                  <a class="dropdown-item" href="{{ url('cart?a=add&domain=transfer') }}"> Transfer a Domain to Us</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/new-tlds') }}"> Preregister New TLDs</a> 
                                  <a class="dropdown-item" href="{{ url('cart?a=add&domain=register') }}"> Domain Search</a>
                                </div>
                              </li>
                              @endif
                               <li class="nav-item pe-2 ps-4 ps-md-0 dropdown">
                                <a class="nav-link dropdown-toggle droplink" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Support
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="{{ url('/support-tickets') }}"> Tickets</a>
                                  <a class="dropdown-item" href="{{ url('/Knowledge-base') }}"> Knowledgebase</a>
                                  <a class="dropdown-item" href="{{ url('/announcements') }}"> Announcements </a>
                                  <a class="dropdown-item" href="{{ url('/server-status') }}"> Network Status </a>
                                </div>
                              </li>
                            <li class="nav-item pe-2 ps-4 ps-md-0">
                              <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                            </li> 
                            @if (Auth::check())
                              <li class="nav-item pe-2 ps-4 ps-md-0 dropdown">
                                <a class="nav-link dropdown-toggle droplink" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Billing
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="{{ url('clientarea/my-invoice') }}"> My Invoices</a>
                                  <a class="dropdown-item" href="{{ url('clientarea/my-quotes') }}"> My Quotes</a>
                                  <a class="dropdown-item" href="{{ url('clientarea') }}"> Mass Payment </a>
                                  <a class="dropdown-item" href="{{ url('clientarea') }}"> Payment Methods</a>
                                  <a class="dropdown-item" href="{{ url('clientarea/add-funds') }}"> Add Funds</a>
                                  <a class="dropdown-item" href="{{ url('clientarea/affiliates') }}"> Affiliates</a>
                                </div>
                              </li>
                            @endif
                            <li class="nav-item pe-2 ps-4 ps-md-0">
                              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                            </li>
                          </ul>
                          <ul class="navbar-nav  admin_login_detail text-white d-flex list-unstyled mb-0 align-items-center">
                              <!--<li class="px-2 search-box"> <i class="fa fa-search" aria-hidden="true"></i> </li>--> 
                               <li class="nav-item dropdown px-2">
                                <a class="nav-link dropdown-toggle droplink" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> 
                                </a>
                                <div class="dropdown-menu dropdown-content admin-link" aria-labelledby="navbarDropdownMenuLink">
                                @if (Auth::check())
                                 <a class="dropdown-item" href="{{ url('/clientarea') }}">Client Area</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/edit-account') }}">Edit Account Details</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea') }}">Payment Methods</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/sub-account') }}">Contacts/Sub-Accounts</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/change-password') }}">Change Password</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/security-setting') }}">Security Settings</a>
                                  <a class="dropdown-item" href="{{ url('/clientarea/email-history') }}">Email History</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                @else
                                  <a class="dropdown-item" href="{{ url('login') }}"> Login</a>
                                  <a class="dropdown-item" href="{{ url('register') }}"> Register</a>
                                  <a class="dropdown-item" href="{{ url('password/reset') }}">  Forgot Password? </a>
                                @endif
                                </div>
                              </li>
                          </ul>
                        </div>
                    </nav>
               </div>
              </div>
               
         
         </div>
        </div>
     </header>
     @yield('content')
     <!--client logo slider-->
    <section class="client-logo-slider py-4">
      <div class="container-fluid">
          <div class="col-md-12">
            <div id="client-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('public/assets/images/client_1.png') }}" alt="client_1.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_2.png') }}" alt="client_2.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_3.png') }}" alt="client_3.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_4.png') }}" alt="client_4.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_5.png') }}" alt="client_5.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_6.png') }}" alt="client_6.png" class="img-fluid"></div>
                <div class="item"><img src="{{ asset('public/assets/images/client_7.png') }}" alt="client_7.png" class="img-fluid"></div>
            </div>
          </div>
      </div>
    </section>  
     <!--footer-->
      <footer class="bg-img px-2 px-md-0">
          <div class="container-fluid">
             <div class="row">
                 <div class="col-md-15 col-md-12 col-sm-12 col-12">
                    <div class="footer-content mb-5 mb-lg-0">
                       <div class="footer_logo_block pb-3">
                 <a href="https://selodesign.com/swissdomainvault">
                     <img src="https://selodesign.com/swissdomainvault/public/assets/images/logo-dark.png" class="img-fluid">
                   </a>
              </div> 
              <div class="contact_footer_detail">
             <ul class="text-white list-unstyled mb-0 pb-3">
                <li class="pb-1"><i class="fa fa-phone pe-2"></i><span>+41 43 505 1054</span></li>
                 <li class="pb-1"> <i class="fa fa-envelope-o pe-2"></i><span>info@swissdomainvault.com</span></li>
             </ul>
             
             <ul class="list-unstyled d-flex footer-social-icon mb-0">
							<li><a href="#" class="btn btn-facebook"><i class="fa fa-facebook icon-only"></i></a></li>
							<li><a href="#" class="btn btn-googleplus"><i class="fa fa-google-plus icon-only"></i></a></li>
							<li><a href="#" class="btn btn-twitter"><i class="fa fa-twitter icon-only"></i></a></li>
							<li><a href="#" class="btn btn-linkedin"><i class="fa fa-linkedin icon-only"></i></a></li>
						</ul>
             
             
             
            </div>
                    </div> 
                 </div>
                 
              <div class="col-md-15 col-md-3 col-sm-6 col-6 mb-3 mb-md-0">
                <div class="footer-content">
                    <h3 class="footer-title text-uppercase mb-3"> SERVICES </h3>
                    <ul id="ServicesMenuList" class="list-unstyled">
							<li class="pt-2"><a href="{{ url('/web-hosting') }}">Web Hosting</a></li>
							<li class="pt-2"><a href="{{ url('/reseller-hosting') }}">Wordpress Hosting</a></li>
							<li class="pt-2"><a href="{{ url('/vps-hosting') }}">VPS Hosting</a></li>
							<li class="pt-2"><a href="{{ url('/dedicated-servers') }}">Dedicated Servers</a></li>
						</ul>
                </div> 
              </div>
               <div class="col-md-15 col-md-3 col-sm-6 col-6 mb-3 mb-md-0">
                <div class="footer-content">
                    <h3 class="footer-title text-uppercase mb-3"> DOMAINS </h3>
                    <ul id="ServicesMenuList" class="list-unstyled">
							<li class="pt-2"><a href="{{ url('cart?a=add&domain=register') }}">Domain Search</a></li>
							<li class="pt-2"><a href="{{ url('cart?a=add&domain=transfer') }}">Transfer Domain</a></li>
						</ul>
                </div> 
              </div>
               <div class="col-md-15 col-md-3 col-sm-6 col-6 mb-3 mb-md-0">
                <div class="footer-content">
                    <h3 class="footer-title text-uppercase mb-3"> COMPANY </h3>
                    <ul id="ServicesMenuList" class="list-unstyled">
							<li class="pt-2"><a href="{{ url('/about-us') }}">About Us</a></li>
							<li class="pt-2"><a href="{{ url('/our-history') }}">Our History</a></li>
							<li class="pt-2"><a href="{{ url('/our-awards') }}">Our Awards</a></li>
							<li class="pt-2"><a href="{{ url('/clientarea/affiliates') }}">Affiliates</a></li>
						</ul>
                </div> 
              </div>
               <div class="col-md-15 col-md-3 col-sm-6 col-6 mb-3 mb-md-0">
                <div class="footer-content">
                    <h3 class="footer-title text-uppercase mb-3"> SUPPORT </h3>
                    <ul id="ServicesMenuList" class="list-unstyled">
							<li class="pt-2"><a href="{{ url('/open-ticket') }}">Open Ticket</a></li>
							<li class="pt-2"><a href="{{ url('/server-status') }}">Network Status</a></li>
							<li class="pt-2"><a href="{{ url('/Knowledge-base') }}">Knowledgebase</a></li>
							<li class="pt-2"><a href="{{ url('/downloads') }}">Downloads</a></li>
						</ul>
                </div> 
              </div>
             </div>
          </div>
        </footer>
      
        <div class="bottom-footer py-2">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-6 col-12">
                     <div class="bootom-footer-content text-center">
                         <ul class="list-unstyled d-flex  mb-0">
                          <li><a href="{{ url('/privacy-policy') }}" class="text-decoration-none">Privacy Policy</a></li>
                          <li><a href="{{ url('/terms-of-use') }}" class="text-decoration-none">Terms of Use</a></li>
                          <li><a href="{{ url('/sla-aggrement') }}" class="text-decoration-none">SLA Aggrement</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                      <div class="footer-copyright float-md-end">
    			<div class="container">
    			   <p class="fs-14 mb-0">Copyright © 2021 Swiss Domain Vault. <span>All Rights Reserved.</span></p>
    			</div>
    		</div>
                  </div>
                </div>
            </div>
            
        </div> 
        <!--bootstrap js-->
        <script src="{{ URL::asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--owl-carousel js-->
        <script src="{{ URL::asset('public/assets/js/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ URL::asset('public/assets/js/owl-carousel/owl.carousel.min.js') }}"></script>
        <!--validate js-->
        <script type="text/javascript" src="{{ URL::asset('public/assets/js/validate.min.js') }}"></script>
        <!--custom scripts-->
        <script type="text/javascript" src="{{ URL::asset('public/assets/js/custom-script.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/assets/js/custom-ajax.js') }}"></script>
         <!--Data Tables Script-->
         <script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.dataTables.min.js') }}"></script>
         <script type="text/javascript" src="{{ URL::asset('public/assets/js/dataTables.bootstrap5.min.js') }}"></script>
         
         <script>
             $(document).ready(function() {
                $('#example').DataTable();
            } );
         </script>
         
    </body>
  </html>