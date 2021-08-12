<?php

namespace App\Http\Controllers;
use App\Models\Milk_collection;

use Illuminate\Http\Request;

class collectioncontroller extends Controller
{

    public function collection()
    {
         //$databasename=modelname::all();
         $milk_collection = Milk_collection::all();
        return view('backend.layouts.collection.collection',compact('milk_collection'));
    }


    public function addmilkcollection()
    {
        return view('backend.layouts.collection.addmilkcollection');
    }


    public function addmilkcollectionstore(Request $store)
    {
       // dd($store->all());
        Milk_collection::create([
            'collection_ID_No'=>$store->collection_ID_No,
            'cow_number'=>$store->cow_number,
            'date'=>$store->date,
            'liter'=>$store->liter,
            'price_perliter'=>$store->price_perliter
        ]);
        return redirect()->route('collections');
    }
}
