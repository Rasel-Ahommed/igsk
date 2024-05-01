<?php

namespace App\Http\Controllers\frontend;

use carbon\Carbon;
use App\Models\Newes;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\Event;
use App\Models\ShortInfo;
use App\Models\Testimonial;
use App\Models\GalleryTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiteSetting;

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

        $gallery_titles = GalleryTitle::get();

        $testimonials = Testimonial::all();

        $siteData = SiteSetting::first();

        $events = Event::latest()->take(4)->get();
        // dd($testimonials);

        return view('frontend.home.home',compact('datas','shortInfos','notices','newes','gallery_titles','testimonials','events','siteData'));
    }
}
