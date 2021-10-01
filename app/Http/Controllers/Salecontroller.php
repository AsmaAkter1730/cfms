<?php

namespace App\Http\Controllers;
use App\Models\Milk_sale;
use App\Models\Cow_sale;
use App\Models\Addcow;
use App\Models\Milk_collection;
use App\Models\Milkstock;
use App\Models\Customer;
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

       // $cow_sales = Addcow::all();
        $cow_sales = Addcow::where('status','available')->get();
        $customer = Customer::all();
       return view('backend.layouts.cowsale.addcowsale',compact('cow_sales','customer'));

    }
    public function addcowsalestore(Request $store)
    {

        if($store->amount > $store->paidamount){
       //dd($store->all());
        Cow_sale::create([
       
        'cow_number'=>$store->cow_number,
        'customer_id'=>$store->customer_id,
        'paidamount'=>$store->paidamount,
        'amount'=>$store->amount,
        'date'=>$store->date,
        'remarks'=>$store->remarks

        ]);
  


      //updatecow sale sold
      
        $cow=Addcow::find($store->cow_number);
        $cow->update([
            'status'=>'sold'
        ]);

   
        return redirect()->route('cowsales');
    
}else{
    return redirect()->route('cowsales')->with('message','more than pay amount tk not accepted' );

}
}
    public function cowsale_delete($id)
    {
        // dd($id);
      Cow_sale::destroy($id);
       return redirect()->back()->with('message','info.deleted successfully' );
    }

    public function cowsale_edit($id)
    {
        // dd($id);
        $cow_sales = Addcow::all();
        $sale=Cow_sale::find($id);
         $categories=Cow_sale::all();
         $customer = Customer::all();
          return view('backend.layouts.cowsale.edit-cowsale',compact('categories','sale','cow_sales','customer'));
    }
    
    public function cowsale_update(Request $store, $id)
       
    {
     $sale=Cow_sale::find($id);
        $sale->update([
            //formname=>$variablename->(bladefile)name
            
        'cow_number'=>$store->cow_number,
        'customer_id'=>$store->customer_id,
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
        $invoice=Customer::all();

        return view('backend.layouts.milksale.milksale',compact('milk_sales','invoice'));
    }
    public function addmilksale()
    {

        $milk_sales = Milk_collection::all();
        $customer = Customer::all();
        return view('backend.layouts.milksale.addmilksale',compact('milk_sales','customer'));
    }

    public function addmilksalestore(Request $store)
    {
        //dd($store->all());
        
        if($store->pay_amount > $store->paidamount){
            Milk_sale::create([
        
                'customer_id'=>$store->customer_id,
             
             'paidamount'=>$store->paidamount,
             'liter'=>$store->liter,
             'price_perliter'=>$store->price_perliter,
             'pay_amount'=>$store->pay_amount,
             'date'=>$store->date
            ]);
    
            Milkstock::create([
                'stock_out'=>$store->liter,
                'stock_in'=>0
            ]);
            return redirect()->route('milksales');
        }else{
            return redirect()->route('milksales')->with('message','more than pay amount tk not accepted' );
        
        }

       
    }

    public function milksale_delete($id)
    {
        // dd($id);
      Milk_sale::destroy($id);
       return redirect()->back()->with('message','info.deleted successfully' );
    }
    public function milksale_edit($id)
    {
        // dd($id);
        
        $item=Milk_sale::find($id);
         $categories=Milk_sale::all();
         $customer = Customer::all();
          return view('backend.layouts.milksale.edit-milksale',compact('categories','item','customer'));
    }
    
    public function milksale_update(Request $store, $id)
       
    {
     $item=Milk_sale::find($id);
        $item->update([
            //formname=>$variablename->(bladefile)name
            'customer_id'=>$store->customer_id,
           
            'pay_amount'=>$store->pay_amount,
            'liter'=>$store->liter,
            'price_perliter'=>$store->price_perliter
       ]);
       return redirect()->route('milksales');
    
    
     }
   
}
