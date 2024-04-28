<?php

namespace App\Http\Controllers;

use App\Models\GalleryTitle;
use Illuminate\Http\Request;

class BackofficeGalleryController extends Controller
{
    public function index(){
        $gallary_titles = GalleryTitle::get();
        return view('backoffice.gallery.gallery');
    }
}
