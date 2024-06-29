<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class TeacherStaffController extends Controller
{
    public function index(){
        $early_years = Employee::where('school_type','=',1)
                     ->join('team', 'employees.team', '=', 'team.id')
                     ->select('employees.*', 'team.name as team_nama')
                     ->orderBy('team')->get();
                     
        $elementary_schools = Employee::where('school_type','=',2)
                            ->join('team', 'employees.team', '=', 'team.id')
                            ->select('employees.*', 'team.name as team_nama')
                            ->orderBy('team')->get();
        $mid_schools = Employee::where('school_type','=',3)
                        ->join('team', 'employees.team', '=', 'team.id')
                        ->select('employees.*', 'team.name as team_nama')
                        ->orderBy('team')->get();
        $high_schools = Employee::where('school_type','=',4)
                        ->join('team', 'employees.team', '=', 'team.id')
                        ->select('employees.*', 'team.name as team_nama')
                        ->orderBy('team')->get();
        return view('frontend.teacher_staff.teacher_staff',compact('early_years','elementary_schools','mid_schools','high_schools'));
    }
}
