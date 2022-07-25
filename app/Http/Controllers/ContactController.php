<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }
    
    //function for submit conatct us email
    public function submitContactUsEmail(Request $request){
        //validation rule
        $validated = request()->validate([ 
            'full_name' => 'required', 'string', 'max:255',
            'email' => 'required|email|unique:users,email',
        ]);
        
        $data = [
              'full_name' => $request['full_name'],
              'email' => $request['email'],
              'subject' => $request['subject'],
              'message' => $request['message'],
        ];
    	$send = Mail::to("sunilkumar.caresortsolutions@gmail.com")->send(new ContactEmail($data));
    	if(!$send){
             return back()->with('success','Email Send Successfully.');
        } else {
           return back()->with('unsuccess','Opps Something wrong!');
        }
    }
}
