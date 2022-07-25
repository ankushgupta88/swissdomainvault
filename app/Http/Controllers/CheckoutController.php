<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use App\Models\User;
use App\Models\Invoice;
use App\Models\InvoiceItem;

use Session;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    //Function for submit checkout 
    public function submitCheckout(Request $request)
    {
        //Call functions For tesing
        /*$domain_check = self::checkDomainAvailability();
        //Check domain is availble or not
        if(count($domain_check) >= 1){
            if($domain_check[0]['responce'] == 211){
                echo $domain_check[0]['message'];
            }
        } else {
            echo "call purcahge domain";
        }
        echo "<pre>";
        print_r($domain_check); 
        exit;*/
        //Check cart session is exit or not
        if(Session::has('cart')){
            //Get request
            $grand_total = $request->grand_total;
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $mobile = $request->mobile;
            $companyname = $request->companyname;
            $address = $request->address;
            $address_two = $request->address_two;
            $city = $request->city;
            $state = $request->state;
            $postcode = $request->postcode;
            $country = $request->country;
            $password = $request->password;
            $confirm_password = $request->confirm_password;
            $payment_method = $request->payment_method;
            $card_number = $request->card_number;
            $exp_month = $request->exp_month;
            $cvc_number = $request->cvc_number;
            $card_owner_name = $request->card_owner_name;
            $notes = $request->notes;
            
            //check mailing_list
            $mailing_list = "No";
            if(!empty($request['mailing_list'])){
                $mailing_list = "Yes";
            }
            //check term_condition
            $term_condition = "No";
            if(!empty($request['term_condition'])){
                $term_condition = "Yes";
            }
        
            //Check if user is login or not
            if(Auth::user()){
                //Login user id
                $login_user_id = Auth::id();
                $user_info = User::Where('id',$login_user_id)->first()->toArray();
                //Store data for login user
                $request_data['first_name'] = $user_info['first_name'];
                $request_data['last_name'] = $user_info['last_name'];
                $request_data['email'] = $user_info['email'];
                $request_data['mobile'] = $user_info['mobile'];
                $request_data['companyname'] = $user_info['companyname'];
                $request_data['address'] = $user_info['address'];
                $request_data['address_two'] = $user_info['address_two'];
                $request_data['city'] = $user_info['city'];
                $request_data['state'] = $user_info['state'];
                $request_data['postcode'] = $user_info['postcode'];
                $request_data['grand_total'] = $request['grand_total'];
                $request_data['country'] = $request['country'];
                $request_data['payment_method'] = $request['payment_method'];
                $request_data['card_number'] = $request['card_number'];
                $request_data['exp_month'] = $request['exp_month'];
                $request_data['cvc_number'] = $request['cvc_number'];
                $request_data['card_owner_name'] = $request['card_owner_name'];
                $request_data['notes'] = $request['notes'];
                $request_data['mailing_list'] = $request['mailing_list'];
                $request_data['term_condition'] = $request['term_condition'];
                $request_data['request_ip'] = $request->ip();
                
                //Call Check Domain Availability functions
                $domain_check = self::checkDomainAvailability();
               
                //Check domain is availble or not
                if(count($domain_check) >= 1){
                     
                    if($domain_check[0]['responce'] == 211){
                        echo '<p class="unsuccess-msg">These domain name not avaiable Please try with new domain name '.$domain_check[0]['message'].'</p>';
                    }
                } else { 
                  
                    //Call payment functions
                   $payment= self::paymentWithCrm($request_data);
                      print_r($payment); die;
                }
            } else {
                //Check email is exists or not
                $is_email = User::Where('email',$email)->count();
                if($is_email >= 1){
                    echo '<p class="unsuccess-msg">This Email Address is Already Registered.</p>';
                } else {
                    //create new customer user
                    $name = $first_name." ".$last_name;
                    $insert_customer_user = User::create([
                        'name'  => $name,
                        'email' =>  $email,
                        'user_type' => "Customer",
                        'password'  => Hash::make($password),
                        'mobile'    => $mobile,  
                        'first_name'  => $first_name,
                        'last_name'   => $last_name,
                        'companyname' => $companyname,
                        'address' => $address,
                        'address_two' => $address_two,
                        'city' => $city,
                        'state' => $state,
                        'postcode' => $postcode,
                        'country' => $country,
                        'mailing_list' => $mailing_list,
                        'term_condition' =>  $term_condition,
                    ]);
                    
                    //Check customer is created or not
                    if($insert_customer_user){ 
                        $last_customer_id = $insert_customer_user->id;
                        //check login
                        if(auth()->attempt(['email' => $email, 'password' => $password])){
                            //Call Check Domain Availability functions
                            $domain_check = self::checkDomainAvailability();
                            //Check domain is availble or not
                            if(count($domain_check) >= 1){
                                if($domain_check[0]['responce'] == 211){
                                    echo '<p class="unsuccess-msg">These domain name not avaiable Please try with new domain name '.$domain_check[0]['message'].'</p>';
                                }
                            } else {
                                //Store data for not login user
                                $request_data = $request->all(); 
                                //Call payment functions
                                self::paymentWithCrm($request_data);
                            }
                        } else {
                            echo '<p class="unsuccess-msg">Oops something wrong.Customer not login successfully.</p>';
                        }
                    } else {
                        echo '<p class="unsuccess-msg">Oops something wrong.</p>';
                    }
                }
            } 
        } else {
            echo '<p class="unsuccess-msg">Cart is empty. Please try again.</p>';
        }
    }
    
    //Function for check domain availability
    public static function checkDomainAvailability()
    {
        //Call api variable
        $enom_api_url = config('app.ENOM_API_URL');
        $enom_api_username = config('app.ENOM_API_USERNAME');
        $enom_api_password = config('app.ENOM_API_PASSWORD');
        
        //Check cart session
        $domain_check_res = [];
        if(Session::get('cart')){
            foreach(Session::get('cart') as $key => $cart){
                $domain_data = $cart['domain_data']; 
                
                //Check resgiter type is domain or not
                if($domain_data['domain_register_type'] == "domain"){
                    //domane name
                    $domain_name = strstr($domain_data['domain_name'], '.', true);
                    $tld = substr($domain_data['domain_name'], strpos($domain_data['domain_name'], ".") + 1);
                    
                    //Call Enum Api
                    $api_url = $enom_api_url.'/interface.asp?Command=check&UID='.$enom_api_username.'&PW='.$enom_api_password.'&SLD='.$domain_name.'&TLD='.$tld.'&responsetype=xml';
                    // Load the API results into a SimpleXML object
                    $api_xml = simplexml_load_file($api_url);
                    
                    //Check status 211:Domain not
                    if($api_xml->RRPCode == 211) {
                        $domain_check_res[] = ["responce" => 211, "message" => $domain_data['domain_name'].","];
                    }
                }
            }
            return $domain_check_res;
        } 
    }
    
    //Function for payment with crm
    public static function paymentWithCrm($request_data)
    {
        //Login user id and request ip
        $login_user_id = Auth::id(); 
        $request_ip = $request_data['request_ip'];
                
        //explode exp_month
        $explode_exp_month = explode("/",$request_data['exp_month']);
        $expiration_month = $explode_exp_month[0];
        $expiration_year =  $explode_exp_month[1];
    
        //CRM API CALL
        $SET_CRM_API_URL = config('app.SET_CRM_API_URL');
        $SET_CRM_API_USER = config('app.SET_CRM_API_USER');
        $SET_CRM_API_PASSWORD = config('app.SET_CRM_API_PASSWORD');
        $SET_CRM_API_CAMPAIGNID = config('app.SET_CRM_API_CAMPAIGNID');
        $SET_CRM_API_OFFERID1 = config('app.SET_CRM_API_OFFERID1');
        $SET_CRM_API_WEBSITE_NAME = config('app.SET_CRM_API_WEBSITE_NAME');
        
        
        //CURL USE FOR API HIT
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $SET_CRM_API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        $parameters = array(
            'user_auth' => array(
                'crm_user' => $SET_CRM_API_USER,
                'crm_user_password' => $SET_CRM_API_PASSWORD,
                'first_name'  => trim($request_data['first_name']),
                'last_name'  => trim($request_data['last_name']),
                'email'  => trim($request_data['email']),
                'phone_home'  => trim($request_data['mobile']),
                'bill_address_line1' => $request_data['address'],
                'bill_address_line2' => $request_data['address_two'],
                'bill_city' => trim($request_data['city']),
                'bill_state' => trim($request_data['state']),
                'bill_postal' => trim($request_data['postcode']),
                'bill_country' => 'US',
                'bill_ship_same' => false,
                'ship_address_line1' => "",
                'ship_address_line2' => "",
                'ship_city' => "",
                'ship_state' => "",
                'ship_postal' => "",
                'ship_country' => "",
                'card_number'  => trim($request_data['card_number']),
                'expiration_month' => trim($expiration_month),
                'expiration_year'  => trim($expiration_year),
                'card_cvv'  => trim($request_data['cvc_number']), 
                'url' => $SET_CRM_API_WEBSITE_NAME,
                'campaignId'  => $SET_CRM_API_CAMPAIGNID,
                'offer' => [array(
                    'offer_id' => $SET_CRM_API_OFFERID1
                )]
            ),
        );    
        $json = json_encode($parameters);
        $postArgs = array(
                    'method' => 'temporder',
                    'input_type' => 'JSON',
                    'response_type' => 'JSON',
                    'rest_data' => $json,
                );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch); 
        $message = (json_decode($output));
        /*echo "<pre>";
        print_r($message);
        echo "</pre>";
        exit;*/
        //CHECK PAYMENT RESPONCE
        if ($message->status == 500){
            echo "<p style='color:red;'>Invalid Login - Login attempt failed please check the crm username and password.</p>";
        }  elseif ($message->status == 403){
            echo "<p style='color:red;'>".$message->message[0]."</p>";
        } elseif($message->data->response[0]->status == 'approved'){ 
            //Store payment responce data
            $payment_responce_data['campaign_id'] = $message->data->campaignId;
            $payment_responce_data['upsell_id'] = $message->data->upsellid;
            $payment_responce_data['offer_id'] = $message->data->response[0]->offerid;
            $payment_responce_data['status'] = "Paid";
            $payment_responce_data['user_id'] = $login_user_id;
            $payment_responce_data['request_ip'] = $request_ip;
            
            //Call purchnage domain functions
           $pue=  self::purchageDomain($payment_responce_data);
          
           if($pue == 540){
                 echo "<p style='color:red;'>Domain name not available. Please try with new domain name.</p>";
           }elseif($pue == 641){
               echo "<p style='color:red;'>Oops Something Wrong In Purchage domain Api.</p>";
           }else{
               echo "<p style='color:green;'>Payment Successfull with Placed order. We Will Contact You Soon. Please wait...</p>"; 
           }
              
            
            ?>
            <!--<script>
                setTimeout(function () {
                    window.location.href = base_url + "/cart"; 
                }, 3000);
            </script>-->
            <?php
        }  elseif ($message->data->response[0]->status == "declined"){ 
            //Store payment responce data
            /*$payment_responce_data['campaign_id'] = "";
            $payment_responce_data['upsell_id'] = "";
            $payment_responce_data['offer_id'] = "";
            $payment_responce_data['status'] = "Unpaid";
            $payment_responce_data['user_id'] = $login_user_id;
            
            //Call create invoice functions
            self::createNewInvoice($payment_responce_data);*/
            
            echo "<p style='color:red;'>Payment declined please try again.</p>";
        }  else{ 
            echo "<p style='color:red;'>Oops something wrong with crm api.</p>";
        }
    }
    
    //Function for purchange domain
    public static function purchageDomain($payment_responce_data)
    {
        //Call api variable
        $enom_api_url = config('app.ENOM_API_URL');
        $enom_api_username = config('app.ENOM_API_USERNAME');
        $enom_api_password = config('app.ENOM_API_PASSWORD');
        
        //Request ip
        $request_ip = $payment_responce_data['request_ip'];
        
        //enum api url
        $enum_api_url = $enom_api_url.'/interface.asp?command=Purchase&uid='.$enom_api_username.'&pw='.$enom_api_password.'&EndUserIP='.$request_ip.'&SLD=testingkkkkk9&TLD=com&responsetype=xml';
        // Load the API results into a SimpleXML object
        $enum_xml = simplexml_load_file($enum_api_url);

        //Check error 200==succcess order,540==domain not avialble,
        if($enum_xml->RRPCode == 200){
            //make array responce
            $payment_responce_data['enum_order_id'] = $enum_xml->OrderID;
            $payment_responce_data['enum_total_charged'] = $enum_xml->TotalCharged;
            $payment_responce_data['enum_registry_create_date'] = $enum_xml->DomainInfo->RegistryCreateDate;
            $payment_responce_data['enum_registry_exp_date'] = $enum_xml->DomainInfo->RegistryExpDate;
            $payment_responce_data['enum_order_status'] = $enum_xml->OrderStatus;
            $payment_responce_data['enum_tracking_key'] = $enum_xml->TrackingKey;
            $payment_responce_data['enum_server'] = $request_ip;
            
            //Call create invoice functions
            self::createNewInvoice($payment_responce_data);
            
        } elseif($enum_xml->RRPCode == 540){
            $status = "540";
            return  $status;
          
        } else {
            $status = "641";
            return  $status;
            
        }
    }
    
    
    //Function for create new Invoice
    public static function createNewInvoice($payment_responce_data)
    {  
        //Check cart session for total amount cal
        $total_amount = 0; 
        $total_sub_amount = 0; 
        if(Session::get('cart')){
            foreach(Session::get('cart') as $key => $cart){
                $domain_data2 = $cart['domain_data'];
                //Price calculation
                $price = $domain_data2['domain_price'];
                $domain_item_price = number_format((float)$price, 2, '.', '');
                $total_sub_amount += $domain_item_price;
                $total_amount += $domain_item_price;
            }
        } 
        
        //time perode calculate
        $current = Carbon::now();
        $reg_time_perod = "1 Year";
        
        //Set invoice address
        $invoiced_to = "sunil kumar<br>vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp), vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp)<br>chamba, Himachal Pradesh, 176314<br>India";
         $pay_to = "Swissdomainvault Private Limited<br>Swissdomainvault address<br> - Swissdomainvault address2 147301 USA<br>Tel: (+41) 43 505 1054<br>CIN: 8568947685768456<br>PAN No. Hfdrtu847575<br>GST ID:  JKHjsfdjhsfgdsjhfgdhsfg<br>SAC CODE: 998315"; 
        //create invoice
        $create_invoice = Invoice::create([
                'user_id' => $payment_responce_data['user_id'],
                'campaign_id' =>  $payment_responce_data['campaign_id'],
                'upsell_id' => $payment_responce_data['upsell_id'],
                'offer_id' => $payment_responce_data['offer_id'],
                'invoiced_to' => $invoiced_to,
                'pay_to' => $pay_to,
                'total_sub_amount' => $total_sub_amount,
                'total_amount' => $total_amount,
                'currency' => "CHF",
                'status' => $payment_responce_data['status'],
            ]);
        //Check invoice inserted or not
        if($create_invoice){  
            //Last invice id
            $last_insert_invoice_id  = $create_invoice->id;
            //Check cart session
            if(Session::get('cart')){
                foreach(Session::get('cart') as $key => $cart){
                    $domain_data = $cart['domain_data'];
                    //insert invice items
                    $insert_ivoice_items = InvoiceItem::create([
                        'domain_name' =>  $domain_data['domain_name'], 
                        'domain_price' => $domain_data['domain_price'],
                        'service_name' => $domain_data['service_name'],
                        'service_category' => $domain_data['service_category'],
                        'domain_register_type' => $domain_data['domain_register_type'],
                        'domain_quantity' => $domain_data['domain_quantity'],
                        'dnsmanagement' => $domain_data['dnsmanagement'],
                        'idprotection' => $domain_data['idprotection'],
                        'emailforwarding' => $domain_data['emailforwarding'],
                        'invoice_id' => $last_insert_invoice_id,
                        'reg_time_perod' => $reg_time_perod,
                        'enum_order_id' => $payment_responce_data['enum_order_id'],
                        'enum_total_charged' => $payment_responce_data['enum_total_charged'],
                        'enum_registry_create_date' => $payment_responce_data['enum_registry_create_date'],
                        'enum_registry_exp_date' => $payment_responce_data['enum_registry_exp_date'],
                        'enum_order_status' => $payment_responce_data['enum_order_status'],
                        'enum_tracking_key' => $payment_responce_data['enum_tracking_key'],
                        'enum_server' => $payment_responce_data['enum_server'],
                        'invoice_type' => "register_domain",
                    ]);
                }
            } 
            
            //Cart session empty
            //Session()->remove('cart'); 
            
            //set responce here
            $invoice_reponce = ["responce" => "Success", "message" => "Order Placed Successfully."];
            return $invoice_reponce;
        } else {
            //set responce here
            $invoice_reponce = ["responce" => "UnSuccess", "message" => "Order Not Place Successfully."];
            return $invoice_reponce;
        }  
    }
}
