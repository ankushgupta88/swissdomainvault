<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\ServiceCat;
use App\Models\Service;
use App\Models\User;

use Session;

class CartController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //get login user data
        $user_info = Auth::user();
        
        //Get hosting with use static id
        $hosting_service = ServiceCat::where('id',5)->with('serviceList')->get();  
        
        //Check and Call service session id
        $p_service_id = "";
        if(Session('p_service_id')) {
            $p_service_id = Session('p_service_id');
        }
         
        //Get service according to id
        $service  =  Service::Where('id',$p_service_id)->with('categoryDetails')->first();
        
        return view('checkout.cart', compact('hosting_service', 'service', 'user_info'));
    }
    
    //Function for add to cart
    public function addToCart(Request $request)
    {
        $domain_name_req = $request->domain_name;
        $whois = $request->data_whois;
        $cart = session()->get('cart', []);
    
        //Check tld is exits in sting or not 
        if(strpos($domain_name_req, ".") !== false){
            $domain_name = strstr($domain_name_req, '.', true);
            $tld = substr($domain_name_req, strpos($domain_name_req, ".") + 1);
        } else{
            $domain_name = $request->domain_name;
            $tld = "com";
        }
        
        //Call api variable
        $enom_api_url = config('app.ENOM_API_URL');
        $enom_api_username = config('app.ENOM_API_USERNAME');
        $enom_api_password = config('app.ENOM_API_PASSWORD');
        
        //Add to cart api url
        $api_url = $enom_api_url.'/interface.asp?command=addtocart&uid='.$enom_api_username.'&pw='.$enom_api_password.'&sld='.$domain_name.'&tld='.$tld.'&producttype=register&responsetype=xml';
        // Load the API results into a SimpleXML object
        $api_xml = simplexml_load_file($api_url);
        
        // Convert into json
        $api_xml_convert = json_encode($api_xml);
  
        // Convert into associative array
        $array_responce = json_decode($api_xml_convert, true);
    
        //check responce exit or not
        if($array_responce){
            // Read the results
            $ItemName = @$array_responce['ItemName'];
            
            //echo $domain_name_req;
            //exit;
            if(isset($cart[$ItemName]['domain_data'])) {
                //$cart[$ItemName]['quantity']++;
            } else { 
                $cart[$ItemName]['domain_data'] = [
                    "domain_name" => $ItemName,
                    "domain_price" => @$array_responce['Price'],
                    "service_name" => "",
                    "service_category" => "", 
                    "domain_register_type" => "domain",
                    "domain_quantity" => 1,
                    "is_hosting" => "No",
                    "is_hosting_data" => ["domain_name" => ""],
                    "dnsmanagement" => "",
                    "idprotection" => "",
                    "emailforwarding" => "",
                ];  
            }
            
            //put value in session 
            Session()->put('cart', $cart);
        }
        //Chek cart session is exit or not
        if (Session::has('cart')) {
            echo count(Session::get('cart'));
        } else {
            echo 0;
        }
    }
    
    //Function for remove  cart session
    public function removeCart(Request $request)
    {
        $domain_name = $request->domain_name;
        $whois = $request->data_whois;
        
        $remove_cart = Session()->remove('cart');
        if($remove_cart){
             return back()->with('success','Cart Is Empty Successfully.');
         } else {
             return back()->with('unsuccess','Opps Something wrong!');
         }
    }
    
    //Function for remove item form cart
    public function removeCartItem($id)
    {
        $domain_name = $id;  
        //Remove _hosting_cart from domain name
        $domain_name_string = implode( "_hosting_cart", array_slice( explode( "_hosting_cart", $domain_name ), 0, -1 ) );
        
        $cart = Session()->get('cart');
        if($domain_name){
            $cart = session()->get('cart');
            if(isset($cart[$domain_name])) { 
                unset($cart[$domain_name]);
            }
            
            //Update old cart with dmain data
            if(isset($cart[$domain_name_string]['domain_data'])) {
                $cart[$domain_name_string]['domain_data']['is_hosting'] = "No";
                $cart[$domain_name_string]['domain_data']['is_hosting_data']["domain_name"] = "";
            }
            
            Session()->put('cart', $cart);
            return back()->with('success','Cart Item Is Removed Successfully.');
         } else {
             return back()->with('unsuccess','Opps Something wrong!');
         }
    }
    
    //Function for hosting add cart
    public function submitHostingCart(Request $request)
    {
        //Get Request
        $p_service_id = $request->p_service_id;
        $domain_name_req = $request->domain_name."_hosting_cart";
        $domain_name = $request->domain_name;
        $cart = session()->get('cart', []);
        
        //Get service according to id
        $service  =  Service::Where('id',$p_service_id)->with('categoryDetails')->first()->toArray();
        
        //Check if service is exit or not
        if($service){
            //Check cart item request
            if(isset($cart[$domain_name_req]['domain_data'])) {
                //$cart[$domain_name_req]['hosting_data']['quantity']++;
            } else { 
                $cart[$domain_name_req]['domain_data'] = [
                    "domain_name" => $domain_name,
                    "domain_price" => $service['price'],
                    "service_name" => $service['name'],
                    "service_category" => $service['category_details']['name'],
                    "domain_register_type" => "hosting",
                    "domain_quantity" => 1,
                    "dnsmanagement" => "",
                    "idprotection" => "",
                    "emailforwarding" => "", 
                ]; 
            }
        
            
            //Update old cart with hosting data
            if(isset($cart[$domain_name]['domain_data'])) {
                $cart[$domain_name]['domain_data']['is_hosting'] = "Yes";
                $cart[$domain_name]['domain_data']['is_hosting_data']["domain_name"] = $domain_name;
            }
            
            //put value in session 
            Session()->put('cart', $cart);
            ?>
            <script>
                setTimeout(function(){
        			window.location.href = base_url+'/cart?a=confdomains';
        		},200) 
            </script>
        <?php
        } else {
            echo '<p class="unsuccess-msg">Oops something wrong.</p>';
        }
    }
    
    //Function for submit domain configuration
    public function submitDomainConfigure(Request $request)
    {
        $cart = Session()->get('cart', []);
        
        //Check and update old cart
        if(Session::get('cart'))  {
            foreach(Session::get('cart') as $key => $cart2){
                //Domain name
                $domain_name_string = $cart2['domain_data']['domain_name']; 
                //empty addon data
                $cart[$domain_name_string]['domain_data']['dnsmanagement'] = "";
                $cart[$domain_name_string]['domain_data']['idprotection'] = "";
                $cart[$domain_name_string]['domain_data']['emailforwarding'] = "";
            }
        } 
       
        //Checkk if dnsmanagement is or not
        if ($request->has('dnsmanagement')) {
            $dnsmanagements = $request->dnsmanagement;
            
            foreach($dnsmanagements as $dnsmanagement){
                $domain_name_string =  $dnsmanagement;
                //Add new cart with old cart session
                if(isset($cart[$domain_name_string]['domain_data'])) {
                    $cart[$domain_name_string]['domain_data']['dnsmanagement'] = "DNS Management";
                } 
            }
        }  
        
        //Checkk if idprotection is or not
        if ($request->has('idprotection')) {
            $idprotections = $request->idprotection;
            
            foreach($idprotections as $idprotection){
                $domain_name_string =  $idprotection;
                //Add new cart with old cart session
                if(isset($cart[$domain_name_string]['domain_data'])) {
                    $cart[$domain_name_string]['domain_data']['idprotection'] = "ID Protection";
                }
            }
        } 
        
        //Checkk if emailforwarding is or not
        if ($request->has('emailforwarding')) {
            $emailforwardings = $request->emailforwarding;
            
            foreach($emailforwardings as $emailforwarding){
                $domain_name_string =  $emailforwarding;
                //Add new cart with old cart session
                if(isset($cart[$domain_name_string]['domain_data'])) {
                   $cart[$domain_name_string]['domain_data']['emailforwarding'] = "Email Forwarding";
                }
            }
        } 
         
        Session()->put('cart', $cart);
        return redirect('cart?a=view');
    }
    
    
    //Function for testing
    public function testing(Request $request)
    {
         //Call api variable
        $enom_api_url = config('app.ENOM_API_URL');
        $enom_api_username = config('app.ENOM_API_USERNAME');
        $enom_api_password = config('app.ENOM_API_PASSWORD');
        
        //Test code start
        $test_api_url = $enom_api_url.'/interface.asp?command=check&UID='.$enom_api_username.'&PW='.$enom_api_password.'&sld=hpthangtatesting&tld=com&responsetype=xml'; 
        // Load the API results into a SimpleXML object
        $test_xml = simplexml_load_file($test_api_url); 
        // echo "<pre>"; 
        // print_r($test_xml); 
        // echo "</pre>";
    }
}
