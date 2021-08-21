<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cowtype;

class Cowtypecontroller extends Controller
{
    public function addcow_type()
    {
        $cowtype = Cowtype::paginate(6);;
        return view('backend.layouts.cowtype.cowtype',compact("cowtype"));
    }
    public function typelist()
    {
        return view('backend.layouts.cowtype.addcowtype');
    }
//post

public function cowtypelist(Request $store)
{

   // dd($store->all());
  //modelname::create([]);
    Cowtype::create([
         //formname=>$variablename->(bladefile)name
         'cow_type'=>$store->cow_type,   
         'status'=>$store->status,
         'color'=>$store->color
    ]);
    


    return redirect()->route('addcowtype');
}

}
