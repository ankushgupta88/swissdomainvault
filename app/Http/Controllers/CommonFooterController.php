<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonFooterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function slaAggrement()
    {
        return view('sla-aggrement');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function termsOfUse()
    {
        return view('terms-of-use');
    }
}
