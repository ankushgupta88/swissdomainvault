@extends('layouts.master') 
@section('content')
<!--banner slider section-->
<section class="banner_slider">
 
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="overlay"> <img src="{{ asset('public/assets/images/hero-bg1.jpg') }}" class="d-block w-100" alt="hero-bg1.jpg"> </div>
            <div class="carousel-caption d-none d-md-block text-left">
               <h1 class="banner-title">Wordpress Hosting</h1>
               <p class="banner-para">Get a website that works It's quick and easy..</p>
               <div class="slider-banner-button mt-md-5">
                  <a href="{{ url('hosting-service?slug=wordpress-hosting') }}" class="btn button-banner text-white rounded-0 me-md-4">Get Started Now </a>
                  <a href="{{ url('hosting-service?slug=wordpress-hosting') }}" class="btn button-banner text-white rounded-0"> See all features </a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="overlay"> <img src="{{ asset('public/assets/images/hero-bg2.jpg') }}" class="d-block w-100" alt="hero-bg2.jpg"> </div>
            <div class="carousel-caption d-none d-md-block text-left">
               <h1 class="banner-title">Cloud Hosting</h1>
               <p class="banner-para">Host your website in the cloud for unpresidented reliability..</p>
               <div class="slider-banner-button mt-md-5">
                  <a href="{{ url('hosting-service?slug=cloud-hosting') }}" class="btn button-banner text-white rounded-0"> See all features </a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="overlay"> <img src="{{ asset('public/assets/images/hero-bg4.jpg') }}" class="d-block w-100" alt="hero-bg4.jpg"> </div>
            <div class="carousel-caption d-none d-md-block text-left">
               <h1 class="banner-title">VPS Hosting</h1>
               <p class="banner-para">Step up to the power of a Fully Managed Cloud VPS..</p>
               <div class="slider-banner-button mt-md-5">
                  <a href="{{ url('hosting-service?slug=vps-hosting') }}" class="btn button-banner text-white rounded-0"> See all features </a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="overlay"> <img src="{{ asset('public/assets/images/hero-bg5.jpg') }}" class="d-block w-100" alt="hero-bg5.jpg"> </div>
            <div class="carousel-caption d-none d-md-block text-left">
               <h1 class="banner-title">Dedicated Servers</h1>
               <p class="banner-para">Go Dedicated and get the whole box to yourself..</p>
               <div class="slider-banner-button mt-md-5">
                  <a href="{{ url('hosting-service?slug=dedicated-servers') }}" class="btn button-banner text-white rounded-0"> See all features </a>
               </div>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev banner-icon" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next banner-icon" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
   </div>
</section>


<section class="domain-block bg-primary-clr py-2 position-relative">
    <div class="container">
        <div class=" domain-row ">
        <div class="row align-items-center ">
            <div class="col-md-2">
                <div class="domain-name-text pt-3 pt-md-0">
                <h4 class="text-white fw-bold">Create your Online Identity in Minutes....</h4> 
                </div>
            </div>
            <div class="col-md-7">
                <div class="search-box-banner py-3">
                 
                  <div class="search">
                    <form method="POST" action="#" enctype="multipart/form-data" id="home_header_search">
                        <input type="text" id="home_search" name="home_search" value="" class="form-control rounded-0" placeholder="Find your new domain name">
                        <span class="search-input-group-btn">
                          <button type="button" class="btn main-button rounded-0 text-white home_domain_search"> <span class="desktop-view"> Search </span> <span class="mobile-show"><i class="fa fa-search icon-only"></i></span></button>
                          <button type="button" class="btn transfer-button text-white rounded-0 home_domain_transfer"> <span class="desktop-view"> Transfer </span>
                          <span class="mobile-show"> <i class="fa fa-send icon-only"></i> </span> </button>
                        </span> 
                    </form>
                     
                  </div>
               </div>
            </div>
            <div class="col-md-3">
                <div class="domains-multi">
                        <ul class="list-unstyled d-md-flex pt-3">
                           <li class="fw-bold px-2">.com <span class="domain-no color-primary fs-18">17.85</span></li>
                           <li class="fw-bold px-2">.net <span class="domain-no color-primary fs-18">15.99</span></li>
                           <li class="fw-bold px-2">.online <span class="domain-no color-primary fs-18">32.99</span></li>
                           <li class="fw-bold px-2">.ch <span class="domain-no color-primary fs-18">18.99</span></li>
                           <li class="fw-bold px-2">.Host <span class="domain-no color-primary fs-18">49.00</span></li>
                           <li class="fw-bold px-2">.world <span class="domain-no color-primary fs-18">35.75</span></li>
                        </ul>
                     </div>
            </div>
        </div>
        </div>
    </div>
</section>



<!--choose plan section-->
<section class="choose-plan-section py-5 my-md-5">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
           <div class="row">
               @foreach($hosting as $host)
               <div class="col-md-6 mb-4">
                <div class="choose-plan-content h-100 text-center ">
                   <h4 class="fw-bolder text-uppercase my-2">{{ $host->name }}</h4>
                   <div class="desc mb-2">
                      @php echo $host->short_desc; @endphp
                   </div>
                   <div class="price"><span class="fw-bold">${{ $host->price }}</span> 
                   <br> /month</div>
                   <a href="{{ url('hosting-service?slug='.$host->slug) }}" class="btn main-button text-white rounded-0 mt-3"> Choose Plan </a>
                </div>
             </div>
            @endforeach
           </div> 
        </div>
        <div class="col-md-4">
            <div class="hosting-img h-100">
                 <img src="public/assets/images/web-hosting.png" class="w-100">
             </div>
        </div>
         
         
      </div>
   </div>
</section>

<!--feature section-->
<section class="feature-section light-bg block-spacing">
   <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
             <div class="main-tilte pb-5 mb-4">
            <h3 class="text-center text-uppercase fw-bold  ">Why get online with us?</h3>
            </div>
         </div>
      </div>
      <div class="feature-content-block px-3 px-md-5 py-5 bg-white">
         <div class="row">
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-rocket"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Fast load time</h5>
                     <p>Our servers are setup with hyper intelligence to optimize the load time speed, so you websites and services run fast and efficiently.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-thumb-tack"></i></span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Included Apps</h5>
                     <p>Our services are pre-configued with libraries of Apps that can be installed and managed with just a point and a click directly from our dashboard</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-globe"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Domains and Emails</h5>
                     <p>Your domain name is the online identity. Getting the right name is important, adding option extensions a key, and having proper domain emails is a must.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-life-ring"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Great Support</h5>
                     <p>We understand that your websites are essential to your operations. Our best of class support team is available to help 24/7/365.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"> <i class="fa fa-lock"></i> </span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Private Domain</h5>
                     <p>Privacy on domain ownership is important in todays world. Our services are build on trust and privacy, so you can know your demains are in good hands.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="feature-content-info d-flex mb-3">
                  <div class="icon-box"><span class="site-icon"><i class="fa fa-wordpress"></i></span></div>
                  <div class="feature-info px-3">
                     <h5 class="media-heading fw-bold">Wordpress Hosting</h5>
                     <p>We design and build our servers to run WordPress like a dream. Our exclusive technology gives you the proven performance, reliability, and functionality you need.</p>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
 
   </div>
</section>



<!--counter section-->
 <section class="counter-section py-5">
     <div class="container">
         <div class="row">
                  
      <div class="col-md-12">
          <div class="counter-block">
            <div class="row">
               <div class="col-md-3 position-relative">
                  <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-globe"></i>
                     <p class="mb-0 py-2">Domain Registered</p>
                     <h3 class="counter-number fw-bold">80,946</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-handshake-o"></i>
                     <p class="mb-0 py-2">Happy Customers</p>
                     <h3 class="counter-number fw-bold">12,075</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-file"></i>
                     <p class="mb-0 py-2">Websites Designed</p>
                     <h3 class="counter-number fw-bold">10,468</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-trophy"></i>
                      <p class="mb-0 py-2">Server Uptime</p>
                     <h3 class="counter-number fw-bold">99.9%</h3>
                    
                  </div>
               </div>
            </div>
         </div>
         
      </div>
         </div>
     </div>
 </section>
<!--parallex section-->
<section class="parallex-section" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url({{ asset('public/assets/images/bg2.jpg') }});">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-7">
            <div class="Redo-dark-box text-white">
               <h3 class="title mb-3"><span class="primary-clr">Switching</span> from another host?</h3>
               <p>Our dedicated Migrations Team is standing by to transfer your existing content from your prior host and configure it to perform optimally on our platform. We can also transfer domain registrations from other registrars in order to provide you complete management of your entire online portfolio all in one place!</p>
               <button class="btn main-button read-more text-white rounded-0"> Read More..</button>
            </div>
         </div>
         <div class="col-md-5 pt-5 pt-md-0">
            <div class="support-content d-flex mb-3 text-white">
               <div class="icon-box text-white"><span class="site-icon text-white"> <i class="fa fa-support"></i> </span></div>
               <div class="feature-info px-3">
                  <h5 class="media-heading fw-bold">24x7 Tech Suuport</h5>
                  <p>Our support staff is available 24x7x365 to assist you via Telephone, LiveChat, or Email with any hosting-related issues. 
               </div>
            </div>
            <div class="support-content d-flex mb-3 text-white">
               <div class="icon-box text-white"><span class="site-icon text-white"> <i class="fa fa-money"></i> </span></div>
               <div class="feature-info px-3">
                  <h5 class="media-heading fw-bold">30 Day Guarantee</h5>
                  <p>Try our services at no risk! If you're not completely satisfied, you can cancel within 30 days for a complete refund. 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--testimonial slider-->
<section class="testimonial-section block-spacing">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
              <div class="main-tilte pb-5 mb-4">
            <h3 class="text-center text-uppercase fw-bold">What People Says?</h3>
            </div>
         </div>
         <div class=" col-12 col-md-9 mx-auto ">
            <div id="testimonial-slider" class="owl-carousel text-center">
               <div class="testimonial">
                  <p class="description fst-italic">
                     <i class="fa fa-quote-left"></i> Very happy with the decision to migrate my domains and hosting to SDV.  Great performance and a company that can be trusted. 
                     <i class="fa fa-quote-right"></i>
                  </p>
                  <p class="pt-2"><span class="testimonial-name">Mark,</span> <a href="#" class="primary-clr text-decoration-none">New York, USA</a></p>
               </div>
               <div class="testimonial">
                  <p class="description fst-italic">
                     <i class="fa fa-quote-left"></i>  I was looking for a truly reliable domain registrat service that can be trusted to manange my domains.  SDV is fantastic.  <i class="fa fa-quote-right"></i>
                  </p>
                  <p class="pt-2"><span class="testimonial-name">John,</span> <a href="#" class="primary-clr text-decoration-none">San Francisco, CA</a></p>
               </div>
               <div class="testimonial">
                  <p class="description fst-italic">
                     <i class="fa fa-quote-left"></i> Operating an international e-commerce portal, I needed a reliable hosting solution, and is reliable and provide the support I need to run my business.  SHV truly lives up to their promise. <i class="fa fa-quote-right"></i>
                  </p>
                  <p class="pt-2"><span class="testimonial-name">Linda,</span> <a href="#" class="primary-clr text-decoration-none">Miami, FL</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--announcements section-->
<section class="announcement-section">
   <div class="container-fluid">
      <div class="announce-block p-4 text-white">
         <div class="row">
            <div class="col-md-12">
               <div class="announce-title pb-2">
                  <h5 class="text-uppercase fw-bold"> Latest Announcements </h5>
               </div>
            </div>
            <div class="col-md-4">
               <div class="announce-content">
                  <p>Now offering the ultimate start-up online marketer package.&nbsp; &nbsp;Simply select our start-up bundle... </p>
                  <p><small><i class="fa fa-calendar"></i>&nbsp;Mar 15th</small></p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="announce-content">
                  <h5> Launching Total Domain Privacy </h5>
                  <p>Staying true to our heritage, we are now including domain privacy with each domain purchase made... </p>
                  <p><small><i class="fa fa-calendar"></i>&nbsp;Dec 28th</small></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>  
<!-- Search Domain Home Modal -->
<div class="modal" id="searchDomainModel" tabindex="-1" aria-labelledby="searchDomainModelLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <h4><i class="fa fa-spinner fa-pulse text-black"></i> Please Wait...</h4>
      </div>
    </div>
  </div>
</div>
@endsection