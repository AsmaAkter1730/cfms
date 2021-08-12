<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine_monitoring;
use App\Models\Feed_monitoring;




class Monitoringcontroller extends Controller
{
    
    public function vaccine()
    {
       //$databasename=modelname::all();
        $Vaccine_monitoring = Vaccine_monitoring::all();

        return view('backend.layouts.vaccineinfo.vaccine',compact('Vaccine_monitoring'));
    }

    public function addvaccine()
    {
        return view('backend.layouts.vaccineinfo.addvaccine');
    }
    public function addfeed()
    {
        return view('backend.layouts.feedinfo.addfeed');
    }
   


    //post
    public function addvaccinestore(Request $store)
    {
      //dd($store->all());
      Vaccine_monitoring::create([
          'cow_number'=>$store->cow_number,
          'vaccine_date'=>$store->vaccine_date,
          'Remarks'=>$store->Remarks
      ]);
      return redirect()->route('vaccines');
    }



   public function feed()
    {
           //$databasename=modelname::all();
           $feed_monitoring = Feed_monitoring::all();
        return view('backend.layouts.feedinfo.feed',compact('feed_monitoring'));
    }

    public function addfeedstore(Request $store)
    {
        //dd($store->all());
         //modelname::create([]);
  //formname=>$variablename->(bladefile)name
  Feed_monitoring::create([
    'cow_number'=>$store->cow_number,
    'Remarks'=>$store->Remarks,
    'date'=>$store->date,
    'Feed_item'=>$store->Feed_item,
    'Quality'=>$store->Quality,
    'Feed_time'=>$store->Feed_time
    ]); 
    return redirect()->route('feeds');
    }



 

}
