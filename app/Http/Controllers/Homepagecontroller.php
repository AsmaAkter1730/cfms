<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepagecontroller extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage');
    }
    
}
