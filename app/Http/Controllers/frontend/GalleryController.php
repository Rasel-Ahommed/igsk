<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\GalleryTitle;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
            $gallery_titles = GalleryTitle::get();
            
        return view('frontend.gallery.gallery', compact('gallery_titles'));
    }
}
