<?php

namespace App\Http\Controllers\frontend;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index(){
        $datas = Employee::where('team','=',2)->get();
        return view('frontend.staff.staff',compact('datas'));
    }
}
