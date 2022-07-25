<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportTicketsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('support.tickets');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function openTicket()
    {
        return view('support.open-ticket');
    }
}
