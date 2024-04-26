<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutSchoolController extends Controller
{
    public function index(){
        return view('frontend.about_school.about_school');
    }
}
