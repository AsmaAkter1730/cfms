<?php

namespace App\Http\Controllers;
use App\Models\Milk_collection;
use App\Models\Addcow;
use App\Models\Milkstock;
use Illuminate\Http\Request;

class collectioncontroller extends Controller
{

    public function collection()
    {
         //$databasename=modelname::all();
        //  $milk_collection = Milk_collection::all();

            //$db name= modelname::paginate(number);
            $milk_collection =Milk_collection::with("Addcow")->paginate(6);
            
        return view('backend.layouts.collection.collection',compact('milk_collection'));
    }


    public function addmilkcollection()
    {
        $addmilk=Addcow::all();
        // dd($addmilk);
        return view('backend.layouts.collection.addmilkcollection',compact('addmilk'));
    }


    public function addmilkcollectionstore(Request $store)
    {
       // dd($store->all());
        Milk_collection::create([
            'collection_ID_No'=>$store->collection_ID_No,
            'cow_number'=>$store->cow_number,

            'date'=>$store->date,
            'liter'=>$store->liter,
            
        ]);


        // update stock

        Milkstock::create([
            'stock_in'=>$store->liter,
            'stock_out'=>0
        ]);
 
       
        return redirect()->route('collections');
    }
}
