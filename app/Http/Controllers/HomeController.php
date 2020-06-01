<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home.home');
    }
    //
    public function aboutus(){
        return view('user.aboutus.aboutus');
    }
    public function bookingDetails(){
        return view('user.booking.bookingDetails');
    }
}
