<div class="shoping-heading-text text-center py-4">
   <h4 class="fw-bold"> Review & Checkout </h4>
    @if (session('success'))
      <p class="msg-success">{{ session('success') }}</p>
    @endif
    @if (session('unsuccess'))
        <p class="msg-unsuccess">{{ session('unsuccess') }}</p>
    @endif
</div>
<div class="row">
	<div class="col-md-12 col-lg-8">
      <div class="add-item-product">
         <div class="Product-Options-header d-flex justify-content-between bg-primary-clr px-4 py-2 text-white">
            <P class="mb-0"> Product/Options</P>
            <P class="mb-0 pe-5"> Price/Cycle </p>
         </div>
         @php 
            $total_sub_total = 0;  
            $total_grand_total = 0;  
         @endphp
          @if(Session::get('cart'))  
            @foreach(Session::get('cart') as $key => $cart)
            @php $domain_data = $cart['domain_data']; @endphp
             <div class="view-cart-items py-3 px-3">
                <div class="row">
                   <div class="col-md-7">
                      <div class="item-detail d-md-grid">
                          @if($domain_data['domain_register_type'] == "hosting")
                             <h6 class="item-title mb-1 fw-bold"> {{ $domain_data['service_name'] }}
                                    <a href="{{ url('cart?a=confdomains') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                </h6>
                                <span>{{ $domain_data['service_category'] }}</span>
                                <br>
                            @else
                                <h6 class="item-title mb-1 fw-bold"> Domain Registration 
                                    <a href="{{ url('cart?a=confdomains') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                </h6>
                         </h6>
                            @endif
                         <span class="item-domain primary-clr">
                            @php
                                //price 
                                $Price = $domain_data['domain_price'];
                                $domain_item_price = number_format((float)$Price, 2, '.', '');
                                $total_sub_total += $domain_item_price;
                                $total_grand_total += $domain_item_price;
                                echo $domain_data['domain_name'];
                            @endphp
                        </span>
                        @if($domain_data['dnsmanagement'])
                        <span class="item-additnal">
                            >>{{ $domain_data['dnsmanagement'] }}
                        </span>
                        @endif
                        @if($domain_data['idprotection'])
                        <span class="item-additnal">
                            >>{{ $domain_data['idprotection'] }}
                        </span>
                        @endif
                        @if($domain_data['emailforwarding'])
                        <span class="item-additnal">
                            >>{{ $domain_data['emailforwarding'] }}
                        </span>
                        @endif
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="item-price text-end position-relative">
                         <h6 class="fw-bold mb-0"> CHF{{ $domain_item_price; }} </h6>
                         <small class="cycle">1 Year</small> <br>
                         <small> Renewal CHF{{ $domain_item_price; }}/1yr </small>
                      </div>
                   </div>
                   <div class="col-md-1">
                      <div class="cross-btn text-center"> <a href="{{ url('remove-cart-item',$key) }}"><i class="fa fa-times color-primary" aria-hidden="true"></i></a> </div>
                   </div>
                </div>
             </div>
            @endforeach
            <div class="empty-cart bg-primary-clr text-end">
                <a href ="{{ url('remove-cart') }}" class="btn main-button text-white btn-sm pe-5">  <i class="fa fa-trash-o" aria-hidden="true"></i> Empty Cart </a>
            </div>
        @else 
            <div class="view-cart-items py-3 px-3">
                <div class="row">
                   <div class="col-md-12">
                      <div class="item-detail">
                         <h6 class="item-title mb-1 fw-bold"> Your Shopping Cart is Empty</h6>
                      </div>
                   </div>
                </div>
            </div>
        @endif
      </div>
      <div class="Promo-Code py-5">
         <h6 class="fw-bold py-2"> Apply Promo Code </h6>
         <form>
            <div class="mb-3">
               <input type="text" class="form-control" id="inputPromotionCode" placeholder="Enter promo code if you have one" required="required">
            </div>
            <div class="Validate-Code-btn ">
               <button class="btn main-button text-white btn-sm">  Validate Code </button>
            </div>
         </form>
      </div>
   </div>
   <div class="col-lg-4 col-md-12">
      <div class="Order-Summary bg-primary-clr text-white  rounded-3 position-relative">
         <div class="Order-Summary-header p-3">
            <h5>Order Summary</h5>
         </div>
         @if(Session::get('cart'))   
             <div class="order-summary-body p-3">
                <div class="subtotal-order d-flex justify-content-between border-bottom pb-2">
                   <span>Subtotal</span>
                   <span id="subtotal">CHF{{ $total_sub_total }}</span>
                </div>
                <div class="subtotal-order d-flex justify-content-between pt-2">
                   <span>Totals</span>
                   <span id="subtotal">CHF{{ $total_sub_total }} Annually</span>
                </div>
                <div class="total-due-today text-end py-4">
                   <h5 class="fw-bold mb-0 color-primary"> CHF{{ $total_grand_total }} </h5>
                   <small class="cycle">Total Due Today</small>
                </div>
             </div>
             <div class="continue-shopping-btn text-end p-3">
                <a href ="{{ url('/cart') }}" class="btn text-white btn-sm fs-14 text-decoration-underline pb-2"> Continue Shopping <i class="fa fa-angle-double-right ps-1" aria-hidden="true"></i> </a>
             </div>
             <div class="check-out-btn text-end w-100">
                <a href="{{ url('cart?a=checkout&e=false') }}" class="btn btn-success text-white w-100"> Checkout <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i> </a>
            </div>
         @else
            <div class="order-summary-body p-3">
                <div class="subtotal-order d-flex justify-content-between border-bottom pb-2">
                   <span>Subtotal</span>
                   <span id="subtotal">CHF0.00</span>
                </div>
                <div class="subtotal-order d-flex justify-content-between pt-2">
                   <span>Totals</span>
                   
                </div>
                <div class="total-due-today text-end py-4">
                   <h5 class="fw-bold mb-0 color-primary">CHF0.00</h5>
                   <small class="cycle">Total Due Today</small>
                </div>
             </div>
             <div class="continue-shopping-btn text-end p-3">
                <a href ="{{ url('/cart') }}" class="btn text-white btn-sm fs-14 text-decoration-underline pb-2"> Continue Shopping <i class="fa fa-angle-double-right ps-1" aria-hidden="true"></i> </a>
             </div>
             <div class="check-out-btn text-end w-100">
                <button class="btn btn-success text-white w-100 disabled"> Checkout <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i> </button>
             </div>
         @endif 
      </div>
   </div> 
</div> 