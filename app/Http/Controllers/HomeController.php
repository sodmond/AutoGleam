<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function booking()
    {
        return view('booking');
    }

    public function giftCard()
    {
        return view('gift_card');
    }

    public function contact()
    {
        return view('contact');
    }
}
