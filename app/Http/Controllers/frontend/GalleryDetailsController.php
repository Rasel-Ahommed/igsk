<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryDetailsController extends Controller
{
    public function index(){
        return view('frontend.gallery.gallery_details');
    }
}