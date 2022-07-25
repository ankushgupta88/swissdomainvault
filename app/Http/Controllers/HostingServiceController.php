<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceCat;

class HostingServiceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //Get slug form url
        $slug = $request->slug;
        $hosting_service = ServiceCat::where('slug',$slug)->with('serviceList')->get(); 
        
        return view('hosting.hosting-services-list', compact('hosting_service'));
    }
}
