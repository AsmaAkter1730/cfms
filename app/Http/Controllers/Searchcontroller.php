<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Cow_sale;
use App\Models\Milk_sale;
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
  public function cow_search()
  {
     //dd($_GET['search']) ; or
     //dd(request()->search);
     $cow_sales = Cow_sale::all();
     $key=request()->search;
     $cow_sales=Cow_sale::where('cus_name',$key)->get();
     return view('backend.layouts.cowsale.search-cowsale',compact('cow_sales'));
  }
  public function milk_search()
  {
     //dd($_GET['search']) ; or
     //dd(request()->search);
     $milk_sales = Milk_sale::all();
     $key=request()->search;
     $milk_sales=Milk_sale::where('cutomer_name',$key)->get();
     return view('backend.layouts.milksale.search-milksale',compact('milk_sales'));
  }
 
}
