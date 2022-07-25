<div class="conf-domains">
    @if(Session::get('cart'))
    <div class="shoping-heading-text text-center py-4">
      <h4 class="fw-bold"> Domains Configuration</h4>
    </div>
    <div class="shoping-heading-text text-center pb-4">
      <h6 class=""> Please review your domain name selections and any addons that are available for them.</h6>
    </div>
    <form method="POST" action="{{ route('submit.domain.configure') }}" enctype="multipart/form-data">
        @csrf
        @foreach(Session::get('cart') as $key => $cart)
        @php $domain_data = $cart['domain_data']; @endphp
        @if($domain_data['domain_register_type'] == "domain") 
        <div class="host-details pb-2 "> 
          <div class="shoping-heading-text text-center py-2 bg-primary-clr">
             <h5 class="fw-bold domain-name text-light">{{ $domain_data['domain_name']; }}</h5>
          </div>
          <div class="registration-period  ">
             <div class="registration d-flex justify-content-center py-3 border-bottom  ">
                <h6>
                   Registration Period 
                </h6>
                <h6 class="ms-5">1 Year/s</h6>
             </div>
             <div class="host d-flex justify-content-center py-3 border-bottom ">
                <h6 class="me-5">
                   Hosting 
                </h6>
                @if($domain_data['is_hosting'] == "Yes") 
                    <h6 class="ms-5 text-success">[Has Hosting]</h6>
                @else
                    <h6 class="ms-5"><a class="text-danger" href="{{ url('cart') }}">[No Hosting! Click to Add]</a></h6>
                @endif
             </div>
          </div>
          <div class="row">
             <div class="col-md-4 @if($domain_data['dnsmanagement']) remove_addon_cart @else add_addon_cart @endif">
                <div class="host-1">
                   <label class="d-flex justify-content-center border-bottom py-2 addon_cart @if($domain_data['dnsmanagement']) bg-green @else bg-orange @endif">
                      <div class="icheckbox_square-blue me-3" >
                          <input type="checkbox" name="dnsmanagement[]" value="{{ $domain_data['domain_name']; }}" class="cart_checkbox_val" @if($domain_data['dnsmanagement']) checked @endif> 
                      </div>
                      <span class="text-light" > DNS Management </span>
                   </label>
                   <p class="text-center py-3  mb-0">External DNS Hosting can help speed up your website and improve availability with increased redundancy.</p>
                   <div class="domain-price text-center py-2 bg-dark text-light">
                      <h6 class="mb-0">
                         CHF9.95 / 1 Year/s
                      </h6>
                   </div>
                   <div class="domain-cart text-center py-2 text-light addon_cart addon_cart_text @if($domain_data['dnsmanagement']) bg-green @else bg-orange @endif">
                      <i class="fa fa-plus me-2"></i>Add to Cart
                   </div>
                </div>
             </div>
             <div class="col-md-4 @if($domain_data['idprotection']) remove_addon_cart @else add_addon_cart @endif">
                <div class="host-1">
                   <label class="d-flex justify-content-center border-bottom py-2 addon_cart @if($domain_data['idprotection']) bg-green @else bg-orange @endif">
                      <div class="icheckbox_square-blue me-3" >
                          <input type="checkbox" name="idprotection[]" value="{{ $domain_data['domain_name']; }}" class="cart_checkbox_val" @if($domain_data['idprotection']) checked @endif>
                      </div>
                      <span class="text-light" > 
                      ID Protection
                      </span>
                   </label>
                   <p class="text-center py-3  mb-0">
                      Protect your personal information and reduce the amount of spam to your inbox by enabling ID Protection.
                   </p>
                   <div class="domain-price text-center py-2 bg-dark text-light">
                      <h6 class="mb-0 ">
                         CHF12.95 / 1 Year/s
                      </h6>
                   </div>
                   <div class="domain-cart text-center py-2 text-light addon_cart addon_cart_text @if($domain_data['idprotection']) bg-green @else bg-orange @endif">
                      <i class="fa fa-plus me-2"></i>
                      Add to Cart
                   </div>
                </div>
             </div> 
             <div class="col-md-4 @if($domain_data['emailforwarding']) remove_addon_cart @else add_addon_cart @endif">
                <div class="host-1">
                   <label class="d-flex justify-content-center border-bottom py-2  addon_cart @if($domain_data['emailforwarding']) bg-green @else bg-orange @endif">
                      <div class="icheckbox_square-blue me-3" ><input type="checkbox" name="emailforwarding[]" value="{{ $domain_data['domain_name']; }}" class="cart_checkbox_val" @if($domain_data['emailforwarding']) checked @endif>
                      </div>
                      <span class="text-light" > Email Forwarding </span>
                   </label>
                   <p class="text-center py-3  mb-0">
                      Get emails forwarded to alternate email addresses of your choice so that you can monitor all from a single account.
                   </p>
                   <div class="domain-price text-center py-2 bg-dark text-light">
                      <h6 class="mb-0 ">
                         CHF4.99 / 1 Year/s
                      </h6>
                   </div>
                   <div class="domain-cart text-center py-2 text-light addon_cart addon_cart_text @if($domain_data['emailforwarding']) bg-green @else bg-orange @endif">
                      <i class="fa fa-plus me-2"></i>
                      Add to Cart
                   </div>
                </div>
             </div>
          </div>
        </div>
        @endif
        @endforeach
       <div class="name-servers my-5">
          <div class="shoping-heading-text text-center ">
             <h4 class="fw-bold"> Nameservers</h4>
          </div>
          <div class="shoping-heading-text text-center pb-4">
             <h6 class="">If you want to use custom nameservers then enter them below. By default, new domains will use our nameservers for hosting on our network.</h6>
          </div>
          <div class="domain-form d-flex ">
             <div class="form me-3">
                <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Nameserver 1</label>
                   <input type="text" name="nameserver1" class="form-control" value="ns.sourcedns.com" id="formGroupExampleInput" >
                </div>
             </div>
             <div class="form me-3">
                <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Nameserver 2</label>
                   <input type="text" name="nameserver2" class="form-control" value="ns1.sourcedns.com" id="formGroupExampleInput" >
                </div>
             </div>
             <div class="form me-3">
                <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Nameserver 3</label>
                   <input type="text" name="nameserver3" class="form-control" id="formGroupExampleInput" >
                </div>
             </div>
          </div>
          <div class="domain-form d-flex  mt-4">
             <div class="form me-3">
                <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Nameserver 4</label>
                   <input type="text" name="nameserver4" class="form-control" id="formGroupExampleInput" >
                </div>
             </div>
             <div class="form me-3">
                <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Nameserver 5</label>
                   <input type="text" name="nameserver5" class="form-control" id="formGroupExampleInput" >
                </div>
             </div>
             <div class="form me-3">
             </div>
          </div>
          <button type="submit" class="btn main-button text-white rounded-0 mt-3">Continue  <i class="fa fa-arrow-circle-right ms-2"></i></button>
       </div>
   </form>
   @else 
        <script>window.location = base_url+"/cart?a=view";</script>
   @endif
</div>