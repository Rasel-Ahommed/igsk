<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $datas = Faq::all();
        return view('frontend.faq.faq',compact('datas'));
    }
}
