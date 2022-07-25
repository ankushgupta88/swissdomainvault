@extends('layouts.master') 
@section('content')
<!--banner inner section-->
<section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title">
					<h3 class="text-white text-uppercase fw-bold"> Register </h3> </div>
			</div>
		</div>
	</div>
</section>
<!--register content section-->
<section class="register-fill-section py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 py-4">
				<div class="title pb-5">
					<h5 class="mb-0 fw-bold">Register <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i> <span class="sub-title fw-light fs-15"> Create an account with us . . .</span></h5> </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div id="registration">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf 
						<div class="new-user-signup">
							<div class="sub-heading text-center my-5">
								<h6 class="fw-bold"> 
                                    <span class="bg-light px-3">Personal Information</span> 
                                </h6> 
                            </div>
                            @if(Session::has('success'))
                              <p class="success-msg">{{ Session::get('success') }}</p>
                            @endif
                            @if(Session::has('unsuccess'))
                              <p class="unsuccess-msg">{{ Session::get('unsuccess') }}</p>
                            @endif
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="first_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
									<input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name" class="field form-control rounded-0 py-2 @error('first_name') is-invalid @enderror" placeholder="First Name" autofocus=""> 
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="last_name" class="field-icon text-center"> <i class="fa fa-user"></i> </label>
									<input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" id="last_name" class="field form-control rounded-0 py-2 @error('last_name') is-invalid @enderror" placeholder="Last Name" value="" autofocus=""> 
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="inputFirstName" class="field-icon text-center"> <i class="fa fa-envelope"></i> </label>
									<input type="email" name="email" id="email" class="field form-control rounded-0 py-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" value="" autofocus=""> 
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="phonenumber" class="field-icon text-center"> <i class="fa fa-envelope"></i> </label>
									<input type="tel" name="phonenumber" id="phonenumber" class="field form-control rounded-0 py-2 @error('phonenumber') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phonenumber') }}" autofocus=""> 
                                    @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>
						</div>
						<!--2 nd-->
						<div class="new-user-signup">
							<div class="sub-heading text-center my-5">
								<h6 class="fw-bold"> <span class="bg-light px-3">Billing Address</span> </h6> </div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="companyname" class="field-icon text-center"> <i class="fa fa-building"></i> </label>
									<input type="text" name="companyname" value="{{ old('companyname') }}" id="companyname" class="field form-control rounded-0 py-2" placeholder="Company Name (Optional)" value="" autofocus=""> </div>
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
									<input type="text" name="address_two" value="{{ old('address_two') }}" id="address_two" class="field form-control rounded-0 py-2" placeholder="Street Address 2"  autofocus=""> </div>
							</div>
							<div class="col-md-4">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="city" class="field-icon text-center"> <i class="fa fa-building-o"></i> </label>
									<input type="text" name="city" id="city" class="field rounded-0 py-2" placeholder="City"  value="{{ old('city') }}" autofocus=""> </div>
							</div>
							<div class="col-md-5">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="state" class="field-icon text-center"> <i class="fa fa-map-signs"></i> </label>
									<input type="text" name="state" id="state" class="field rounded-0 py-2" placeholder="State" value="{{ old('state') }}" autofocus=""> </div>
							</div>
							<div class="col-md-3">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="postcode" class="field-icon text-center"> <i class="fa fa-certificate"></i> </label>
									<input type="text" name="postcode" id="postcode" class="field rounded-0 py-2" placeholder="Postcode" value="{{ old('postcode') }}" autofocus=""> </div>
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
						<div class="new-user-signup">
							<div class="sub-heading text-center my-5">
								<h6 class="fw-bold"> <span class="bg-light px-3">Additional Required Information</span> </h6> </div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="currency" class="field-icon text-center"> <i class="fa fa-money"></i> </label>
									<select id="currency" name="currency" class="field form-control rounded-0">
										<option value="CHF" selected="">CHF</option>
										<option value="USD">USD</option>
									</select>
								</div>
							</div>
						</div>
						<div class="new-user-signup">
							<div class="sub-heading text-center my-5">
								<h6 class="fw-bold"> <span class="bg-light px-3">Account Security</span> </h6> </div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="password" class="field-icon text-center"> <i class="fa fa-lock"></i> </label>
									<input type="password" name="password" id="password" class="field rounded-0 py-2 @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}" autofocus="" autocomplete="new-password"> 
                                    @error('password')  
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group prepend-icon position-relative mb-3">
									<label for="password-confirm" class="field-icon text-center"> <i class="fa fa-lock"></i> </label>
									<input type="password" name="password_confirmation" id="password-confirm" class="field rounded-0 py-2" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" autofocus="" autocomplete="new-password"> 
                                </div>
							</div>
						</div>
						<div class="new-user-signup">
							<div class="sub-heading my-5 border-0">
								<h6 class="fw-bold"> Join our mailing list </h6>
								<p> We would like to send you occasional news, information and special offers by email. To join our mailing list, simply tick the box below. You can unsubscribe at any time.</p>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="mailing_list" checked> </div>
							</div>
						</div>
						<!--<div class="row">
							<div class="col-md-8 mx-auto">
								<div id="default-captcha" class="text-center pb-3 pb-md-5">
									<p>Please enter the characters you see in the image below into the text box provided. This is required to prevent automated submissions.</p>
									<div class="captchaimage"> 
                                        <img id="inputCaptchaImage" src="{{ asset('public/assets/images/verifyimage.jpg') }}" align="middle">
										<input id="inputCaptcha" type="text" name="code" maxlength="5" class="pe-3"> 
                                    </div>
								</div>
							</div>
						</div>-->   
						<div class="row">
							<div class="col-md-12">
								<div class="term-service-content">
									<div class="panel-heading py-3 px-3">
										<h6 class="panel-title mb-0"><span class="fa fa-exclamation-triangle tosicon"></span> &nbsp; Terms of Service</h6> </div>
									<div class="panel-body py-3 px-2">
										<div class="col-md-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="Yes" name="term_condition" id="term_condition">
												<label class="form-check-label" for="term_condition"> I have read and agree to the <a href="{{ url('/terms-of-use') }}" target="_blank" class="text-decoration-none">Terms of Service</a> </label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="register-button mt-3 mt-md-5">
							<button type="submit" class="btn main-button text-white rounded-0  mt-3"> Register</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="already-register-block">
					<div class="panel panel-sidebar panel-sidebar">
						<div class="panel-heading">
							<h6 class="panel-title fw-bold">
                                <i class="fa fa-user pe-2" aria-hidden="true"></i>&nbsp;Already Registered? <span class="float-end"> <i class="fa fa-chevron-up panel-minimise"></i> </span>
                            </h6> </div>
						<div class="list-group">
							<div menuitemname="Already Registered Heading" class="list-group-item" id="Primary_Sidebar-Already_Registered-Already_Registered_Heading"> Already registered with us? If so, click the button below to login to our client area from where you can manage your account. </div>
							<a href="{{ url('/login') }}" class="list-group-item" id="Sidebar-already-Registered"> <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Login </a>
							<a menuitemname="Lost Password Reset" href="{{ url('/password/reset') }}" class="list-group-item"> <i class="fa fa-asterisk" aria-hidden="true"></i>&nbsp; Lost Password Reset </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 


{{--
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>
				<div class="card-body">
					<form method="POST" action="{{ route('register') }}"> @csrf
						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
						</div>
						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> </div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary"> {{ __('Register') }} </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}} @endsection
<script>
$('[data-toggle="switch"]').bootstrapSwitch();
</script>