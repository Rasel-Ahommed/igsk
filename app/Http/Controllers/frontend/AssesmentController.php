<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AssessmentProcess;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function index($id){
        $data = AssessmentProcess::where('id',$id)->first();
        return view('frontend.assesment.assesment',compact('data'));
    }
}
