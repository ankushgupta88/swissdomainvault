<?php

use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


//Frontend common routing start here
Route::get('/','HomeController@index'); 
Route::get('/hosting-service','HostingServiceController@index'); 
Route::POST('/search-domain-result','DomainController@searchDomainResult'); 
Route::POST('/search-config-domain-result','DomainController@configSearchDomainResult'); 
Route::POST('/domain-already-configure','DomainController@domainAlreadyConfigure'); 
Route::POST('/domain-transfer-configure','DomainController@domainAlreadyTransferConfigure'); 
Route::POST('/my-existing-domain-configure','DomainController@myExistingDomainConfigure');  
Route::get('/domain-list','DomainController@domainList'); 


//Testing route
Route::get('/testing','CartController@testing');

//Cart
Route::get('/cart','CartController@index');
Route::get('/add-to-cart','CartController@addToCart');
Route::get('/remove-cart','CartController@removeCart');   
Route::get('/remove-cart-item/{id}','CartController@removeCartItem');   
Route::POST('/submit-hosting-cart','CartController@submitHostingCart');
Route::POST('/submit-domain-configure','CartController@submitDomainConfigure')->name('submit.domain.configure');

//Checkout 
Route::POST('/submit-checkout','CheckoutController@submitCheckout')->name('submit.checkout');

Route::get('/web-hosting','SharedHostingController@index');
Route::get('/reseller-hosting','ResellerHostingController@index');
Route::get('/vps-hosting','VpsHostingController@index');
Route::get('/dedicated-servers','DedicatedHostingController@index');
Route::get('/ssl-certificates','SslSertificateController@index'); 

Route::get('/Knowledge-base','KnowledgeBaseController@index'); 
Route::get('/announcements','AnnouncementsController@index'); 

Route::get('/about-us','AboutusController@index'); 

Route::get('/contact','ContactController@index'); 
Route::post('/submit-contact-us-email', 'ContactController@submitContactUsEmail')->name('submit.contact.us.email');

Route::get('/domain-search','DomainSearchController@index'); 
Route::get('/transfer-domain','TransferDomainController@index');

Route::get('/our-history','OurHistoryController@index'); 
Route::get('/our-awards','OurAwardsController@index'); 

Route::get('/privacy-policy','CommonFooterController@privacyPolicy'); 
Route::get('/terms-of-use','CommonFooterController@slaAggrement'); 
Route::get('/sla-aggrement','CommonFooterController@termsOfUse'); 

Route::get('/downloads','DownloadsController@index');


//Frontend common routing end here 

//Admin common routing start here
	Route::get('admin-login','Admin\LoginController@index');  
	Route::post('/admin-submit', 'Admin\LoginController@dologin')->name('admin.login.submit');
//Admin common routing end here 

Route::group(['middleware' => 'auth'], function(){
    
    // Customer Only
    Route::group(['middleware' => 'customer'], function(){
        Route::get('/clientarea','ClientAreaController@index');
        Route::get('/clientarea/edit-account','ClientAreaController@editAccount');
        Route::post('/clientarea/update-account-info','ClientAreaController@updateAccountInfo')->name('clientarea.update.account.info'); 
       // Route::get('/clientarea/payment-method','ClientAreaController@paymentMethod');
        Route::get('/clientarea/sub-account','ClientAreaController@subAccount');
        Route::get('/clientarea/change-password','ClientAreaController@changePassword');
        Route::post('/clientarea/update-change-password','ClientAreaController@updateChangePassword')->name('clientarea.update.change.password');  
        Route::get('/clientarea/security-setting','ClientAreaController@securitySetting');
        Route::get('/clientarea/email-history','ClientAreaController@emailHistory');
        Route::get('/clientarea/domain-support-ticket','ClientAreaController@domainSupportTicket');
        Route::get('/clientarea/hosting-support-ticket','ClientAreaController@hostingSupportTicket');
        Route::get('/clientarea/my-domain','ClientAreaController@myDomain');
        Route::get('/clientarea/domain-renew','ClientAreaController@domainRenew');
        Route::get('/clientarea/new-tlds','ClientAreaController@newTlds'); 
        Route::get('/clientarea/my-invoice','ClientAreaController@myInvoice'); 
        Route::get('/clientarea/my-quotes','ClientAreaController@myQuotes'); 
        Route::get('/clientarea/add-funds','ClientAreaController@addFunds'); 
        Route::get('/clientarea/my-services','ClientAreaController@myServices'); 
        
        Route::get('/clientarea/affiliates','AffiliatesController@index'); 
        Route::get('/support-tickets','SupportTicketsController@index'); 
        Route::get('/open-ticket','SupportTicketsController@openTicket');
        Route::get('/server-status','ServerStatusController@index'); 
    });
      
    // Admin Only
    Route::group(['middleware' => 'admin'], function(){
         Route::get('/admin/dashboard','Admin\DashboardController@index');
         Route::get('/admin/add-service','Admin\ServiceController@addService');
         Route::post('/admin/submit-service', 'Admin\ServiceController@submitService')->name('admin.service.submit'); 
         Route::get('/admin/all-services','Admin\ServiceController@index');
         Route::get('/admin/edit-service/{id}', 'Admin\ServiceController@details');
         Route::post('/admin/update-service/{id}', 'Admin\ServiceController@updateService')->name('admin.service.update');
        Route::get('/admin/delete-service/{id}', 'Admin\ServiceController@delete');
         
         
         Route::get('/admin/add-service-category','Admin\ServiceCatController@addService');
         Route::post('/admin/submit-service-category', 'Admin\ServiceCatController@submitCategory')->name('admin.service.cat.submit');
         Route::get('/admin/all-service-category','Admin\ServiceCatController@index');
         Route::get('/admin/edit-service-category/{id}', 'Admin\ServiceCatController@details');
        Route::post('/admin/update-service-category/{id}', 'Admin\ServiceCatController@updateCategory')->name('admin.service.cat.update');
        Route::get('/admin/delete-service-category/{id}', 'Admin\ServiceCatController@delete');
         
         Route::post('/admin-logout', 'Admin\DashboardController@logout')->name('admin.logout');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 