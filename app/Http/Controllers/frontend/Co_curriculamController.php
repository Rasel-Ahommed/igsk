<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Co_curriculamController extends Controller
{
    public function index(){
        return view('frontend.co_curriculam.co_curriculam');
    }
}
