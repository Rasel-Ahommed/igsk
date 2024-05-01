<?php

namespace App\Http\Controllers\frontend;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function index(){
        $datas = Employee::where('team','=',1)->get();
        return view('frontend.faculty.faculty',compact('datas'));
    }
}
