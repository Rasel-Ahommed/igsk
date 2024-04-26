<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function index(){
        return view('frontend.assesment.assesment');
    }
}
