<?php

namespace App\Http\Controllers;

use App\Models\Addcow;
use App\Models\Cow_sale;
use App\Models\Customer;
use App\Models\Milk_collection;
use App\Models\Milk_sale;
use App\Models\Milkstock;
use App\Models\Staff;
use App\Models\Todolist;
use App\Models\Stock;
use Illuminate\Http\Request;

class Dashcontroller extends Controller
{
    public function dash()
    {
       
        return view('backend.main');
    }

    public function dashboard()
    {
        $cow_count=Addcow::all()->count();
        $staff=Staff::all()->count();
        $stock_in=Milkstock::all()->sum('stock_in');
        $stock=Milkstock::all()->sum('stock_out');
        $cow_sale=Cow_sale::all()->count();
        $cowsale=Cow_sale::all()->sum('amount');
        $milksale=Milk_sale::all()->sum('pay_amount');
        $customer=Customer::all()->count();



        $tasks=Todolist::paginate(5);
        return view('backend.layouts.dashboard.dashboard', compact('tasks','staff','cow_count','cow_sale','stock','stock_in','cowsale','milksale','customer'));
    }
   
    public function addtask(Request $tasks)
    {
        Todolist::create([
            'tasks'=>$tasks->task
        ]);
         return redirect()->back();
    }
   
    public function delete($id)
    {
        // dd($id);
      Todolist::destroy($id);
       return redirect()->back()->with('message','task deleted successfully');
    }

}
