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
       $store->validate([
        'cow_number' => 'required|min:1',
        'liter'=>'required'

    ]);

        Milk_collection::create([
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
    public function delete($id)
    {
        // dd($id);
      Milk_collection::destroy($id);
       return redirect()->back()->with('message','info.deleted successfully' );
    }
    public function edit($id)
{
    // dd($id);
    $addmilk=Addcow::all();
    
    $collection=Milk_collection::find($id);
     $categories=Milk_collection::all();
      return view('backend.layouts.collection.edit-collection',compact('categories','collection','addmilk'));
}

public function update(Request $store, $id)
   
{
    $collection=Milk_collection::find($id);
    $collection->update([
        //formname=>$variablename->(bladefile)name
        'cow_number'=>$store->cow_number,
        'date'=>$store->date,
        'liter'=>$store->liter,
   ]);
   return redirect()->route('collections');


 }

}
