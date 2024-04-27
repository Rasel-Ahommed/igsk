<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\ShortInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $datas = Banner::all();
        $shortInfos = ShortInfo::all();
        $notices = Notice::all();
        return view('frontend.home.home',compact('datas','shortInfos','notices'));
    }
}
