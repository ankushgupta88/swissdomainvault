@extends('layouts.master') 
@section('content')

<style>



button {
  padding: 1em;
  border: 0;
  margin: 0.25em;
  color: #fff;
  cursor: pointer;
  background: #111;
}

.tld-row{
    display:none ;
   
}
.active1 { background:red; }
.Popular ,.Entertainment,.Business,.Geographic,.Sports,.Technology,.Services,.Finance,.Education,.Drink,.Leisure,.Shopping,.Estate,.Novelty,.Other{
    
}

</style>
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-title">
               <h3 class="text-white text-uppercase fw-bold"> Shopping Cart </h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Shopping Cart content section-->
<section class="shopping-cart-section py-5">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 py-4">
            <div class="page-inner-title pb-5">
               <h5 class="mb-0 fw-bold">Shopping Cart <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5>
            </div>
         </div>
         <div id="order-standard_cart">
            <div class="row">
               <!--left block-->
               <div class="col-md-9 left-block-side">
                  <div class="header-inner-title border-bottom">
                     <h6 class="clr-hex">Register Domain</h6>
                  </div>
                  <p class="pt-2">Find your new domain name. Enter your name or keywords below to check availability.</p>
                  <div class="domain-checker-block">
                     <div class="domain-checker-bg" style="background-image:url('./public/assets/images/globe.png');">
                        <form method="POST" action="#" enctype="multipart/form-data" id="domain_search" class="serach-cart py-5">
                              @csrf
                              <input type="hidden" name="a" value="checkDomain">
                           <div class="inner-group-box d-flex p-2 bg-white rounded-10">
                              <input class="form-control" type="search" name="domain_name" value="testing.com" placeholder="Search" aria-label="Search" id="domain_name">
                              <button class="btn bg-primary-clr text-white rounded-0 " type="submit">Search</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  
                  <div id="Domain-search-results">
                     <div class="domain_search_responce"></div> 
                     <div class="domain_search_default text-center">
                        <p><i class="fa fa-spinner fa-pulse text-black"></i> Searching...</p>
                     </div>
                  </div>
                  <!--multiple domain-->
                  <div class="row pt-2">
                    <div class="row spotlight_search_responce"></div>
                    <div class="row spotlight_search_default">
                        <div class="col-md-3">
                            <div class="spotlightcom text-center position-relative p-3">
                                <div class="spotlight-tld-hot">Hot</div>
                                <p class=" fw-bold mb-0"> .com </p>
                           <p class="com_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class=" fw-bold mb-0"> .ch</p>
                           <p class="ch_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <p class=" fw-bold mb-0"> .me </p>
                           <p class="me_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class="fw-bold mb-0"> .us </p>
                           <p class="us_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                        </div>
                     </div>
                    </div>
                  </div>
                  <!--suggested-domains-->
                  <div class="suggested-domains py-4">
                     <div class="panel-heading pb-2 px-2"> Suggested Domains</div>
                     <div class="suggestion_search_default text-center pt-3">
                        <p class="mb-0"><i class="fa fa-spinner fa-pulse text-black"></i>  Generating suggestions for you </p>
                     </div>
                     <div class="suggestion_search_responce"></div>
                  </div>
                    <div class="featured-tlds-container">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 col-xs-6">
                            <div class="featured-tld">
                            <div class="img-container">
                            <img src="/swissdomainvault/public/assets/images/com.png">
                            </div>
                            <div class="price com">
                            CHF15.97/yr                                                                                    
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <h4>Browse extensions by category</h4>
                    <div class="filters-sec">
                        
                        
                       <button  data-filter="Popular" class="badge badge-secondary" id="filterdata">Popular (25)</button>
                <button data-filter="Entertainment" class="badge badge-secondary">Arts and Entertainment
                    (9)</button>
                <button data-filter="Business" class="badge badge-secondary">Business (17)</button>
                <button data-filter="Geographic" class="badge badge-secondary">Geographic (23)</button>
                <button data-filter="Sports" class="badge badge-secondary">Sports (6)</button>
                <button data-filter="Technology" class="badge badge-secondary">Technology (16)</button>
                <button data-filter="Services" class="badge badge-secondary">Services (48)</button>
                <button data-filter="Money and Finance" class="badge badge-secondary">Money and Finance (10)</button>
                <button data-filter="Education" class="badge badge-secondary">Education (8)</button>
                <button data-filter="Food and Drink" class="badge badge-secondary">Food and Drink (8)</button>
                <button data-filter="Leisure and Recreation" class="badge badge-secondary">Leisure and Recreation
                    (16)</a>
                <button data-filter="Shopping" class="badge badge-secondary">Shopping (30)</button>
                <button data-filter="Real Estate" class="badge badge-secondary">Real Estate (7)</button>
                <button data-filter="Novelty" class="badge badge-secondary">Novelty (21)</button>
                <button data-filter="Other" class="badge badge-secondary">Other (98)</button>
                    </div>
                    
                    <div class="tld-pricing-header-cont">
                      <div class="row tld-pricing-header text-center">
                        	<div class="col-sm-4 no-bg">Domain</div>
                        	<div class="col-sm-8">
                        		<div class="row">
                        			<div class="col-4">New Price</div>
                        			<div class="col-4">Transfer</div>
                        			<div class="col-4">Renewal</div>
                        		</div>
                        	</div>
                        </div>
                        
                        
                        
                       <div class="bg-white">
                
                <div class="row no-gutters tld-row Popular"  data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 859.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 859.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.in</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.org</strong>
                        <span class="tld-sale-group tld-sale-group-hot">
                            Hot
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 689.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1149.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1149.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.live</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co.in</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.in.net</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.info</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.net</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.asia</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.biz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.us</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular||Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.xyz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 99.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ind.in</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.org.in</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular||Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.uk</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.uk</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.net.in</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.com.au</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 660.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 660.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 660.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.net.au</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 905.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 905.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 905.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co.uk</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ca</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.mobi</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.space</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 99.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.org.uk</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.world</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 240.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.eu</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 470.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 470.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 470.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.online</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.online</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rocks</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation||Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bid</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co.nz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fit</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.me</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business||Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.studio</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.loan</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Money and Finance">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.loan</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1900.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.academy</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.club</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.click</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 460.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 460.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 460.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Money and Finance">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.accountant</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.accountants</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6485.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6485.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6485.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.actor</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.adult</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6160.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6160.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6160.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.archi</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.airforce</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.amsterdam</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.army</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.associates</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.attorney</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.auction</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment||Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.audio</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 920.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 920.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 920.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Shopping">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.auto</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.auto</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.band</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic||Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bar</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bargains</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.beer</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.berlin</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3549.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.best</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 230.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 230.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 230.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bet</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 965.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 965.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 965.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bharat</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bike</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bio</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3830.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3830.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3830.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.black</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4199.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4199.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.blackfriday</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2630.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2630.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2630.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.blog</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.blog</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1939.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.blue</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.br.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.build</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.buzz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2670.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2670.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2670.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.bz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1559.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1559.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1559.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cam</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1989.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1989.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1989.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.camera</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.camp</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.capetown</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.car</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.career</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.career</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cars</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 193510.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.casa</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 533.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 533.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 533.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Money and Finance|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cash</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.casino</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9855.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9855.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9855.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cc</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.center</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.christmas</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.city</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1280.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cleaning</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cloud</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1549.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cn</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cn.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.co.de</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.coffee</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.college</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4305.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4305.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4305.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.com.de</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.com.mx</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.consulting</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cooking</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cool</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.country</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.coupons</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.courses</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2410.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2410.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2410.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Money and Finance|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.credit</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Money and Finance|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.creditcard</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9770.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9770.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9770.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports" data-category="|Sports|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cricket</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cymru</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1232.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1232.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1232.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.company</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.dance</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.date</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.de</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.degree</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.democrat</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.dentist</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.desi</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.design</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3285.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3285.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3285.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.diet</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.doctor</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.dog</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3130.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3130.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3130.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.download</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.download</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.download</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.durban</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.earth</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.email</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 240.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.email</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 240.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.energy</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.engineer</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.faith</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.family</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fans</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fashion</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.feedback</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fishing</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.flowers</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 9999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fm</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping||Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.forsale</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.fun</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.game</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 30249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 30249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 30249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.games</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.garden</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gb.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4784.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4784.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4784.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gb.net</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gdn</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gift</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gives</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.glass</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.global</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gmbh</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1959.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1959.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1959.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Money and Finance|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.gold</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.green</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.group</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.guitars</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.guru</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 240.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.haus</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.help</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.hiphop</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.horse</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.hospital</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3088.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3088.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3088.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.host</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.hosting</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.hosting</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.how</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1922.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1922.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1922.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.immobilien</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ink</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Money and Finance">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.investments</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.investments</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.irish</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.jetzt</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.jobs</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 11149.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 11149.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 11149.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.joburg</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.juegos</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 919.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 919.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 919.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.kaufen</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.kim</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.kitchen</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2184.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2184.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2184.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.kiwi</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.la</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.lat</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.lawyer</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.lgbt</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.life</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.link</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 710.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 710.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 710.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Money and Finance">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.loans</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.loans</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.lol</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.london</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2699.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.lotto</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 125049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 125049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 125049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.love</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ltd</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ltda</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.luxury</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 39415.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 39415.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 39415.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.market</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.markets</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.men</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.menu</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2549.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.miami</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1167.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1167.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1167.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.mn</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3699.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.moda</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.mom</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2404.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2404.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2404.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Money and Finance">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.mortgage</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.mortgage</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2955.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.nagoya</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 822.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 822.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 822.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.name</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.navy</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation||Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ninja</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1192.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1192.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1192.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.nl</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.nyc</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.nz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ooo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.org.mx</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1199.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1199.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1199.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.party</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pet</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.photo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.photography</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Arts and Entertainment">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.photography</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.physio</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5773.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5773.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5773.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pics</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pictures</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 699.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pink</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.plumbing</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.porn</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6161.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6161.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6161.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.press</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4930.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.promo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.property</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.protection</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 203049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 203049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 203049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink||Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pub</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pw</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.quebec</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.racing</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.red</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rehab</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Real Estate|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rent</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4230.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4230.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4230.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.republican</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Food and Drink">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rest</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rest</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2468.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.review</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.reviews</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rip</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1160.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1160.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1160.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.rodeo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ru</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 369.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 369.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 369.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sagathan</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1099.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sale</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1969.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sc</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7390.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7390.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 7390.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.science</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.security</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 198710.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 198710.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 198710.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sex</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sexy</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1313.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.shabaka</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.shiksha</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 989.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 989.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 989.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.shoes</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.shop</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 899.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.shopping</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1947.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1947.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1947.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular"  data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.site</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.site</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1891.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ski</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2660.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2660.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2660.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.social</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.software</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.solar</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.solutions</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.soy</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1810.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1810.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1810.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.srl</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3099.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3099.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.store</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3867.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3867.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3867.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.stream</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1930.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1930.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.study</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.surf</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sx</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.systems</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tattoo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tel</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.theatre</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 50499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 50499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 50499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tips</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tires</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6486.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tokyo</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 825.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 825.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 825.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tools</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.top</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.toys</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2185.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.trade</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.trading</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5949.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5949.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tube</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1935.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1935.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1935.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tv</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2349.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.today</strong>
                        <span class="tld-sale-group tld-sale-group-sale">
                            Sale
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 240.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1270.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1270.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.uk.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2849.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2849.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.uno</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.us.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.uy.com</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3159.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3159.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3159.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vc</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2466.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic||Leisure and Recreation|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vegas</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vet</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment" data-category="|Arts and Entertainment|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.video</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1482.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vip</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 969.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 969.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Food and Drink|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vodka</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.vote</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5049.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.voto</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4833.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4833.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4833.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Geographic" data-category="|Geographic|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.wales</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1233.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1233.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1233.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.wang</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 739.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 739.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 739.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.webcam</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.website</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.wedding</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.wiki</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1890.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1890.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1890.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.win</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1970.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.work</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 649.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.works</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ws</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1499.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.xxx</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6450.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6450.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 6450.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Sports">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.yoga</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1921.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1921.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1921.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.zone</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1960.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ae</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2400.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2400.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2400.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Education|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.education</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1550.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1550.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1550.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.io</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4900.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4900.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tech</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3620.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3620.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3620.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.support</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.health</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 5999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Entertainment Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.news</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Entertainment Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.news</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1399.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pro</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 399.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1249.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.delivery</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3355.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3355.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3355.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.sg</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2345.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2345.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2345.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.com.ph</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4548.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4548.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 4548.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.id</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3532.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3532.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3532.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Business" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.limited</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2055.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2055.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2055.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Novelty|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.one</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 749.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Popular" data-category="|Popular|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.tk</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 599.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 599.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Business|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.enterprises</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1899.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1899.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Shopping|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.jewelry</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3299.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 3299.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.cz</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.es</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 549.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 549.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.ai</strong>
                        <span class="tld-sale-group tld-sale-group-new">
                            New
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 8799.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row Services">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.app</strong>
                        <span class="tld-sale-group tld-sale-group-new">
                            New
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row no-gutters tld-row Technology">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.app</strong>
                        <span class="tld-sale-group tld-sale-group-new">
                            New
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1999.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.pl</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters tld-row" data-category="|Other|">
                    <div class="col-md-4 two-row-center px-4">
                        <strong>.it</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 1449.00<br>
                                <small>1 Year</small>
                            </div>
                            <div class="col-xs-4 col-4 text-center">
                                Rs 2449.00<br>
                                <small>1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
                    </div>
                 <!--add web hosting block-->
                   <div class="row">
                     <div class="col-md-12">
                        <div class="panel-footer more-suggestions text-center">
                           <p class="fs-11"> Domain name suggestions may not always be available. Availability is checked in real-time at the point of adding to the cart.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="promo-domain-box p-4 h-100">
                           <div class="domain-promo-box d-flex justify-content-between">
                              <div class="domain-promo-box-content">
                                 <h4 class="mb-0">Add Web Hosting</h4>
                                 <p class="warning-text">Choose from a range of web hosting packages</p>
                              </div>
                              <div class="domain-promo-box-icon">
                                 <i class="fa fa-server fa-4x" aria-hidden="true"></i>
                              </div>
                           </div>
                           <p class="mb-2">We have packages designed to fit every budget</p>
                           <a href="{{ url('hosting-service?slug=wordpress-hosting') }}" class="btn warning-btn text-white fs-14 rounded-0">Explore packages now</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="promo-domain-box p-4 h-100">
                           <div class="domain-promo-box d-flex justify-content-between">
                              <div class="domain-promo-box-content">
                                 <h4 class="mb-0">Transfer your domain to us</h4>
                                 <p class="primary-clr">Transfer now to extend your domain by 1 year!*</p>
                              </div>
                              <div class="domain-promo-box-icon">
                                 <i class="fa fa-globe fa-4x" aria-hidden="true"></i>
                              </div>
                           </div>
                           <a href="{{ url('/cart?a=add&domain=transfer') }}" class="btn primary-btn text-white fs-14 rounded-0">Transfer a domain</a>
                           <p class="small pt-2">* Excludes certain TLDs and recently renewed domains</p>
                        </div>
                     </div>
                  </div>
                  
                  
               </div>
               
               <!--right block-->
               <div class="col-md-3">
                    @include('sidebar.right-sidebar')
               </div>
             </div>
           </div>
         </div>
       </div>
   </section>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$( document ).ready(function() {
    $('#filterdata').addClass('first active1');
      $(".Popular").css("display","flex");
});
    $(function(){
  
  var filters = {};
  
  initializeFilters();
  
  function initializeFilters(){

    applyFilters();
    
     filters[$(this).data('filter')] = true;

    $('[data-filter]').on('click', function(event) {
        
      var allkey =  $(this).attr('class');
      // alert($(this).data('filter'));
     // var firstkey= $(this).attr('class');
      if(allkey == "badge badge-secondary first active1"){
        
        $(".first").removeClass("first active1")
         $(".Popular").css("display","none");

      }else{
          
            filters[$(this).data('filter')] = !filters[$(this).data('filter')];
            $(this).toggleClass('active1');
            applyFilters();
            
            
      }
        
    var numItems = $('.active1').length;
    
    if(numItems == 0){
        $(".tld-row").css("display","none");
    }
    });
  };
   
       
  
  function applyFilters(){
      
    var showSelector = [];
    var hideSelector = [];
    
    for (var key in filters) {
    
      if (filters.hasOwnProperty(key)) {
        if(filters[key]) {
          showSelector.push('.'+key);
        }
        else {
          hideSelector.push('.'+key);
        }
      }
    }
   
    if(showSelector !='' ) { 
      $('div').filter(showSelector.join(', ')).slideDown();
    }
    
    if(hideSelector !='' ) { 
      $('div').filter(hideSelector.join(', ')).slideUp();
    }
  }
   
});
</script>


@endsection