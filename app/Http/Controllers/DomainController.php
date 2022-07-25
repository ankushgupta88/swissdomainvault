<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

use Session;

class DomainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function searchDomainResult(Request $request)
    {
        //Get Request
        $a = $request->a;
        $domain_name_req = $request->domain_name;
        
        $type = $request->type;
        
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
        
        //Test code start
        /*$test_api_url = $enom_api_url."/interface.asp?command=CheckLogin&uid=resellid&pw=resellpw&ResponseType=XML";
        // Load the API results into a SimpleXML object
        $test_xml = simplexml_load_file($test_api_url);
        
        echo "<pre>";
        print_r($test_xml);
        exit;*/
        //Test code end
            
        //If request type is domain
        if($type == "domain"){ 
            $api_url = $enom_api_url.'/interface.asp?UID='.$enom_api_username.'&PW='.$enom_api_password.'&SLD='.$domain_name.'&TLD='.$tld.'&Command=check&responsetype=xml&version=2&includeprice=1&includeproperties=1&includeeap=1';
          // print_r($api_url); die;
            // Load the API results into a SimpleXML object
            $api_xml = simplexml_load_file($api_url);
          
            //Check error
            if($api_xml->ErrCount == 0){
                // Read the results
                $rrpCode = $api_xml->Domains->Domain->RRPCode;
                $rrpText = $api_xml->Domains->Domain->RRPText;
                
                //check domain is availble or not 
                //210:Domain available,211:Domain not available
                // Perform actions based on results
                switch ($rrpCode) {
                    case 210:
                        $price_value = $api_xml->Domains->Domain->Prices->Registration;
                      
                        $domain_register_price = number_format((float)$price_value, 2, '.', '');
                                
                	    //echo "Domain available";
                	    ?>
                	    <div class="search_domain_info">
                            <div class="searchDomainInfo text-center">
                                <div class="primaryLookupResult">
                                   <p class="domain-available">  Congratulations!  <strong> <?php echo $api_xml->Domains->Domain->Name; ?> </strong>  is available!</p>
                                   <p class="domain-price"> <span class="price">CHF<?php echo $domain_register_price; ?></span> 
                                      <button class="btn primary-btn text-white fs-14 rounded-0 btn_add_to_cart" data-domain_name="<?php echo $api_xml->Domains->Domain->Name; ?>" data-whois="0"> 
                                            <span class="to-add">Add to Cart</span>
                                            <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                                        </button>
                                   </p>
                                </div>
                             </div>
                        </div>
                        <?php
                	  break;
                	case 211:
                	    
                	  //echo "Domain not available";
                    	?>
                    	<div class="search_domain_info">
                            <div class="searchDomainInfo text-center">
                                <div class="primaryLookupResult">
                                    <p class="domain-unavailable"> <strong> <?php echo $api_xml->Domains->Domain->Name; ?> </strong>  is unavailable </p> 
                                </div>
                             </div>
                        </div>
                        <?php 
                	  break;
                	default:
                	  echo $rrpCode . ' ' . $rrpText;
                      break;
                }
            } 
        }
        
        
        //If request type is spotlight
        if($type == "spotlight"){
            //Get Domain price with use PE_GETPRODUCTPRICE api com start
            $get_product_price_url_com = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=com&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_com = simplexml_load_file($get_product_price_url_com);
            
            $price_value_com = $product_price_xml_com->productprice->price;
            $domain_product_price_com = number_format((float)$price_value_com, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api com end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api ch start
            $get_product_price_url_ch = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=ch&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_ch = simplexml_load_file($get_product_price_url_ch);
            
            $price_value_ch = $product_price_xml_ch->productprice->price;
            $domain_product_price_ch = number_format((float)$price_value_ch, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api ch end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api me start
            $get_product_price_url_me = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=me&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_me = simplexml_load_file($get_product_price_url_me);
            
            $price_value_me = $product_price_xml_me->productprice->price;
            $domain_product_price_me = number_format((float)$price_value_me, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api ch end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api us start
            $get_product_price_url_us = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=us&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_us = simplexml_load_file($get_product_price_url_us);
            
            $price_value_us = $product_price_xml_us->productprice->price;
            $domain_product_price_us = number_format((float)$price_value_us, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api me end
                    
            ?>
            <div class="row search_spotlight_info">
                <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot">Hot</div>
                           <p class=" fw-bold mb-0"> .com </p>
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_com; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".com"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-2" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class=" fw-bold mb-0"> .ch</p>
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_ch; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".ch"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <p class=" fw-bold mb-0"> .me </p>
                           
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_me; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".me"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class="fw-bold mb-0"> .us </p>
                          
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_us; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".us"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                </div>
            <?php
        }
        
        //If request type is domain
        if($type == "suggestions"){
            //Get Domain SUGGESTIONS
            $suggestion_api_url = $enom_api_url."/interface.asp?command=GETNAMESUGGESTIONS&UID=".$enom_api_username."&PW=".$enom_api_password."&SearchTerm=".$domain_name."&MaxResults=10&ResponseType=XML";
            // Load the API results into a SimpleXML object
            $suggestion_xml = simplexml_load_file($suggestion_api_url);
            // echo "<pre>";
            // print_r($suggestion_xml); die;
            //Check error
            if($suggestion_xml->ErrCount == 0){ ?>
            <div class="suggestion_search_info">
                <?php 
                //Count Api responce
                $domainSuggestionCount = $suggestion_xml->DomainSuggestionCount;
                
                if($domainSuggestionCount >= 1){ ?>
                    <ul id="domainSuggestions" class="list-unstyled pt-2">
                        <?php
                        $domain_suggestion_count = 1;
                        foreach($suggestion_xml->DomainSuggestions->Domain as $domain){
                            //remove first array from list
                            if($domain_suggestion_count != 1){
                                $suggest_domain_name = strstr($domain, '.', true);
                                $suggest_domain_tld = substr($domain, strpos($domain, ".") + 1);
                                //Get Domain price with use PE_GETPRODUCTPRICE api
                                $get_product_price_url = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=".$suggest_domain_tld."&responsetype=xml";
                                // Load the API results into a SimpleXML object
                                $product_price_xml = simplexml_load_file($get_product_price_url);
                              
                               $price_value = $product_price_xml->productprice->price;
                                $domain_product_price = number_format((float)$price_value, 2, '.', '');
                                $domain_product_enabled = $product_price_xml->productprice->productenabled;
                                  
                                ?>
                                <li class="domain-suggestion py-2 px-2">
                                   <span class="domain"><?php echo strtolower($suggest_domain_name); ?> </span> <span class="extension fw-bold">.<?php echo $suggest_domain_tld; ?></span>  
                                   <div class="actions float-end">
                                      <span class="price pe-3">CHF<?php echo $domain_product_price; ?></span>
                                      <button class="btn btn-add-to-cart text-white fs-11 py-0 px-3 btn_add_to_cart" data-domain_name="<?php echo strtolower($suggest_domain_name).".".$suggest_domain_tld; ?>" data-whois="1">
                                        <?php // print_r($suggest_domain_tld); die;?>
                                            <span class="to-add">Add to Cart</span>
                                            <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                                      </button>
                                   </div>
                                </li>
                            <?php }
                        $domain_suggestion_count++; } ?>
                    </ul>
                <?php } ?>
            </div>
            <?php } 
        }
    }
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function configSearchDomainResult(Request $request)
    {
        //Get Request
        $domain_name_req = $request->domain_name;
        $domain_tld = $request->domain_tld;
        $type = $request->type; 
        
        //Check tld is exits in sting or not 
        if(strpos($domain_tld, ".") !== false){
            $domain_name = $domain_name_req;
            $tld = substr($domain_tld, strpos($domain_tld, ".") + 1);
        } else{
            $domain_name = $domain_name_req;
            $tld = "com";
        }
     
        //Call api variable
        $enom_api_url = config('app.ENOM_API_URL');
        $enom_api_username = config('app.ENOM_API_USERNAME');
        $enom_api_password = config('app.ENOM_API_PASSWORD');
            
        //If request type is domain
        if($type == "domain"){ 
            $api_url = $enom_api_url.'/interface.asp?UID='.$enom_api_username.'&PW='.$enom_api_password.'&SLD='.$domain_name.'&TLD='.$tld.'&Command=check&responsetype=xml&version=2&includeprice=1&includeproperties=1&includeeap=1';
            // Load the API results into a SimpleXML object
            $api_xml = simplexml_load_file($api_url);
            
            //Check error
            if($api_xml->ErrCount == 0){
                // Read the results
                $rrpCode = $api_xml->Domains->Domain->RRPCode;
                $rrpText = $api_xml->Domains->Domain->RRPText;
                
                //check domain is availble or not 
                //210:Domain available,211:Domain not available
                // Perform actions based on results
                switch ($rrpCode) {
                    case 210:
                        $price_value = $api_xml->Domains->Domain->Prices->Registration;
                        $domain_register_price = number_format((float)$price_value, 2, '.', '');
                                
                	    //echo "Domain available";
                	    ?>
                	    <div class="search_domain_info">
                            <div class="searchDomainInfo text-center">
                                <div class="primaryLookupResult">
                                   <p class="domain-available">  Congratulations!  <strong> <?php echo $api_xml->Domains->Domain->Name; ?> </strong>  is available!</p>
                                   <p class="domain-price"> <span class="price">CHF<?php echo $domain_register_price; ?></span> 
                                      <button class="btn primary-btn text-white fs-14 rounded-0 btn_add_to_cart" data-domain_name="<?php echo $api_xml->Domains->Domain->Name; ?>" data-whois="0"> 
                                            <span class="to-add">Add to Cart</span>
                                            <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                                        </button>
                                   </p>
                                </div>
                             </div>
                        </div>
                        <?php
                	  break;
                	case 211:
                	  //echo "Domain not available";
                    	?>
                    	<div class="search_domain_info">
                            <div class="searchDomainInfo text-center">
                                <div class="primaryLookupResult">
                                    <p class="domain-unavailable"> <strong> <?php echo $api_xml->Domains->Domain->Name; ?> </strong>  is unavailable </p> 
                                </div>
                             </div>
                        </div>
                        <?php 
                	  break;
                	default:
                	  echo $rrpCode . ' ' . $rrpText;
                      break;
                }
            } else {
                echo "<p class='unsuccess-msg'>Oops something wrong.</p>";
            }
        }
        
        
        //If request type is spotlight
        if($type == "spotlight"){
           
            //Get Domain price with use PE_GETPRODUCTPRICE api com start
            $get_product_price_url_com = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=com&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_com = simplexml_load_file($get_product_price_url_com);
           
            $price_value_com = $product_price_xml_com->productprice->price;
            $domain_product_price_com = number_format((float)$price_value_com, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api com end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api ch start
            $get_product_price_url_ch = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=ch&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_ch = simplexml_load_file($get_product_price_url_ch);
            
            $price_value_ch = $product_price_xml_ch->productprice->price;
            $domain_product_price_ch = number_format((float)$price_value_ch, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api ch end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api me start
            $get_product_price_url_me = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=me&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_me = simplexml_load_file($get_product_price_url_me);
            
            $price_value_me = $product_price_xml_me->productprice->price;
            $domain_product_price_me = number_format((float)$price_value_me, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api ch end
            
            //Get Domain price with use PE_GETPRODUCTPRICE api us start
            $get_product_price_url_us = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=us&responsetype=xml";
            // Load the API results into a SimpleXML object
            $product_price_xml_us = simplexml_load_file($get_product_price_url_us);
            
            $price_value_us = $product_price_xml_us->productprice->price;
            $domain_product_price_us = number_format((float)$price_value_us, 2, '.', '');
            //Get Domain price with use PE_GETPRODUCTPRICE api me end
                    
            ?>
            <div class="row search_spotlight_info">
                <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot">Hot</div>
                           <p class=" fw-bold mb-0"> .com </p>
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_com; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".com"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-2" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class=" fw-bold mb-0"> .ch</p>
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_ch; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".ch"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <p class=" fw-bold mb-0"> .me </p>
                           
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_me; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".me"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="spotlightcom text-center position-relative p-3">
                           <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                           <p class="fw-bold mb-0"> .us </p>
                          
                              <div class="domain-lookup-result">
                                 <span class="available price">CHF<?php echo $domain_product_price_us; ?></span>
                              </div>
                              <button class="btn btn-add-to-cart text-white fs-12 w-100 p-1 mt-2 btn_add_to_cart" data-domain_name="<?php echo $domain_name.".us"; ?>" data-whois="0">
                                    <span class="to-add">Add</span>
                                    <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                              </button>
                        </div>
                     </div>
                </div>
            <?php
        }
        
        //If request type is domain
        if($type == "suggestions"){
            //Get Domain SUGGESTIONS
            $suggestion_api_url = $enom_api_url."/interface.asp?command=GETNAMESUGGESTIONS&UID=".$enom_api_username."&PW=".$enom_api_password."&SearchTerm=".$domain_name."&MaxResults=10&ResponseType=XML";
            // Load the API results into a SimpleXML object
            $suggestion_xml = simplexml_load_file($suggestion_api_url);
            
            ?>
            <div class="suggestion_search_info">
                <?php 
                //Count Api responce
                $domainSuggestionCount = $suggestion_xml->DomainSuggestionCount;
                if($domainSuggestionCount >= 1){ ?>
                    <ul id="domainSuggestions" class="list-unstyled pt-2">
                        <?php
                        $domain_suggestion_count = 1;
                        foreach($suggestion_xml->DomainSuggestions->Domain as $domain){
                            //remove first array from list
                            if($domain_suggestion_count != 1){
                                $suggest_domain_name = strstr($domain, '.', true);
                                $suggest_domain_tld = substr($domain, strpos($domain, ".") + 1);
                                //Get Domain price with use PE_GETPRODUCTPRICE api
                                $get_product_price_url = $enom_api_url."/interface.asp?command=PE_GETPRODUCTPRICE&uid=".$enom_api_username."&pw=".$enom_api_password."&ProductType=10&tld=".$suggest_domain_tld."&responsetype=xml";
                                // Load the API results into a SimpleXML object
                                $product_price_xml = simplexml_load_file($get_product_price_url);
                                
                               $price_value = $product_price_xml->productprice->price;
                                $domain_product_price = number_format((float)$price_value, 2, '.', '');
                                $domain_product_enabled = $product_price_xml->productprice->productenabled;
                                
                                ?>
                                <li class="domain-suggestion py-2 px-2">
                                   <span class="domain"><?php echo strtolower($suggest_domain_name); ?> </span> <span class="extension fw-bold">.<?php echo $suggest_domain_tld; ?></span>  
                                   <div class="actions float-end">
                                      <span class="price pe-3">CHF<?php echo $domain_product_price; ?></span>
                                      <button class="btn btn-add-to-cart text-white fs-11 py-0 px-3 btn_add_to_cart" data-domain_name="<?php echo strtolower($suggest_domain_name).".".$suggest_domain_tld; ?>" data-whois="1">
                                            <span class="to-add">Add to Cart</span>
                                            <span class="added" style="display: none;"><i class="fa fa-shopping-cart fa-fw color-primary pe-3" aria-hidden="true"></i>Checkout</span>
                                      </button>
                                   </div>
                                </li>
                            <?php }
                        $domain_suggestion_count++; } ?>
                    </ul>
                <?php } ?>
            </div>
        <?php }
    }
    
    
    //Function for show alreay confure domain
    public function domainAlreadyConfigure(Request $request)
    {
        //Get Request
        $domain_name_req = $request->domain_name;
        $pid = $request->pid;
        
        //Store Session
        Session::put('domain_name', $domain_name_req); 
        Session::put('p_service_id', $pid);
        ?>
        <script>
            setTimeout(function(){
    			window.location.href = base_url+'/cart?a=confproduct&i=0';
    		},200)
        </script>
        <?php 
    }
    
    //Function for show alreay confure transfer domain domain
    public function domainAlreadyTransferConfigure(Request $request)
    {
        echo "Transfer your domain from another registrar";
    }
    
    //Function for show alreay confure my existing domain
    public function myExistingDomainConfigure(Request $request)
    {
        echo "I will use my existing domain and update my nameservers";
    }
    
    public  function domainList(){
        $domainid = "152533676";
return view('test');
        // $suggestion_api_url ="https://resellertest.enom.com/interface.asp?command=SL_AutoRenew&UID=resellid&PW=resellpw&ResponseType=XML&SLID=11&AutoRenew=True";
        // $suggestion_api_url1 = simplexml_load_file($suggestion_api_url);
        // echo"<pre>";
        // print_r($suggestion_api_url1); die;
      //   ResellID  resellpw resellid
    //       $enom_api_url = config('app.ENOM_API_URL');
    //     $enom_api_username = config('app.ENOM_API_USERNAME');
    //     $enom_api_password = config('app.ENOM_API_PASSWORD');
        
    //   $domain_name ="caresort12";

   //  $suggestion_api_url = $enom_api_url."?command=GetDNS&uid=".$enom_api_username."&pw=".$enom_api_password."&SLD=enom&TLD=com&responsetype=xml";
    //
   // $suggestion_api_url = $enom_api_url."?command=GetDNS&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=in&responsetype=xml";
   


 //"https://reseller.enom.com/interface.asp?command=GETDOMAINSRVHOSTS&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&ResponseType=XML";
 //  "https://reseller.enom.com/interface.asp?command=GetDomainSubServices&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=caresorts013&tld=uk&responsetype=xml";
  //  "https://reseller.enom.com/interface.asp?command=GetPOPExpirations&uid=".$enom_api_username."&pw=".$enom_api_password."&responsetype=xml";
 //"https://reseller.enom.com/interface.asp?command=getreghosts&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&ExtFormat=1&responsetype=XML";
 
 /// working
//  "https://reseller.enom.com/interface.asp?command=GetRegLock&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&ResponseType=xml";
 //"https://reseller.enom.com/interface.asp?command=getwhoiscontact&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&responsetype=xml";
 //  "https://reseller.enom.com/interface.asp?command=GetWPPSInfo&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&ResponseType=XML";
   //$suggestion_api_url = "https://reseller.enom.com/interface.asp?command=renewpopbundle&uid=".$enom_api_username."&pw=".$enom_api_password."&sld=".$domain_name."&tld=com&pakid=5686&quantity=1&responsetype=xml";
   
    ///"https://reseller.enom.com/interface.asp?command=SetDNSHost&uid=".$enom_api_username."&pw=".$enom_api_password."&zone=www.resellerdocs.com&address=127.0.0.1&DomainPassword=tester&responsetype=XML";
  
//  $suggestion_api_url = "https://reseller.enom.com/interface.asp?command=GETHOMEDOMAINLIST&uid=".$enom_api_username."&pw=".$enom_api_password."&display=25&orderby=tld&responsetype=xml";
//     echo "<pre>";
//     $suggestion_api_url1 = simplexml_load_file($suggestion_api_url);
//     print_r($suggestion_api_url1); die;
    
    }
    
}
