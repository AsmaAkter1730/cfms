<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    public function employee()
    {
        return view('staffs.backend.employee_master');
    }

    
}
