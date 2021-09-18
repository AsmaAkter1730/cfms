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

       // $cow_sales = Addcow::all();
        $cow_sales = Addcow::where('status','available')->get();
       return view('backend.layouts.cowsale.addcowsale',compact('cow_sales'));

    }
    public function addcowsalestore(Request $store)
    {

        $store->validate([
            'Invoice_no' => 'required',
            'cus_name' => 'required',
            'email' => 'required|email',
            

        ]);
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


      //updatecow sale sold
      
        $cow=Addcow::find($store->cow_number);
        $cow->update([
            'status'=>'sold'
        ]);

        return redirect()->route('cowsales');
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
          return view('backend.layouts.cowsale.edit-cowsale',compact('categories','sale','cow_sales'));
    }
    
    public function cowsale_update(Request $store, $id)
       
    {
     $sale=Cow_sale::find($id);
        $sale->update([
            //formname=>$variablename->(bladefile)name
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
          return view('backend.layouts.milksale.edit-milksale',compact('categories','item'));
    }
    
    public function milksale_update(Request $store, $id)
       
    {
     $item=Milk_sale::find($id);
        $item->update([
            //formname=>$variablename->(bladefile)name
            'cutomer_name'=>$store->cutomer_name,
            'date'=>$store->date,
            'liter'=>$store->liter,
            'price_perliter'=>$store->price_perliter
       ]);
       return redirect()->route('milksales');
    
    
     }
   
}
