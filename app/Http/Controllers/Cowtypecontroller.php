<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cowtype;
use App\Models\Addcow;
use CreateAddcowsTable;

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

//view the cow under the cowtype
public function allcow($id)
{
    // dd($id);
    $categories=Addcow::where('cowtype_id',$id)->get();
    //        $category=Category::with('products')->find($id);//using relationshop
   // dd($categories);
 return view ('backend.layouts.cowtype.viewcow-type',compact('categories'));
}

}
