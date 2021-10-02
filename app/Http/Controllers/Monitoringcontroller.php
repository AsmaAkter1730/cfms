<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine_monitoring;
use App\Models\Feed_monitoring;
use App\Models\Addcow;
use App\Models\Feed_item;
use App\Models\Vaccine_list;

class Monitoringcontroller extends Controller


//Vaccine_plan

{

  public function vaccine()
  {
    //$databasename=modelname::all();
    // $Vaccine_monitoring = Vaccine_monitoring::all();

    //$variable name= modelname::paginate(number);
    $Vaccine_monitoring = Vaccine_monitoring::with('vaccine_name')->paginate(6);

    return view('backend.layouts.vaccineinfo.vaccine', compact('Vaccine_monitoring'));
  }

  public function addvaccine()

  {
    $Cows = Addcow::where('status', 'available')->get();
    $Vaccine_monitoring = Vaccine_list::all();
    return view('backend.layouts.vaccineinfo.addvaccine', compact('Cows', 'Vaccine_monitoring'));
  }



  //post
  public function addvaccinestore(Request $store)
  {
    //dd($store->all());
    Vaccine_monitoring::create([
      'vaccine_id' => $store->vaccine_name,
      'cow_number' => $store->cow_number,
      'vaccine_date' => $store->vaccine_date,
      'Remarks' => $store->Remarks
    ]);
    return redirect()->route('vaccines');
  }

  public function delete($id)
  {
    // dd($id);
    Vaccine_monitoring::destroy($id);
    return redirect()->back()->with('message', 'info deleted successfully');
  }

  public function vaccine_edit($id)
  {
    // dd($id);
    $Cows = Addcow::all();
    $Vaccine_monitoring = Vaccine_list::all();
    $vaccine = Vaccine_monitoring::find($id);
    $categories = Vaccine_monitoring::all();
    return view('backend.layouts.vaccineinfo.edit-vaccine', compact('categories', 'vaccine', 'Vaccine_monitoring', 'Cows'));
  }

  public function vaccine_update(Request $store, $id)

  {
    $vaccine = Vaccine_monitoring::find($id);
    $vaccine->update([
      //formname=>$variablename->(bladefile)name
      'vaccine_id' => $store->vaccine_name,
      'cow_number' => $store->cow_number,
      'vaccine_date' => $store->vaccine_date,
      'Remarks' => $store->Remarks
    ]);
    return redirect()->route('vaccines');
  }



  ///vaccine List

  public function vaccine_list()
  {
    //$variable name= modelname::paginate(number);
    $Vaccine_list = Vaccine_list::paginate(6);
    return view('backend.layouts.vaccineinfo.vaccine_list', compact('Vaccine_list'));
  }


  public function addvaccine_name()

  {
    $Vaccine_name = Vaccine_list::all();
    return view('backend.layouts.vaccineinfo.addvaccine_list', compact('Vaccine_name'));
  }



  //post
  public function addvaccine_namestore(Request $store)
  {
    //dd($store->all());
    Vaccine_list::create([
      'vaccine_name' => $store->vaccine_name,
      'purchase_date' => $store->purchase_date,
      'expired_date' => $store->expired_date
    ]);

    return redirect()->route('vaccine_list');
  }

  public function vaccine_list_delete($id)
  {
    // dd($id);
    Vaccine_list::destroy($id);
    return redirect()->back()->with('message', 'info deleted successfully');
  }


  public function vaccine_list_edit($id)
  {
    // dd($id);

    $list = Vaccine_list::find($id);
    $categories = Vaccine_list::all();
    return view('backend.layouts.vaccineinfo.edit-vaccinelist', compact('categories', 'list'));
  }

  public function vaccine_list_update(Request $store, $id)

  {
    $list = Vaccine_list::find($id);
    $list->update([
      //formname=>$variablename->(bladefile)name
      'vaccine_name' => $store->vaccine_name,
      'purchase_date' => $store->purchase_date,
      'expired_date' => $store->expired_date
    ]);
    return redirect()->route('vaccine_list');
  }






  //feed_plan



  public function feed()
  {
    //$databasename=modelname::all();
    $feed_monitoring = Feed_monitoring::all();


    //$db name= modelname::paginate(number);
    $feed_monitoring = Feed_monitoring::with('Feed_item')->paginate(6);
    //dd($feed_monitoring);

    return view('backend.layouts.feedinfo.feed', compact('feed_monitoring'));
  }




  public function addfeed()
  {

    $cows = Addcow::where('status', 'available')->get();
    $feed_monitoring = Feed_item::all();
    //  dd($feed_monitoring->all());
    return view('backend.layouts.feedinfo.addfeed', compact('feed_monitoring', 'cows'));
  }



  public function addfeedstore(Request $store)
  {
    // dd($store->all());
    //modelname::create([]);
    //formname=>$variablename->(bladefile)name
    Feed_monitoring::create([
      'feed_id' => $store->Feed_item,
      'cow_number' => $store->cow_number,
      'Remarks' => $store->Remarks,
      'date' => $store->date,

      'Quantity' => $store->Quantity,
      'Feed_time' => $store->Feed_time
    ]);
    return redirect()->route('feeds');
  }

  public function feed_delete($id)
  {
    // dd($id);
    Feed_monitoring::destroy($id);
    return redirect()->back()->with('message', 'info deleted successfully');
  }
  public function feed_edit($id)
  {
    // dd($id);

    $feed_monitoring = Feed_item::all();

    $cows = Addcow::all();
    $item = Feed_monitoring::find($id);
    $categories = Feed_monitoring::all();
    return view('backend.layouts.feedinfo.edit-feed', compact('categories', 'item', 'cows', 'feed_monitoring'));
  }

  public function feed_update(Request $store, $id)

  {
    $item = Feed_monitoring::find($id);
    $item->update([
      //formname=>$variablename->(bladefile)name
      'feed_id' => $store->Feed_item,
      'cow_number' => $store->cow_number,
      'Remarks' => $store->Remarks,
      'date' => $store->date,

      'Quantity' => $store->Quantity,
      'Feed_time' => $store->Feed_time
    ]);
    return redirect()->route('feeds');
  }





  ///Feed_item_list

  public function feed_item() //table
  {
    //$variable name= modelname::paginate(number);
    $feed_item = Feed_item::paginate(6);
    return view('backend.layouts.feedinfo.feed_item', compact('feed_item'));
  }

  public function addfeed_item() // form
  {

    $feed_item = Feed_item::all();
    return view('backend.layouts.feedinfo.addfeed_item', compact('feed_item'));
  }




  public function addfeed_itemstore(Request $store) // form post
  {
    //dd($store->all());
    //modelname::create([]);
    //formname=>$variablename->(bladefile)name
    Feed_item::create([
      'Feed_item' => $store->Feed_item,
      'description' => $store->description,
      'status' => $store->status
    ]);
    return redirect()->route('feed_items');
  }

  public function feed_item_delete($id)
  {
    // dd($id);
    feed_item::destroy($id);
    return redirect()->back()->with('message', 'info deleted successfully');
  }


  public function feed_item_edit($id)
  {
    // dd($id);

    $item = Feed_item::find($id);
    $categories = Feed_item::all();
    return view('backend.layouts.feedinfo.edit-feeditem', compact('categories', 'item'));
  }

  public function feed_item_update(Request $store, $id)

  {
    $item = Feed_item::find($id);
    $item->update([
      //formname=>$variablename->(bladefile)name
      'Feed_item' => $store->Feed_item,
      'description' => $store->description,
      'status' => $store->status
    ]);
    return redirect()->route('feed_items');
  }
}
