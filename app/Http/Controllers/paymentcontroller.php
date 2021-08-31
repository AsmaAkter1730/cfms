<?php

namespace App\Http\Controllers;
use App\Models\Payment;

use Illuminate\Http\Request;

class paymentcontroller extends Controller
{
    public function payment()
    {
        //$databasename=modelname::all();
           $payments = payment::all();

             //$db name= modelname::paginate(number);
             $payments =payment::paginate(6);
        return view('backend.layouts.payment',compact('payments'));
    }
    
    public function addpayment()
    {
        return view('backend.layouts.addpayment');
    }

    public function addpaymentstore(Request $store)
    {
        //dd($store->all());
        Payment::create([
     
       'Total_amount'=>$store->Total_amount,
       'Paid_amount'=>$store->Paid_amount,
       'due_amount'=>$store->due_amount,
       'date'=>$store->date
        ]);
        return redirect()->route('payment');
    }
}
