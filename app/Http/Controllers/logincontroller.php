<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class logincontroller extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }
    public function loginPost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
   // dd($request->all());
        //2 token except and only

        $credentials=$request->except('_token');
           //dd($credentials);
        if(Auth::attempt($credentials))
        { 
            //user logged in
            return redirect()->route('dashboards');
           
        }
            return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('logins');
    }
 
       
    

}
