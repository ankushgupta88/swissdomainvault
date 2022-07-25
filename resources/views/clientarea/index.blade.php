@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="profile">
   <div class="container-fluid">
   <div class="row">
      @if(auth()->user()->last_name)
      <h2 class="name1 fw-bold fs-3 py-3">Welcome Back, {{ auth()->user()->last_name }} <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i></h2>
      @endif
      <div class="col-md-3">
         <div class="box bg-light py-3 px-3 border border-5 border-top-0 border-start-0 border-bottom-0 justify-cone">
            <div class="txt_box one text-center ">
               <span class=""><i class="fa fa-cube"></i></span>
               <div class="heading d-grid text-center">
                  <span class="fs-1">
                  0
                  </span>
                  <h4> Services</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="box  bg-light py-3 px-3 border border-5 border-top-0 border-start-0 border-bottom-0">
            <div class="txt_box  two text-center ">
               <span class=""><i class="fa fa-globe"></i></span>
               <div class="heading d-grid text-center">
                  <span class="fs-1">
                  0
                  </span>
                  <h4> Domains</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="box  bg-light py-3 px-3 border border-5 border-top-0 border-start-0 border-bottom-0">
            <div class="txt_box three text-center ">
               <span class=""><i class="fa fa-comments"></i></span>
               <div class="heading d-grid text-center">
                  <span class="fs-1">
                  0
                  </span>
                  <h4> Tickets</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="box bg-light py-3 px-3 border border-5 border-top-0 border-start-0 border-bottom-0">
            <div class="txt_box  four text-center ">
               <span class=""><i class="fa fa-credit-card"></i></span>
               <div class="heading d-grid text-center">
                  <span class="fs-1">
                  0
                  </span>
                  <h4> Invoice</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="review-checkout-section py-5">
   <div class="container-fluid">
      <div class="row">
         <!--left block-->
         <div class="col-lg-9  left-block-side">
            <div class="client-area-form my-4">
               <form class="d-sm-flex">
                  <input class="form-control me-2 w-75" type="search" placeholder="Enter a question here to search our knowledgebase for answers..." aria-label="Search">
                  <button class="btn btn-outline-success main-button text-light mt-3 mt-sm-0" type="submit"> <i class="fa fa-search me-2"></i>Search</button>
               </form>
            </div>
            <div class="question-div py-2">
               <p class="text-center mb-0 text-light">
                  The next generation of domains is coming! Take advantage of New TLD opportunities.
                  <a href="" class="text-light">Learn More »</a>
               </p>
            </div>
            <div class="active-product three p-2 my-5">
               <div class="active-product-heading d-sm-flex justify-content-between">
                  <h6 class="fw-bold m-sm-0 my-4"><i class=" fa fa-globe me-2"></i>
                     Register a New Domain
                  </h6>
               </div>
               <div class="client-area-form my-4">
                   <form method="POST" action="#" enctype="multipart/form-data" id="home_header_search" class="d-sm-flex">
                     <input class="form-control me-2 w-100" type="search" id="home_search" name="home_search" placeholder="Enter domain name" aria-label="Search">
                     <button class="btn btn-outline-success main-button text-light me-3 one my-sm-0 my-4 home_domain_search" type="submit"> Register</button>
                     <button class="btn btn-outline-success main-button text-dark two m-sm-0 my-4 home_domain_transfer" type="submit"> </i>Transfer</button>
                  </form>
               </div>
            </div>
            <div class="active-product one p-2 my-5">
               <div class="active-product-heading d-sm-flex justify-content-between">
                  <h6 class="fw-bold m-sm-0 my-4"><i class=" fa fa-cube me-2"></i>
                     Your Active Products/Services
                  </h6>
                  <a href="{{ url('clientarea/my-services') }}" class="active-client text-light px-3 py-2 text-decoration-none">
                  <i class="fa fa-plus me-2"></i>  View All
                  </a>
               </div>
               <div class="active-product-para m-sm-0 my-4">
                  <p>It appears you do not have any products/services with us yet. <a href="{{ url('cart') }}" class="text-decoration-none">Place an order to get started</a></p>
               </div>
            </div>
            <div class="active-product two p-2 my-5">
               <div class="active-product-heading d-sm-flex justify-content-between">
                  <h6 class="fw-bold m-sm-0 my-4"><i class=" fa fa-comments me-2"></i>
                     Recent Support Tickets
                  </h6>
                  <a href="{{ url('open-ticket') }}" class="active-client text-light px-3 py-2 text-decoration-none">
                  <i class="fa fa-plus me-2"></i>  Open New ticket
                  </a>
               </div>
               <div class="active-product-para m-sm-0 my-4">
                  <p>No Recent Tickets Found. If you need any help, please <a href="{{ url('open-ticket') }}" class="text-decoration-none">open a ticket</a></p>
               </div>
            </div>
            <div class="active-product four p-2 my-5">
               <div class="active-product-heading d-sm-flex justify-content-between">
                  <h6 class="fw-bold m-sm-0 my-4"><i class=" fa fa-newspaper-o me-2"></i>
                     Recent News
                  </h6>
                  <a href="{{ url('announcements') }}" class="active-client  text-light px-3 py-2 text-decoration-none">
                  <i class="fa fa-arrow-right me-2"></i>  View All
                  </a>
               </div>
               <div class="active-product-para m-sm-0 my-4">
                  <p><a href="#" class=" text-dark">03/15/2019</a></p>
                  <p><a href="#" class=" text-dark">Launching Total Domain Privacy</a></p>
                  <p><a href="#" class=" text-dark"> 12/28/2018</a></p>
               </div>
            </div>
         </div>
         <!--right block-->
         <div class="col-lg-3  p-0">
            <!--categories block-->
            <div class="profile-block mt-4 mt-md-0 p-4">
               <h6 class="panel-title info fw-bold text-light mb-0">
                  <i class="fa fa-user pe-2" aria-hidden="true"></i>Your Info
               </h6>
               <ul class="Categories-link  list-unstyled p-3  ">
                   @if(auth()->user()->companyname)
                  <li class="py-1">
                     <p class="text-decoration-none text-dark mb-1">{{ auth()->user()->companyname }}</p>
                  </li>
                  @endif
                  @if(auth()->user()->name)
                  <li class="py-1">
                     <p class="text-decoration-none text-dark mb-1">{{ auth()->user()->name }}</p>
                  </li>
                  @endif
                  @if(auth()->user()->city)
                  <li class="py-1">
                     <p class="text-decoration-none text-dark mb-1">{{ auth()->user()->city }}</p>
                  </li>
                  @endif
                  @if(auth()->user()->city)
                  <li class="py-1">
                     <p class="text-decoration-none text-dark mb-1">{{ auth()->user()->city }}, {{ auth()->user()->state }}, {{ auth()->user()->postcode }}</p>
                  </li>
                  @endif
                  <li>
                     <a href="{{ url('clientarea/edit-account') }}" class="btn main-button text-white btn-sm mt-3"> <i class="fa fa-edit pe-2" aria-hidden="true"></i>  Update </a>
                  </li>
               </ul>
            </div>
            <div class="profile-block mt-4 mt-md-0 p-4">
               <h6 class="panel-title info fw-bold text-light mb-0">
                  <i class="fa fa-folder pe-2" aria-hidden="true"></i>Contact
               </h6>
               <ul class="Categories-link  list-unstyled p-3  ">
                  <li class="py-1">
                     No Contacts Found
                  </li>
                  <li>
                     <button class="btn main-button text-white btn-sm mt-3"> <i class="fa fa-plus pe-2" aria-hidden="true"></i>   New Contact </button>
                  </li>
               </ul>
            </div>
            <div class="profile-block mt-4 mt-md-0 p-4">
               <h6 class="panel-title info fw-bold text-light mb-0">
                  <i class="fa fa-bookmark  pe-2" aria-hidden="true"></i>Shortcuts
               </h6>
               <ul class="Categories-link  list-unstyled p-3  ">
                  <li class="py-1">
                     <a href="{{ url('cart') }}" class="text-decoration-none text-dark "><i class="fa fa-shopping-cart pe-2" aria-hidden="true"></i>  Order New services</a>
                  </li>
                  <li class="py-1">
                     <a href="{{ url('cart?a=add&domain=register') }}" class="text-decoration-none text-dark "><i class="fa fa-globe pe-2" aria-hidden="true"></i>  Register a New Domain</a>
                  </li>
                  <li class="py-1">
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-decoration-none text-dark " ><i class="fa fa-arrow-left pe-2" aria-hidden="true"></i>  Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </li>
               </ul>
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