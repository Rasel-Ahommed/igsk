<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class TeacherStaffController extends Controller
{
    public function index(){
        $early_years = Employee::where('school_type','=',1)->get();
        $elementary_schools = Employee::where('school_type','=',2)->get();
        $mid_schools = Employee::where('school_type','=',3)->get();
        $high_schools = Employee::where('school_type','=',4)->get();
        return view('frontend.teacher_staff.teacher_staff',compact('early_years','elementary_schools','mid_schools','high_schools'));
    }
}
