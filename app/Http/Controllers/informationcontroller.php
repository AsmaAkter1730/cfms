<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addcow;
use App\Models\Cowtype;
use App\Models\Staff;
class informationcontroller extends Controller
{
    public function cow()
    {
        //get all data from cow table
        //  $addcows = Addcow::all();
        
       //$variable name= modelname::paginate(number);
    $addcows = Addcow::paginate(6);

        return view('backend.layouts.cowinfo.cow',compact('addcows'));
    }

   public function addcow()
   {
    $addcows = Cowtype::all();

       return view('backend.layouts.cowinfo.addcow',compact('addcows'));
   }
  //post
   public function addcowstore(Request $store)
   {
    // dd($store->all());
     //modelname::create([]);
      Addcow::create([
          //formname=>$variablename->(bladefile)name
       'cow_number'=>$store->cow_number,
       'cow_type'=>$store->cow_type,
       'Gender'=>$store->Gender,
       'date_of_birth'=>$store->date_of_birth,
       'status'=>$store->status,
       'image'=>$store->image
      ]);
      return redirect()->route('cows');
   }


   public function staff()
   {
     //db name=modelname::all();
    $staffs = Staff::all();
    //$variable name= modelname::paginate(number);
    $staffs = staff::paginate(6);

       return view('backend.layouts.staffinfo.staff',compact('staffs'));
   }
  
   public function addstaff()
   {
       return view('backend.layouts.staffinfo.addstaff');
   }

   //post
   public function addstaffstore(Request $store)
   {
      // dd($store->all());
       //modelname::create([]);
       Staff::create([
       'staff_name'=>$store->staff_name,
       'image'=>$store->image,
       'email'=>$store->email,
       'Mobile'=>$store->Mobile,
       'Designation'=>$store->Designation,
       'Salary'=>$store->Salary,
       'Address'=>$store->Address

       ]);
       return redirect()->route('staffs');
   }
}