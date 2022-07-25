<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Invoice;

class ClientAreaController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('clientarea.index');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editAccount()
    {
         $login_user_id = auth()->id();
        //Get login user details
        $user_info = User::where('id',$login_user_id)->where("user_type", "Customer")->get(); 
        return view('clientarea.edit-account', compact('user_info'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateAccountInfo(Request $request)
    {
        die('here');
        //validation rule
        $validated = request()->validate([ 
            //'email' => 'required|email|unique:users,email',
        ]); 
       
        
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
        
        //update user account info
        $login_user_id = auth()->id();
        $update_info = User::where('id',$login_user_id)
                    ->where("user_type", "Customer"             )
                    ->update([
                        'mobile' => $request['mobile'],
                        'companyname' => $request['companyname'],
                        'address' => $request['address'],
                        'address_two' => $request['address_two'],
                        'city' => $request['city'],
                        'state' => $request['state'],
                        'postcode' => $request['postcode'],
                        'country' => $request['country'],
                        'mailing_list' => $mailing_list,
                        'term_condition' =>  $term_condition,
                    ]);
        //Check update or not
        if($update_info){
             return back()->with('success','Account details updated Successfully.');
        } else {
           return back()->with('unsuccess','Opps Something wrong!');
        }
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function paymentMethod()
    {
        return view('clientarea.payment-method');
    }*/
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subAccount()
    {
        return view('clientarea.sub-account');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function changePassword()
    {
        return view('clientarea.change-password');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateChangePassword(Request $request)
    {
        //validation rule
        $validated = request()->validate([ 
            'old_password' => 'required',
            'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ]); 
        
        //update user password
        $user = auth()->user();
        if(!Hash::check($request['old_password'], $user->password)){
            return back()->with('unsuccess','Old password does not match');
        } else {
            $update_pass = User::where('id', $user->id)
                ->where('user_type', 'Customer')
                ->update([
                    'password' => bcrypt($request['new_password']),
                ]);
            if($update_pass){
                return back()->with('success','Your Password is updated successfully!');
            } else {
                return back()->with('unsuccess','Oops something went wrong');
            }
        }
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function securitySetting()
    {
        return view('clientarea.security-setting');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function emailHistory()
    {
        return view('clientarea.email-history');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function domainSupportTicket()
    {
        
        return view('clientarea.domain-support-ticket');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hostingSupportTicket()
    {
        return view('clientarea.hosting-support-ticket');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myDomain()
    {
        return view('clientarea.my-domain');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function domainRenew() 
    {
        return view('clientarea.domain-renew');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newTlds() 
    {
        return view('clientarea.new-tlds');
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myInvoice() 
    {
        $this->data['invoice'] =Invoice::where('user_id',Auth::id())->get()->toArray();
        return view('clientarea.my-invoice',$this->data);
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myQuotes() 
    {
        return view('clientarea.my-quotes');
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addFunds() 
    { 
        return view('clientarea.add-funds');
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myServices() 
    { 
        return view('clientarea.my-services');
    } 
    
}
