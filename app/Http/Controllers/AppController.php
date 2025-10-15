<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // main pages
    public function index()
    {
        return view('pages.index');
    }

    // redirects
    public function redirectFacebook()
    {
        return redirect()->away('https://www.facebook.com/RomarConstructionServices');
    }
    
}
