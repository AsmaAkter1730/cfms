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
    $addcows = Addcow::with('Cowtype')->paginate(6);

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
      //dd($store->all());
       //image
    $fileName='';
    if($store->hasFile('image'))
    {

        // dd(date('Ymdhms').'.'.$store->file('image'))->getClientOriginalExtension();
  //dd(date('Ymdhms'));

        $file=$store->file('image');
       //generate file name here
        $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$fileName);
    }



    //dd($store->all());
     //modelname::create([]);
      Addcow::create([
          //formname=>$variablename->(bladefile)name
    'cowtype_id'=>$store->cowtype_id,
       'cow_number'=>$store->cow_number,
       
       'Gender'=>$store->Gender,
       'date_of_birth'=>$store->date_of_birth,
       'status'=>$store->status,
       'image'=>$fileName
      ]);
      return redirect()->route('cows');
   }


   public function deletes($id)
   {
       // dd($id);
     Addcow::destroy($id);
      return redirect()->back()->with('message','Cow deleted successfully' );
   }
   public function cow_edit($id)
   {
       // dd($id);
       $addcows = Cowtype::all();
       $cows=Addcow::find($id);
     $categories=Addcow::all();
      return view('backend.layouts.cowinfo.edit-cow',compact('categories','cows','addcows'));
   }
   
   public function cow_update(Request $store, $id)
   
   {
    $cows=Addcow::find($id);
       $cows->update([
           //formname=>$variablename->(bladefile)name
           
           'cow_number'=>$store->cow_number,
           
           'Gender'=>$store->Gender,
           'date_of_birth'=>$store->date_of_birth,
           'status'=>$store->status,
           
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


    //dd($store->all());
       //image

       $fileName='';
       if($store->hasFile('image'))
       {
   
           // dd(date('Ymdhms').'.'.$store->file('image'))->getClientOriginalExtension();
     //dd(date('Ymdhms'));
   
           $file=$store->file('image');
          //generate file name here
           $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
           $file->storeAs('/uploads',$fileName);
       }
   
      // dd($store->all());
       //modelname::create([]);
       Staff::create([
       'staff_name'=>$store->staff_name,
       'image'=>$fileName,
       'email'=>$store->email,
       'Mobile'=>$store->Mobile,
       'Designation'=>$store->Designation,
       'Salary'=>$store->Salary,
       'Address'=>$store->Address

       ]);
       return redirect()->route('staffs');
   }

   public function delete($id)
   {
       // dd($id);
      staff::destroy($id);
      return redirect()->back()->with('message','staff deleted successfully' );
   }

   public function staff_edit($id)
{
    // dd($id);
  
    $staff=Staff::find($id);
  $categories=Staff::all();
   return view('backend.layouts.staffinfo.edit-staff',compact('categories','staff'));
}

public function staff_update(Request $store, $id)

{
    $staff=Staff::find($id);
    $staff->update([
        //formname=>$variablename->(bladefile)name
        'staff_name'=>$store->staff_name,
        'email'=>$store->email,
        'Mobile'=>$store->Mobile,
        'Designation'=>$store->Designation,
        'Salary'=>$store->Salary,
        'Address'=>$store->Address
   ]);
   return redirect()->route('staffs');

}
}
