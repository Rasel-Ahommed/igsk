<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryDetailsController extends Controller
{
    public function index($id){
        $images = Gallery::select('galleries.*','gallery_title.title as title')
                ->join('gallery_title', 'galleries.gallery_title', '=', 'gallery_title.id')
                ->where('gallery_title',$id)->get();
        // dd($images);
        return view('frontend.gallery.gallery_details',compact('images'));
    }
}
