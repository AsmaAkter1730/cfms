<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Cow_sale;
use App\Models\Customer;
use App\Models\Milk_sale;
use App\Models\Payment;
class Searchcontroller extends Controller
{
  public function staff_search()
  {
     //dd($_GET['search']) ; or
     //dd(request()->search);
     $staffs = Staff::all();
    // $staffs = staff::paginate(6);
    $key=request()->search;
    $staffs=Staff::where('staff_name',$key)->get();
     return view('backend.layouts.staffinfo.search-staff',compact('staffs'));
  }
  
 

  public function view_cowsale($id) {
   $cowsale = Cow_sale::find($id);
   $invoice = Cow_sale::find($id);
  
   return view('backend.layouts.cowsale.cowsale-view', compact('id','cowsale','invoice'));
  }
  
   public function view_milksale($id) {
     
      $invoice = Milk_sale::find($id);
    
      return view('backend.layouts.milksale.milksale-view', compact('id','invoice'));

}
}