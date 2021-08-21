<?php

namespace App\Http\Controllers;
use App\Models\Milkstock ;
use Illuminate\Http\Request;

class Stockcontroller extends Controller
{
   public function stock()
   {
           $milkstocks =Milkstock ::paginate(6);
       return view('backend.layouts.stock.stock',compact('milkstocks'));
   }

   public function addstock()
   {
       return view('backend.layouts.stock.addstock');
   }
   public function stockstore(Request $store)
{

   // dd($store->all());
  //modelname::create([]);
  Milkstock ::create([
         //formname=>$variablename->(bladefile)name
         
         'stock_in'=>$store->stock_in,
         'stock_out'=>$store->stock_out,
         
    ]);
    


    return redirect()->route('stock');
}
}
