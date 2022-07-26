<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceCat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hosting = ServiceCat::where('is_featured', 'Yes')
                                ->where('status', 'Activate')
                                ->get(); 
        return view('index',compact('hosting'));
    }
}
