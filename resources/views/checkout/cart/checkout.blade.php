<div class="conf-domains checkout-page">
   @if(Session::get('cart'))
   <div class="shoping-heading-text text-center py-4">
      <h4 class="fw-bold"> Checkout</h4>
   </div>
   <div class="shoping-heading-text  pb-4 d-flex align-items-center justify-content-between">
      <h6 class=""> Please enter your personal details and billing information to checkout.</h6>
      @if (Auth::check()) @else
      <a href="{{ url('register') }}" class="btn main-button text-white rounded-0 ">Already Registered?</a>
      @endif
   </div>
   <div class="name-servers mt-4">
      <div id="registration">
          
          @php $total_grand_total = 0;  @endphp
            @if(Session::get('cart'))
                @foreach(Session::get('cart') as $key => $cart)
                    @php $domain_data = $cart['domain_data']; 
                        //price 
                        $Price = $domain_data['domain_price'];
                        $domain_item_price = number_format((float)$Price, 2, '.', '');
                        $total_grand_total += $domain_item_price;
                    @endphp
                @endforeach
            @endif
            
         <form method="POST" action="#" enctype="multipart/form-data" id="submit_checkout">
            @csrf 
            <input type="hidden" name="grand_total" value="{{ $total_grand_total }}">
            <div class="new-user-signup">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Personal Information</h5>
               </div>
            </div>
            @if($user_info)
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3"> 
                     <label for="first_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
                     <input type="text" name="first_name" value="{{ $user_info->first_name }}" id="first_name" class="field form-control rounded-0 py-2 " placeholder="First Name" autofocus="" disabled> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="last_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
                     <input type="text" name="last_name" value="{{ $user_info->last_name }}" id="last_name" class="field form-control rounded-0 py-2 " placeholder="Last Name" autofocus="" disabled> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="inputFirstName" class="field-icon text-center"> <i class="fa fa-envelope"></i> </label>
                     <input type="email" name="email" id="email" class="field form-control rounded-0 py-2 @error('email') is-invalid @enderror" value="{{ $user_info->email }}" placeholder="Email Address" autofocus="" disabled> 
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="phonenumber" class="field-icon text-center"> <i class="fa fa-phone"></i> </label>
                     <input type="text" name="mobile" id="mobile" class="field form-control rounded-0 py-2 " placeholder="Phone Number" value="{{ $user_info->mobile }}" autofocus="" maxlength="10" disabled> 
                  </div>
               </div>
            </div>
            <div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Billing Address</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="companyname" class="field-icon text-center"> <i class="fa fa-building"></i> </label>
                        <input type="text" name="companyname" value="{{ $user_info->companyname }}" id="companyname" class="field form-control rounded-0 py-2" placeholder="Company Name (Optional)" autofocus="" disabled> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="address" class="field-icon text-center"> <i class="fa fa-building-o"></i> </label>
                        <input type="text" name="address" id="address" class="field form-control rounded-0 py-2" value="{{ $user_info->address }}" placeholder="Street Address" autofocus="" disabled> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="address_two" class="field-icon text-center"> <i class="fa fa-map-marker"></i> </label>
                        <input type="text" name="address_two" value="{{ $user_info->address_two }}" id="address_two" class="field form-control rounded-0 py-2" placeholder="Street Address 2" autofocus="" disabled> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="city" class="field-icon text-center"> <i class="fa fa-building-o"></i> </label>
                        <input type="text" name="city" id="city" class="field form-control rounded-0 py-2" placeholder="City" value="{{ $user_info->city }}" autofocus="" disabled> 
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="state" class="field-icon text-center"> <i class="fa fa-map-signs"></i> </label>
                        <input type="text" name="state" id="state" class="field form-control rounded-0 py-2" placeholder="State" value="{{ $user_info->state }}" autofocus="" disabled> 
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <input type="text" name="postcode" id="postcode" class="field form-control rounded-0 py-2" placeholder="Postcode" value="{{ $user_info->postcode }}" autofocus="" maxlength="6" onkeypress="return onlyNumber(event)" disabled> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="country" class="field-icon text-center"> <i class="fa fa-globe"></i> </label>
                        <select id="country" name="country" class="field form-control rounded-0">
                           <option value="AF" @if($user_info->country == "AF") selected @endif > Afghanistan </option>
                           <option value="AX"> Aland Islands </option>
                           <option value="AL"> Albania </option>
                           <option value="DZ"> Algeria </option>
                           <option value="AS"> American Samoa </option>
                           <option value="AD"> Andorra </option>
                           <option value="AO"> Angola </option>
                           <option value="AI"> Anguilla </option>
                           <option value="AQ"> Antarctica </option>
                           <option value="AG"> Antigua And Barbuda </option>
                           <option value="AR"> Argentina </option>
                           <option value="AM"> Armenia </option>
                           <option value="AW"> Aruba </option>
                           <option value="AU"> Australia </option>
                           <option value="AT"> Austria </option>
                           <option value="AZ"> Azerbaijan </option>
                           <option value="BS"> Bahamas </option>
                           <option value="BH"> Bahrain </option>
                           <option value="BD"> Bangladesh </option>
                           <option value="BB"> Barbados </option>
                           <option value="BY"> Belarus </option>
                           <option value="BE"> Belgium </option>
                           <option value="BZ"> Belize </option>
                           <option value="BJ"> Benin </option>
                           <option value="BM"> Bermuda </option>
                           <option value="BT"> Bhutan </option>
                           <option value="BO"> Bolivia </option>
                           <option value="BA"> Bosnia And Herzegovina </option>
                           <option value="BW"> Botswana </option>
                           <option value="BR"> Brazil </option>
                           <option value="IO"> British Indian Ocean Territory </option>
                           <option value="BN"> Brunei Darussalam </option>
                           <option value="BG"> Bulgaria </option>
                           <option value="BF"> Burkina Faso </option>
                           <option value="BI"> Burundi </option>
                           <option value="KH"> Cambodia </option>
                           <option value="CM"> Cameroon </option>
                           <option value="CA"> Canada </option>
                           <option value="CV"> Cape Verde </option>
                           <option value="KY"> Cayman Islands </option>
                           <option value="CF"> Central African Republic </option>
                           <option value="TD"> Chad </option>
                           <option value="CL"> Chile </option>
                           <option value="CN"> China </option>
                           <option value="CX"> Christmas Island </option>
                           <option value="CC"> Cocos (Keeling) Islands </option>
                           <option value="CO"> Colombia </option>
                           <option value="KM"> Comoros </option>
                           <option value="CG"> Congo </option>
                           <option value="CD"> Congo, Democratic Republic </option>
                           <option value="CK"> Cook Islands </option>
                           <option value="CR"> Costa Rica </option>
                           <option value="CI"> Cote D'Ivoire </option>
                           <option value="HR"> Croatia </option>
                           <option value="CU"> Cuba </option>
                           <option value="CW"> Curacao </option>
                           <option value="CY"> Cyprus </option>
                           <option value="CZ"> Czech Republic </option>
                           <option value="DK"> Denmark </option>
                           <option value="DJ"> Djibouti </option>
                           <option value="DM"> Dominica </option>
                           <option value="DO"> Dominican Republic </option>
                           <option value="EC"> Ecuador </option>
                           <option value="EG"> Egypt </option>
                           <option value="SV"> El Salvador </option>
                           <option value="GQ"> Equatorial Guinea </option>
                           <option value="ER"> Eritrea </option>
                           <option value="EE"> Estonia </option>
                           <option value="ET"> Ethiopia </option>
                           <option value="FK"> Falkland Islands (Malvinas) </option>
                           <option value="FO"> Faroe Islands </option>
                           <option value="FJ"> Fiji </option>
                           <option value="FI"> Finland </option>
                           <option value="FR"> France </option>
                           <option value="GF"> French Guiana </option>
                           <option value="PF"> French Polynesia </option>
                           <option value="TF"> French Southern Territories </option>
                           <option value="GA"> Gabon </option>
                           <option value="GM"> Gambia </option>
                           <option value="GE"> Georgia </option>
                           <option value="DE"> Germany </option>
                           <option value="GH"> Ghana </option>
                           <option value="GI"> Gibraltar </option>
                           <option value="GR"> Greece </option>
                           <option value="GL"> Greenland </option>
                           <option value="GD"> Grenada </option>
                           <option value="GP"> Guadeloupe </option>
                           <option value="GU"> Guam </option>
                           <option value="GT"> Guatemala </option>
                           <option value="GG"> Guernsey </option>
                           <option value="GN"> Guinea </option>
                           <option value="GW"> Guinea-Bissau </option>
                           <option value="GY"> Guyana </option>
                           <option value="HT"> Haiti </option>
                           <option value="HM"> Heard Island &amp; Mcdonald Islands </option>
                           <option value="VA"> Holy See (Vatican City State) </option>
                           <option value="HN"> Honduras </option>
                           <option value="HK"> Hong Kong </option>
                           <option value="HU"> Hungary </option>
                           <option value="IS"> Iceland </option>
                           <option value="IN"> India </option>
                           <option value="ID"> Indonesia </option>
                           <option value="IR"> Iran, Islamic Republic Of </option>
                           <option value="IQ"> Iraq </option>
                           <option value="IE"> Ireland </option>
                           <option value="IM"> Isle Of Man </option>
                           <option value="IL"> Israel </option>
                           <option value="IT"> Italy </option>
                           <option value="JM"> Jamaica </option>
                           <option value="JP"> Japan </option>
                           <option value="JE"> Jersey </option>
                           <option value="JO"> Jordan </option>
                           <option value="KZ"> Kazakhstan </option>
                           <option value="KE"> Kenya </option>
                           <option value="KI"> Kiribati </option>
                           <option value="KR"> Korea </option>
                           <option value="KW"> Kuwait </option>
                           <option value="KG"> Kyrgyzstan </option>
                           <option value="LA"> Lao People's Democratic Republic </option>
                           <option value="LV"> Latvia </option>
                           <option value="LB"> Lebanon </option>
                           <option value="LS"> Lesotho </option>
                           <option value="LR"> Liberia </option>
                           <option value="LY"> Libyan Arab Jamahiriya </option>
                           <option value="LI"> Liechtenstein </option>
                           <option value="LT"> Lithuania </option>
                           <option value="LU"> Luxembourg </option>
                           <option value="MO"> Macao </option>
                           <option value="MK"> Macedonia </option>
                           <option value="MG"> Madagascar </option>
                           <option value="MW"> Malawi </option>
                           <option value="MY"> Malaysia </option>
                           <option value="MV"> Maldives </option>
                           <option value="ML"> Mali </option>
                           <option value="MT"> Malta </option>
                           <option value="MH"> Marshall Islands </option>
                           <option value="MQ"> Martinique </option>
                           <option value="MR"> Mauritania </option>
                           <option value="MU"> Mauritius </option>
                           <option value="YT"> Mayotte </option>
                           <option value="MX"> Mexico </option>
                           <option value="FM"> Micronesia, Federated States Of </option>
                           <option value="MD"> Moldova </option>
                           <option value="MC"> Monaco </option>
                           <option value="MN"> Mongolia </option>
                           <option value="ME"> Montenegro </option>
                           <option value="MS"> Montserrat </option>
                           <option value="MA"> Morocco </option>
                           <option value="MZ"> Mozambique </option>
                           <option value="MM"> Myanmar </option>
                           <option value="NA"> Namibia </option>
                           <option value="NR"> Nauru </option>
                           <option value="NP"> Nepal </option>
                           <option value="NL"> Netherlands </option>
                           <option value="AN"> Netherlands Antilles </option>
                           <option value="NC"> New Caledonia </option>
                           <option value="NZ"> New Zealand </option>
                           <option value="NI"> Nicaragua </option>
                           <option value="NE"> Niger </option>
                           <option value="NG"> Nigeria </option>
                           <option value="NU"> Niue </option>
                           <option value="NF"> Norfolk Island </option>
                           <option value="MP"> Northern Mariana Islands </option>
                           <option value="NO"> Norway </option>
                           <option value="OM"> Oman </option>
                           <option value="PK"> Pakistan </option>
                           <option value="PW"> Palau </option>
                           <option value="PS"> Palestine, State of </option>
                           <option value="PA"> Panama </option>
                           <option value="PG"> Papua New Guinea </option>
                           <option value="PY"> Paraguay </option>
                           <option value="PE"> Peru </option>
                           <option value="PH"> Philippines </option>
                           <option value="PN"> Pitcairn </option>
                           <option value="PL"> Poland </option>
                           <option value="PT"> Portugal </option>
                           <option value="PR"> Puerto Rico </option>
                           <option value="QA"> Qatar </option>
                           <option value="RE"> Reunion </option>
                           <option value="RO"> Romania </option>
                           <option value="RU"> Russian Federation </option>
                           <option value="RW"> Rwanda </option>
                           <option value="BL"> Saint Barthelemy </option>
                           <option value="SH"> Saint Helena </option>
                           <option value="KN"> Saint Kitts And Nevis </option>
                           <option value="LC"> Saint Lucia </option>
                           <option value="MF"> Saint Martin </option>
                           <option value="PM"> Saint Pierre And Miquelon </option>
                           <option value="VC"> Saint Vincent And Grenadines </option>
                           <option value="WS"> Samoa </option>
                           <option value="SM"> San Marino </option>
                           <option value="ST"> Sao Tome And Principe </option>
                           <option value="SA"> Saudi Arabia </option>
                           <option value="SN"> Senegal </option>
                           <option value="RS"> Serbia </option>
                           <option value="SC"> Seychelles </option>
                           <option value="SL"> Sierra Leone </option>
                           <option value="SG"> Singapore </option>
                           <option value="SK"> Slovakia </option>
                           <option value="SI"> Slovenia </option>
                           <option value="SB"> Solomon Islands </option>
                           <option value="SO"> Somalia </option>
                           <option value="ZA"> South Africa </option>
                           <option value="GS"> South Georgia And Sandwich Isl. </option>
                           <option value="ES"> Spain </option>
                           <option value="LK"> Sri Lanka </option>
                           <option value="SD"> Sudan </option>
                           <option value="SR"> Suriname </option>
                           <option value="SJ"> Svalbard And Jan Mayen </option>
                           <option value="SZ"> Swaziland </option>
                           <option value="SE"> Sweden </option>
                           <option value="CH"  @if($user_info->country == "CH") selected @endif> Switzerland </option>
                           <option value="SY"> Syrian Arab Republic </option>
                           <option value="TW"> Taiwan </option>
                           <option value="TJ"> Tajikistan </option>
                           <option value="TZ"> Tanzania </option>
                           <option value="TH"> Thailand </option>
                           <option value="TL"> Timor-Leste </option>
                           <option value="TG"> Togo </option>
                           <option value="TK"> Tokelau </option>
                           <option value="TO"> Tonga </option>
                           <option value="TT"> Trinidad And Tobago </option>
                           <option value="TN"> Tunisia </option>
                           <option value="TR"> Turkey </option>
                           <option value="TM"> Turkmenistan </option>
                           <option value="TC"> Turks And Caicos Islands </option>
                           <option value="TV"> Tuvalu </option>
                           <option value="UG"> Uganda </option>
                           <option value="UA"> Ukraine </option>
                           <option value="AE"> United Arab Emirates </option>
                           <option value="GB"> United Kingdom </option>
                           <option value="US"> United States </option>
                           <option value="UM"> United States Outlying Islands </option>
                           <option value="UY"> Uruguay </option>
                           <option value="UZ"> Uzbekistan </option>
                           <option value="VU"> Vanuatu </option>
                           <option value="VE"> Venezuela </option>
                           <option value="VN"> Viet Nam </option>
                           <option value="VG"> Virgin Islands, British </option>
                           <option value="VI"> Virgin Islands, U.S. </option>
                           <option value="WF"> Wallis And Futuna </option>
                           <option value="EH"> Western Sahara </option>
                           <option value="YE"> Yemen </option>
                           <option value="ZM"> Zambia </option>
                           <option value="ZW"> Zimbabwe </option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            @else 
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="first_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
                     <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name" class="field form-control rounded-0 py-2 " placeholder="First Name" autofocus=""> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="last_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
                     <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" class="field form-control rounded-0 py-2 " placeholder="Last Name" autofocus=""> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="inputFirstName" class="field-icon text-center"> <i class="fa fa-envelope"></i> </label>
                     <input type="email" name="email" id="email" class="field form-control rounded-0 py-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" autofocus=""> 
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group prepend-icon position-relative mb-3">
                     <label for="phonenumber" class="field-icon text-center"> <i class="fa fa-phone"></i> </label>
                     <input type="text" name="mobile" id="mobile" class="field form-control rounded-0 py-2 " placeholder="Phone Number" value="{{ old('mobile') }}" autofocus="" maxlength="10"> 
                  </div>
               </div>
            </div>
            <div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Billing Address</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="companyname" class="field-icon text-center"> <i class="fa fa-building"></i> </label>
                        <input type="text" name="companyname" value="{{ old('companyname') }}" id="companyname" class="field form-control rounded-0 py-2" placeholder="Company Name (Optional)" autofocus=""> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="address" class="field-icon text-center"> <i class="fa fa-building-o"></i> </label>
                        <input type="text" name="address" id="address" class="field form-control rounded-0 py-2" value="{{ old('address') }}" placeholder="Street Address" autofocus=""> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="address_two" class="field-icon text-center"> <i class="fa fa-map-marker"></i> </label>
                        <input type="text" name="address_two" value="{{ old('address_two') }}" id="address_two" class="field form-control rounded-0 py-2" placeholder="Street Address 2" autofocus=""> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="city" class="field-icon text-center"> <i class="fa fa-building-o"></i> </label>
                        <input type="text" name="city" id="city" class="field rounded-0 py-2" placeholder="City" value="{{ old('city') }}" autofocus=""> 
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="state" class="field-icon text-center"> <i class="fa fa-map-signs"></i> </label>
                        <input type="text" name="state" id="state" class="field rounded-0 py-2" placeholder="State" value="{{ old('state') }}" autofocus=""> 
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="postcode" class="field-icon text-center"> <i class="fa fa-certificate"></i> </label>
                        <input type="text" name="postcode" id="postcode" class="field rounded-0 py-2" placeholder="Postcode" value="{{ old('postcode') }}" autofocus="" maxlength="6" onkeypress="return onlyNumber(event)"> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="country" class="field-icon text-center"> <i class="fa fa-globe"></i> </label>
                        <select id="country" name="country" class="field form-control rounded-0">
                           <option value="AF"> Afghanistan </option>
                           <option value="AX"> Aland Islands </option>
                           <option value="AL"> Albania </option>
                           <option value="DZ"> Algeria </option>
                           <option value="AS"> American Samoa </option>
                           <option value="AD"> Andorra </option>
                           <option value="AO"> Angola </option>
                           <option value="AI"> Anguilla </option>
                           <option value="AQ"> Antarctica </option>
                           <option value="AG"> Antigua And Barbuda </option>
                           <option value="AR"> Argentina </option>
                           <option value="AM"> Armenia </option>
                           <option value="AW"> Aruba </option>
                           <option value="AU"> Australia </option>
                           <option value="AT"> Austria </option>
                           <option value="AZ"> Azerbaijan </option>
                           <option value="BS"> Bahamas </option>
                           <option value="BH"> Bahrain </option>
                           <option value="BD"> Bangladesh </option>
                           <option value="BB"> Barbados </option>
                           <option value="BY"> Belarus </option>
                           <option value="BE"> Belgium </option>
                           <option value="BZ"> Belize </option>
                           <option value="BJ"> Benin </option>
                           <option value="BM"> Bermuda </option>
                           <option value="BT"> Bhutan </option>
                           <option value="BO"> Bolivia </option>
                           <option value="BA"> Bosnia And Herzegovina </option>
                           <option value="BW"> Botswana </option>
                           <option value="BR"> Brazil </option>
                           <option value="IO"> British Indian Ocean Territory </option>
                           <option value="BN"> Brunei Darussalam </option>
                           <option value="BG"> Bulgaria </option>
                           <option value="BF"> Burkina Faso </option>
                           <option value="BI"> Burundi </option>
                           <option value="KH"> Cambodia </option>
                           <option value="CM"> Cameroon </option>
                           <option value="CA"> Canada </option>
                           <option value="CV"> Cape Verde </option>
                           <option value="KY"> Cayman Islands </option>
                           <option value="CF"> Central African Republic </option>
                           <option value="TD"> Chad </option>
                           <option value="CL"> Chile </option>
                           <option value="CN"> China </option>
                           <option value="CX"> Christmas Island </option>
                           <option value="CC"> Cocos (Keeling) Islands </option>
                           <option value="CO"> Colombia </option>
                           <option value="KM"> Comoros </option>
                           <option value="CG"> Congo </option>
                           <option value="CD"> Congo, Democratic Republic </option>
                           <option value="CK"> Cook Islands </option>
                           <option value="CR"> Costa Rica </option>
                           <option value="CI"> Cote D'Ivoire </option>
                           <option value="HR"> Croatia </option>
                           <option value="CU"> Cuba </option>
                           <option value="CW"> Curacao </option>
                           <option value="CY"> Cyprus </option>
                           <option value="CZ"> Czech Republic </option>
                           <option value="DK"> Denmark </option>
                           <option value="DJ"> Djibouti </option>
                           <option value="DM"> Dominica </option>
                           <option value="DO"> Dominican Republic </option>
                           <option value="EC"> Ecuador </option>
                           <option value="EG"> Egypt </option>
                           <option value="SV"> El Salvador </option>
                           <option value="GQ"> Equatorial Guinea </option>
                           <option value="ER"> Eritrea </option>
                           <option value="EE"> Estonia </option>
                           <option value="ET"> Ethiopia </option>
                           <option value="FK"> Falkland Islands (Malvinas) </option>
                           <option value="FO"> Faroe Islands </option>
                           <option value="FJ"> Fiji </option>
                           <option value="FI"> Finland </option>
                           <option value="FR"> France </option>
                           <option value="GF"> French Guiana </option>
                           <option value="PF"> French Polynesia </option>
                           <option value="TF"> French Southern Territories </option>
                           <option value="GA"> Gabon </option>
                           <option value="GM"> Gambia </option>
                           <option value="GE"> Georgia </option>
                           <option value="DE"> Germany </option>
                           <option value="GH"> Ghana </option>
                           <option value="GI"> Gibraltar </option>
                           <option value="GR"> Greece </option>
                           <option value="GL"> Greenland </option>
                           <option value="GD"> Grenada </option>
                           <option value="GP"> Guadeloupe </option>
                           <option value="GU"> Guam </option>
                           <option value="GT"> Guatemala </option>
                           <option value="GG"> Guernsey </option>
                           <option value="GN"> Guinea </option>
                           <option value="GW"> Guinea-Bissau </option>
                           <option value="GY"> Guyana </option>
                           <option value="HT"> Haiti </option>
                           <option value="HM"> Heard Island &amp; Mcdonald Islands </option>
                           <option value="VA"> Holy See (Vatican City State) </option>
                           <option value="HN"> Honduras </option>
                           <option value="HK"> Hong Kong </option>
                           <option value="HU"> Hungary </option>
                           <option value="IS"> Iceland </option>
                           <option value="IN"> India </option>
                           <option value="ID"> Indonesia </option>
                           <option value="IR"> Iran, Islamic Republic Of </option>
                           <option value="IQ"> Iraq </option>
                           <option value="IE"> Ireland </option>
                           <option value="IM"> Isle Of Man </option>
                           <option value="IL"> Israel </option>
                           <option value="IT"> Italy </option>
                           <option value="JM"> Jamaica </option>
                           <option value="JP"> Japan </option>
                           <option value="JE"> Jersey </option>
                           <option value="JO"> Jordan </option>
                           <option value="KZ"> Kazakhstan </option>
                           <option value="KE"> Kenya </option>
                           <option value="KI"> Kiribati </option>
                           <option value="KR"> Korea </option>
                           <option value="KW"> Kuwait </option>
                           <option value="KG"> Kyrgyzstan </option>
                           <option value="LA"> Lao People's Democratic Republic </option>
                           <option value="LV"> Latvia </option>
                           <option value="LB"> Lebanon </option>
                           <option value="LS"> Lesotho </option>
                           <option value="LR"> Liberia </option>
                           <option value="LY"> Libyan Arab Jamahiriya </option>
                           <option value="LI"> Liechtenstein </option>
                           <option value="LT"> Lithuania </option>
                           <option value="LU"> Luxembourg </option>
                           <option value="MO"> Macao </option>
                           <option value="MK"> Macedonia </option>
                           <option value="MG"> Madagascar </option>
                           <option value="MW"> Malawi </option>
                           <option value="MY"> Malaysia </option>
                           <option value="MV"> Maldives </option>
                           <option value="ML"> Mali </option>
                           <option value="MT"> Malta </option>
                           <option value="MH"> Marshall Islands </option>
                           <option value="MQ"> Martinique </option>
                           <option value="MR"> Mauritania </option>
                           <option value="MU"> Mauritius </option>
                           <option value="YT"> Mayotte </option>
                           <option value="MX"> Mexico </option>
                           <option value="FM"> Micronesia, Federated States Of </option>
                           <option value="MD"> Moldova </option>
                           <option value="MC"> Monaco </option>
                           <option value="MN"> Mongolia </option>
                           <option value="ME"> Montenegro </option>
                           <option value="MS"> Montserrat </option>
                           <option value="MA"> Morocco </option>
                           <option value="MZ"> Mozambique </option>
                           <option value="MM"> Myanmar </option>
                           <option value="NA"> Namibia </option>
                           <option value="NR"> Nauru </option>
                           <option value="NP"> Nepal </option>
                           <option value="NL"> Netherlands </option>
                           <option value="AN"> Netherlands Antilles </option>
                           <option value="NC"> New Caledonia </option>
                           <option value="NZ"> New Zealand </option>
                           <option value="NI"> Nicaragua </option>
                           <option value="NE"> Niger </option>
                           <option value="NG"> Nigeria </option>
                           <option value="NU"> Niue </option>
                           <option value="NF"> Norfolk Island </option>
                           <option value="MP"> Northern Mariana Islands </option>
                           <option value="NO"> Norway </option>
                           <option value="OM"> Oman </option>
                           <option value="PK"> Pakistan </option>
                           <option value="PW"> Palau </option>
                           <option value="PS"> Palestine, State of </option>
                           <option value="PA"> Panama </option>
                           <option value="PG"> Papua New Guinea </option>
                           <option value="PY"> Paraguay </option>
                           <option value="PE"> Peru </option>
                           <option value="PH"> Philippines </option>
                           <option value="PN"> Pitcairn </option>
                           <option value="PL"> Poland </option>
                           <option value="PT"> Portugal </option>
                           <option value="PR"> Puerto Rico </option>
                           <option value="QA"> Qatar </option>
                           <option value="RE"> Reunion </option>
                           <option value="RO"> Romania </option>
                           <option value="RU"> Russian Federation </option>
                           <option value="RW"> Rwanda </option>
                           <option value="BL"> Saint Barthelemy </option>
                           <option value="SH"> Saint Helena </option>
                           <option value="KN"> Saint Kitts And Nevis </option>
                           <option value="LC"> Saint Lucia </option>
                           <option value="MF"> Saint Martin </option>
                           <option value="PM"> Saint Pierre And Miquelon </option>
                           <option value="VC"> Saint Vincent And Grenadines </option>
                           <option value="WS"> Samoa </option>
                           <option value="SM"> San Marino </option>
                           <option value="ST"> Sao Tome And Principe </option>
                           <option value="SA"> Saudi Arabia </option>
                           <option value="SN"> Senegal </option>
                           <option value="RS"> Serbia </option>
                           <option value="SC"> Seychelles </option>
                           <option value="SL"> Sierra Leone </option>
                           <option value="SG"> Singapore </option>
                           <option value="SK"> Slovakia </option>
                           <option value="SI"> Slovenia </option>
                           <option value="SB"> Solomon Islands </option>
                           <option value="SO"> Somalia </option>
                           <option value="ZA"> South Africa </option>
                           <option value="GS"> South Georgia And Sandwich Isl. </option>
                           <option value="ES"> Spain </option>
                           <option value="LK"> Sri Lanka </option>
                           <option value="SD"> Sudan </option>
                           <option value="SR"> Suriname </option>
                           <option value="SJ"> Svalbard And Jan Mayen </option>
                           <option value="SZ"> Swaziland </option>
                           <option value="SE"> Sweden </option>
                           <option value="CH" selected="selected"> Switzerland </option>
                           <option value="SY"> Syrian Arab Republic </option>
                           <option value="TW"> Taiwan </option>
                           <option value="TJ"> Tajikistan </option>
                           <option value="TZ"> Tanzania </option>
                           <option value="TH"> Thailand </option>
                           <option value="TL"> Timor-Leste </option>
                           <option value="TG"> Togo </option>
                           <option value="TK"> Tokelau </option>
                           <option value="TO"> Tonga </option>
                           <option value="TT"> Trinidad And Tobago </option>
                           <option value="TN"> Tunisia </option>
                           <option value="TR"> Turkey </option>
                           <option value="TM"> Turkmenistan </option>
                           <option value="TC"> Turks And Caicos Islands </option>
                           <option value="TV"> Tuvalu </option>
                           <option value="UG"> Uganda </option>
                           <option value="UA"> Ukraine </option>
                           <option value="AE"> United Arab Emirates </option>
                           <option value="GB"> United Kingdom </option>
                           <option value="US"> United States </option>
                           <option value="UM"> United States Outlying Islands </option>
                           <option value="UY"> Uruguay </option>
                           <option value="UZ"> Uzbekistan </option>
                           <option value="VU"> Vanuatu </option>
                           <option value="VE"> Venezuela </option>
                           <option value="VN"> Viet Nam </option>
                           <option value="VG"> Virgin Islands, British </option>
                           <option value="VI"> Virgin Islands, U.S. </option>
                           <option value="WF"> Wallis And Futuna </option>
                           <option value="EH"> Western Sahara </option>
                           <option value="YE"> Yemen </option>
                           <option value="ZM"> Zambia </option>
                           <option value="ZW"> Zimbabwe </option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Domain Registrant Information</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <p> We would like to send you occasional news, information and special offers by email.
                        To join our mailing list, simply tick the box below. You can unsubscribe at any time.
                     </p>
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="country" class="field-icon text-center"> </label>
                        <select id="country" name="country" class="field form-control rounded-0 form-select" aria-label="Default select example">
                           <option value="" selected> Use Default Contact (Details Above) </option>
                           <option value=""> 
                              Add New Contact...
                           </option>
                        </select>
                     </div>
                  </div>
               </div>
               </div>-->
            <div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Account Security</h5>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="password" class="field-icon text-center"> <i class="fa fa-lock"></i> </label>
                        <input type="password" name="password" id="password" class="field rounded-0 py-2 " placeholder="Password" value="" autofocus="" autocomplete="new-password"> 
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group prepend-icon position-relative mb-3">
                        <label for="password-confirm" class="field-icon text-center"> <i class="fa fa-lock"></i> </label>
                        <input type="password" name="confirm_password" id="confirm_password" class="field rounded-0 py-2" placeholder="Confirm Password" value="" autofocus="" autocomplete="new-password"> 
                     </div>
                  </div>
               </div>
            </div>
            @endif
            <div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold"> Payment Details</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="alert alert-success text-center large-text" role="alert">
                        Total Due Today: &nbsp; <strong>CHF{{ $total_grand_total }}</strong>
                     </div>
                     <div id="paymentGatewaysContainer" class="form-group">
                        <p class="small text-muted">Please choose your preferred method of payment.</p>
                        <div class="text-center">
                           <label class="radio-inline mb-3">
                           <input type="radio" name="payment_method" value="stripe" class="payment-methods is-credit-card" checked >
                           Credit or Debit Cards
                           </label>
                        </div>
                     </div>
                     <div class="credit-debit-card p-3">
                        <div class="row">
                           <div class="col-md-4">
                              <label class="mb-1">
                              Card Number
                              </label>
                              <div class="form-group prepend-icon position-relative mb-3">
                                 <input type="text" name="card_number" id="card_number" class="field rounded-0 py-2 " placeholder="4111111111111111" value="" autofocus="" maxlength="16" onkeypress="return onlyNumber(event)"> 
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label class="mb-1">
                              Expiry Date
                              </label>
                              <div class="form-group prepend-icon position-relative mb-3">
                                 <input type="text" name="exp_month" id="exp_month" value="" class="field rounded-0 py-2 " placeholder="mm/yy" value="" autofocus="" onkeyup="exp_month_format(event);" maxlength="5"> 
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label class="mb-1">
                              CVV/CVC2
                              </label>
                              <div class="form-group prepend-icon position-relative mb-3">
                                 <input type="text" name="cvc_number" id="cvc_number" value="" class="field rounded-0 py-2 " placeholder="CVC" value="" autofocus="" maxlength="4" onkeypress="return onlyNumber(event)"> 
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="prepend-icon edit-icon">
                                 <label for="inputDescription" class="field-icons">
                                 <i class="fa fa-pencil"></i>
                                 </label>
                                 <input type="text" name="card_owner_name" id="card_owner_name" value="" class="field rounded-0 py-2 ps-4 " placeholder="Enter a name for this card (Optional)" value="" autofocus=""> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="new-user-signup my-4 py-2">
               <div class="shoping-heading-text text-center ">
                  <h5 class="fw-bold">Additional Notes</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <textarea name="notes" class="field w-100" rows="4" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="new-user-signup mail-toogle">
               <div class="sub-heading my-2 border-0">
                  <h6 class="fw-bold"> Join our mailing list </h6>
                  <p> We would like to send you occasional news, information and special offers by email. To join our mailing list, simply tick the box below. You can unsubscribe at any time.</p>
                  <div class="form-check form-switch">
                     <input class="form-check-input" type="checkbox" id="mailing_list" name="mailing_list" checked=""> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="term-service-content">
                     <div class="panel-body py-3 px-2">
                        <div class="col-md-12">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Yes" name="term_condition" id="term_condition">
                              <label class="form-check-label" for="term_condition"> I have read and agree to the <a href="{{url('terms-of-use')}}" target="_blank" class="text-decoration-none">Terms of Service</a> </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" mt-3 mt-md-5 text-center">
               <button class="btn main-button text-white rounded-0 mt-3 submit_button">Complete Order  <i class="fa fa-arrow-circle-right ms-2"></i></button>
               <div class="checkout_responce"></div>
            </div>
         </form>
      </div>
   </div>
   <script>
        //only number format
        function onlyNumber(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57)){
                  return false;
              }
          return true;
        }
        //only expire month format
        function exp_month_format(e) {
            var inputChar = String.fromCharCode(event.keyCode);
            var code = event.keyCode;
            var allowedKeys = [8];
            if (allowedKeys.indexOf(code) !== -1) {
                return;
            }
            event.target.value = event.target.value.replace(
            /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
            ).replace(
            /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
            ).replace(
            /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
            ).replace(
            /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
            ).replace(
            /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
            ).replace(
            /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
            ).replace(
            /\/\//g, '/' // Prevent entering more than 1 `/`
            );
        }
   </script>
   @else 
   <script>window.location = base_url+"/cart?a=view";</script>
   @endif
</div>