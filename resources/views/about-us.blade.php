@extends('layouts.master') 
@section('content')

<section class="hero-bg-banner light-bg d-flex align-items-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 87%), rgb(0 0 0 / 87%)), url('./public/assets/images/hero-bg2.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <div class="hero-bg-text text-white p-5">
                   <h5 class="fw-bold pb-2 text-uppercase"><i class="fa fa-linux"></i> About us</h5>
                   <h1 class="fw-bold pb-3">About Our Vault</h1>

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
            <h3 class="text-center text-uppercase fw-bold  ">LEARN ABOUT SWISS DOMAIN VAULT</h3>
            </div>
         </div>
         <div class="col-md-12">
             <div class="about-us-content">
                 <p> We at Swiss Domain Vault are dedicated to of providing domain names and hosting that secure, safe, private, and fast.</p>
                <p> We ensure our customers privacy when purchasing domain names and hosting thru our locations in the mountaings of Switzerland. </p>
                <ul>
    				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
    				<li>Sed sit amet ligula sit amet magna dapibus interdum.</li>
    				<li>Vivamus non metus a turpis adipiscing volutpat vitae vitae libero.</li>
    				<li>Vivamus non metus a turpis adipiscing volutpat vitae vitae libero.</li>
		      </ul>
		       <blockquote>
				<p>Cras blandit ut sit. Ullamcorper. Imperdiet. Lorem hendrerit phasellus varius. Condimentum Suscipit at nibh dapibus Velit velit. Habitasse risus felis imperdiet semper montes eleifend vitae penatibus varius lectus natoque dui magna iaculis hendrerit.</p>
			</blockquote>
			<p> Lid est laborum dolo rumes fugats untras. Etharums ser quidsem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
             </div>
             <div class="mission-content shadow p-4 mt-4 mt-md-5">
				<h6 class="text-uppercase fw-600">Our Mission</h6>
				<p class="mb-0">Lid est laborum dolo rumes fugats untras. Etharums ser quidsem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
         </div>
      </div>
   </div>
</section>

 <section class="video-frame py-5">
     <div class="container">
        <div class="row align-items-center">
           <div class="col-md-4">
               <div class="video-block text-center">
                   <div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://player.vimeo.com/video/176916362?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
			</div>
               </div>
           </div> 
           <div class="col-md-8">
               <h5 class="pt-4 pt-md-0"> Our Datacenter </h5>
               <p class="mb-0"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer</p>
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
                     <h3 class="counter-number fw-bold">1095</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-handshake-o"></i>
                     <p class="mb-0 py-2">Happy Clients</p>
                     <h3 class="counter-number fw-bold">1275</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-file"></i>
                     <p class="mb-0 py-2">Running Projects</p>
                     <h3 class="counter-number fw-bold">168</h3>
                     
                  </div>
               </div>
               <div class="col-md-3 position-relative text-center">
                   <div class="counter-content text-white text-center mb-4 mb-md-0">
                     <i class="fa fa-trophy"></i>
                      <p class="mb-0 py-2">Award Winning</p>
                     <h3 class="counter-number fw-bold">299</h3>
                    
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
          <div class="col-md-12">
              <div class="member-title text-center pb-5">
                  <h3 class="text-white text-uppercase fw-bold "> Let's Meet The Team Members </h3>
              </div>
          </div>
         <div class="col-md-3">
            <div class="Redo-dark-box text-white">
               <img src="public/assets/images/user-1.jpg" class="img-fluid">
               <div class="profile-discription">
			  	 <p class="pt-4">What does this team member do? Keep it short! This is also a great spot for social links!</p>
			 </div>
			 <div class="profile-card-header">
				<h6 class="mb-0">Johan Smith</h6>
				<span>aka person</span>
			</div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="Redo-dark-box text-white">
               <img src="public/assets/images/user-2.jpg" class="img-fluid">
               <div class="profile-discription">
			  	 <p class="pt-4">What does this team member do? Keep it short! This is also a great spot for social links!</p>
			 </div>
			 <div class="profile-card-header">
				<h6 class="mb-0">Heather H</h6>
				<span>aka person</span>
			</div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="Redo-dark-box text-white">
               <img src="public/assets/images/user-3.jpg" class="img-fluid">
               <div class="profile-discription">
			  	 <p class="pt-4">What does this team member do? Keep it short! This is also a great spot for social links!</p>
			 </div>
			 <div class="profile-card-header">
				<h6 class="mb-0">Johan Smith</h6>
				<span>aka person</span>
			</div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="Redo-dark-box text-white">
               <img src="public/assets/images/user-4.jpg" class="img-fluid">
               <div class="profile-discription">
			  	 <p class="pt-4">What does this team member do? Keep it short! This is also a great spot for social links!</p>
			 </div>
			 <div class="profile-card-header">
				<h6 class="mb-0">Christopher Di</h6>
				<span>aka person</span>
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
@endsection