<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurAwardsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('our-awards');
    }
}
