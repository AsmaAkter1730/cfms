<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashcontroller extends Controller
{
    public function dash()
    {
        return view('backend.main');
    }

    public function dashboard()
    {
        return view('backend.layouts.dashboard.dashboard');
    }
   
   
    

}
