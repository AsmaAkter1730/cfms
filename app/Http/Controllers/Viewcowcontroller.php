<?php

namespace App\Http\Controllers;
use App\Models\Addcow;
use App\Models\Feed_monitoring;
use Illuminate\Http\Request;

class Viewcowcontroller extends Controller
{
    public function feedplan_cow()
    {
        
        $addcows = Addcow::with('Cowtype')->paginate(6);
        return view('backend.layouts.feedinfo.cow_feed',compact('addcows'));
    }



public function allcow_feedplan($id)
{
   // dd($id); 
   $plan=Feed_monitoring::where('cow_number',$id)->get();
  // dd($categories);
  return view ('backend.layouts.feedinfo.viewcow_feed',compact('plan'));
}
}
