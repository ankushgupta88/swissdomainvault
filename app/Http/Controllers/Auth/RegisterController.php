<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //check mailing_list
        $mailing_list = "No";
        if(!empty($data['mailing_list'])){
            $mailing_list = "Yes";
        }

        //check term_condition
        $term_condition = "No";
        if(!empty($data['term_condition'])){
            $term_condition = "Yes";
        }

        //Full name
        $full_name = $data['first_name']." ".$data['last_name'];

        $create_user =  User::create([
            'name' => $full_name,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['phonenumber'],
            'user_type' => 'Customer',
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'companyname' => $data['companyname'],
            'address' => $data['address'],
            'address_two' => $data['address_two'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postcode' => $data['postcode'],
            'country' => $data['country'],
            'currency' => $data['currency'],
            'mailing_list' => $mailing_list,
            'term_condition' =>  $term_condition,
        ]);

        return $create_user; 
    }
}
