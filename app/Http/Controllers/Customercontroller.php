<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    public function customer()
   {
     //db name=modelname::all();
    $customer = Customer::all();
    //$variable name= modelname::paginate(number);
    $customer = Customer::paginate(6);

       return view('backend.layouts.customer.customer',compact('customer'));
   }
   public function addcustomer()
   {
       return view('backend.layouts.customer.addcustomer');
   }

   //post
   public function addcustomerstore(Request $store)
   {


    //dd($store->all());

      
   
      // dd($store->all());
       //modelname::create([]);
       Customer::create([
       'cus_name'=>$store->cus_name,
      
       'email'=>$store->email,
       'cus_mobile'=>$store->cus_mobile,
       'address'=>$store->address

       ]);
       return redirect()->route('customers');
   }
   public function delete($id)
   {
       // dd($id);
      Customer::destroy($id);
      return redirect()->back()->with('message','customer deleted successfully' );
   }

}
