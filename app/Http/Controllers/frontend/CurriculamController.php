<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculamController extends Controller
{
    public function index($id){
        $data = Curriculum::where('id',$id)->first();
        return view('frontend.curriculam.curriculam',compact('data'));
    }
}
