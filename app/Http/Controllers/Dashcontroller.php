<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class Dashcontroller extends Controller
{
    public function dash()
    {
        return view('backend.main');
    }

    public function dashboard()
    {
        $tasks=Todolist::paginate(5);
        return view('backend.layouts.dashboard.dashboard', compact('tasks'));
    }
   
    public function addtask(Request $tasks)
    {
        Todolist::create([
            'tasks'=>$tasks->task
        ]);
         return redirect()->back();
    }
   
    

}
