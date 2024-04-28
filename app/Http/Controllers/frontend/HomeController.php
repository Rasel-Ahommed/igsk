<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Newes;
use App\Models\Notice;
use App\Models\ShortInfo;
use carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $currentDate = Carbon::now();
        // Set the start of the week to Saturday
        $startDate = $currentDate->copy()->startOfWeek(Carbon::SATURDAY)->startOfDay();

        // Set the end of the week to Friday
        $endDate = $currentDate->copy()->endOfWeek(Carbon::FRIDAY)->endOfDay();

        // Fetch notices within the current week
        $notices = Notice::whereBetween('created_at', [$startDate, $endDate])->get();

        // If no notices found for the current week, fetch notices for the previous week
        if ($notices->isEmpty()) {
            // Adjust start and end dates for the previous week
            $previousStartDate = $startDate->copy()->subWeek();
            $previousEndDate = $endDate->copy()->subWeek();
            $notices = Notice::whereBetween('created_at', [$previousStartDate, $previousEndDate])->get();
        };

        $datas = Banner::all();
        $shortInfos = ShortInfo::all();
        $newes = Newes::latest()->get();

        return view('frontend.home.home',compact('datas','shortInfos','notices','newes'));
    }
}
