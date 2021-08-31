<?php

namespace App\Http\Controllers;
use App\Models\Milk_sale;
use App\Models\Cow_sale;
use App\Models\Addcow;
use App\Models\Milk_collection;
use App\Models\Milkstock;
use Illuminate\Http\Request;

class Salecontroller extends Controller
{
    public function cowsale()
    {
  //$databasename=modelname::all();
//   $cow_sales = Cow_sale::all();

   //$db name= modelname::paginate(number);
   $cow_sales = Cow_sale::paginate(6);


        return view('backend.layouts.cowsale.cowsale',compact('cow_sales'));
    }
    public function addcowsale()
    {

        $cow_sales = Addcow::all();
        
        
        return view('backend.layouts.cowsale.addcowsale',compact('cow_sales'));

    }
    public function addcowsalestore(Request $store)
    {
       // dd($store->all());
        Cow_sale::create([
        'Invoice_no'=>$store->Invoice_no,
        'cow_number'=>$store->cow_number,
        'cus_name'=>$store->cus_name,
        'email'=>$store->email,
        'cus_mobile'=>$store->cus_mobile,
        'amount'=>$store->amount,
        'date'=>$store->date,
        'remarks'=>$store->remarks

        ]);
        return redirect()->route('cowsales');
    }





    public function milksale()
    {

          //$databasename=modelname::all();
          $milk_sales = Milk_sale::all();

           //$db name= modelname::paginate(number);
         $milk_sales = Milk_sale::paginate(6);


        return view('backend.layouts.milksale.milksale',compact('milk_sales'));
    }
    public function addmilksale()
    {

        $milk_sales = Milk_collection::all();

        return view('backend.layouts.milksale.addmilksale',compact('milk_sales'));
    }

    public function addmilksalestore(Request $store)
    {
        //dd($store->all());


        Milk_sale::create([
        
         'cutomer_name'=>$store->cutomer_name,
         'date'=>$store->date,
         'liter'=>$store->liter,
         'price_perliter'=>$store->price_perliter

        ]);

        Milkstock::create([
            'stock_out'=>$store->liter,
            'stock_in'=>0
        ]);
 
       
        return redirect()->route('milksales');
    }

   
   
}
