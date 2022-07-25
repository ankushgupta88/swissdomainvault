@if(Session::get('domain_name') && Session::get('p_service_id'))
<div class="shoping-heading-text text-center py-4">
   <h4 class="fw-bold"> Configure</h4>
    @if (session('success'))
      <p class="msg-success">{{ session('success') }}</p>
    @endif
    @if (session('unsuccess'))
        <p class="msg-unsuccess">{{ session('unsuccess') }}</p>
    @endif
</div>
@if($service)
<form method="POST" action="#" enctype="multipart/form-data" id="submit_hositng_cart"> 
     @csrf
    <input type="hidden" name="p_service_id" value="{{ Session('p_service_id') }}">
    <input type="hidden" name="domain_name" value="{{ Session('domain_name') }}">
    <div class="row"> 
        @php 
            $price = $service['price'];
            $service_price = number_format((float)$price, 2, '.', '');
            $sub_total = $service_price;
            $cal_monthly_amount = $service_price/12;
            $monthly_amount = number_format((float)$cal_monthly_amount, 2, '.', '');
        @endphp
        <div class="col-md-12 col-lg-8">
            <div class="add-item-product">
                 <div class="Product-Options-header d-flex justify-content-between bg-primary-clr px-4 py-2 text-white">
                    <P class="mb-0"> Configure your desired options and continue to checkout.</P>
                 </div>
                 <div class="view-cart-items py-3 px-3">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="item-detail d-grid">
                             <h6 class="item-title mb-1 fw-bold"> {{ $service['name']; }}
                             </h6>
                             @php echo $service['short_desc']; @endphp
                          </div>
                       </div>
                    </div>
                 </div>
                 <!--empty cart-->
              </div>
              <div class="Promo-Code py-5">
                 <h6 class="fw-bold py-2"> Choose Billing Cycle</h6>
                    <div class="mb-3">
                       <select class="form-select" aria-label="Default select example">
                          <option selected>1 Month Price - CHF12.00 (Free Domain)</option>
                          <option value="1"> 12 Month Price - CHF12.00</option>
                       </select>
                    </div>
                    <div class="Validate-Code-btn ">
                       <button class="btn main-button text-white btn-sm">  Validate Code </button>
                    </div>
              </div>
              <div class="question-div py-2">
                 <p class="text-center mb-0 text-light"> Have questions? Contact our sales team for assistance. <a href="{{ url('contact') }}" class="text-light">Click here</a></p>
              </div>
       </div>
       <div class="col-lg-4 col-md-12">
          <div class="Order-Summary bg-primary-clr text-white  rounded-3 position-relative">
                <div class="Order-Summary-header p-3">
                    <h5>Order Summary</h5>
                </div>
                <div class="order-summary-body p-3">
                    <div class="subtotal-order d-grid justify-content-between  pb-2">
                       <span class=" fw-bold">{{ $service['name']; }}</span>
                       <span class="fst-italic host-span">{{ $service->categoryDetails->name }}</span>
                    </div>
                    <div class="hosting-package border-bottom d-flex justify-content-between pb-2">
                       <span class=" host-span">{{ $service['name']; }}</span>
                       <span class="host-span">CHF{{ $service_price; }}</span>
                    </div>
                    <div class="hosting-package  d-flex justify-content-between pt-2">
                       <span class="host-span ">Setup Fees:</span>
                       <span class="host-span">CHF0.00</span>
                    </div>
                    <div class="hosting-package border-bottom d-flex justify-content-between pb-2">
                       <span class=" host-span">Monthly:</span>
                       <span class="host-span">CHF{{ $monthly_amount }}</span>
                    </div>
                    <div class="total-due-today text-end py-4">
                       <h5 class="fw-bold mb-0 color-primary">CHF{{ $sub_total }}</h5>
                       <small class="cycle">Total Due Today</small>
                    </div>
                 </div>
                 <div class="check-out-btn text-end w-100">
                     <button class="btn btn-success text-white w-100 submit_button">Continue <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i></button>
                     <div class="hosting_cart_responce"></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endif
@else
    <script>window.location = base_url+"/cart";</script>
@endif