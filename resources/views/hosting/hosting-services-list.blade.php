@extends('layouts.master') 
@section('content')
  <!--banner inner section-->
    <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> Shopping Cart </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>
    
 <!--shopping content section-->
  <section class="shopping-content-section py-5">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 py-4">
				<div class="title pb-5 border-bottom">
					<h5 class="mb-0 fw-bold">Shopping Cart  <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> </h5> </div>
			</div>
          </div>
          <div class="row">
             <!--left block-->
    			<div class="col-md-10 left-block-side">
    			 <div class="col-md-12">
    			     @if(count($hosting_service) >= 1)
    			     <div class="shoping-heading-text text-center py-4">
    			        <h4 class="fw-bold"> {{ $hosting_service[0]->name }}</h4>
    			         @php echo $hosting_service[0]->short_desc; @endphp
    			       @endif
    			     </div>
    			    </div>
    			    <div class="row">
    			       @if(count($hosting_service[0]->serviceList) >= 1)
    			        @foreach($hosting_service[0]->serviceList as $service)
    			        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 border-design-bottom position-relative">
    			            <div class="pricing-table-product text-center p-5 @if($service->is_popular == "Yes") most-popular @endif">
    			                <h4 class="fw-bold mb-0"> {{ $service->name }} </h4>
    			                <div class="price py-3"><span class="fw-bold price-plain">CHF{{ $service->price }}</span> /month <br> <!--<small> CHF3.99 Setup Fee</small>--></div>
    			                @php echo $service->short_desc; @endphp
								@if($service->is_popular == "Yes")
								<div class="sticker-wrapper">
                                    <div class="sticker text-uppercase text-white fw-bold text-center"> Most Popular </div>
                                </div>
                                @endif
							 <a href="{{ url('cart?a=add&pid='.$service->id) }}" class="btn main-button text-white rounded-0 mt-3"> Order Now </a>
    			            </div>
    			        </div>
    			         @endforeach
    			         @else
    			         <div class="col-xl-12">
    			             <h3 class="text-center">No hosting service found!</h3>
    			         </div>
    			        @endif
    			    </div>
    			</div>
    		    <!--right block-->
                <div class="col-md-2">
                   @include('sidebar.right-sidebar')
                </div>
          </div>
      </div>
  </section>
@endsection