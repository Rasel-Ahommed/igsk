<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryTitle;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class BackofficeGalleryController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $gallary_titles = GalleryTitle::get();
        
        return view('backoffice.gallery.gallery',compact('gallary_titles'));
    }

    // add album 
    public function storeAlbum(Request $request){
        $request->validate([
            'album' => ['required', 'string', 'max:255']
        ]);
        $data['title'] = $request->album;

        GalleryTitle::create($data);
        return redirect()->back()->with('success', 'Album add successfully');
    }

    // store gallery 
    public function storeGallery(Request $request){
        $request->validate([
            'album' => 'required',
            // 'image' => 'required|mimes:jpg,jpeg,png,webp,gif',
        ]);
       

        foreach ($request->image as $image) {
            // dd($image);
            $extension = $image->getClientOriginalExtension();

            $fileName = uniqid() . '_' . 'user' . '.' . $extension;
             

            $path = $image->move('images', $fileName);
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $data['image'] = $relativePath;
                $data['gallery_title'] = $request->album;

                Gallery::create($data);

                
            }
        }
        return redirect()->back()->with('success', 'Gallery image add successfully');
    }

    // delete gallery single image
    public function deleteSingleImage($id){
        $data = Gallery::findOrFail($id);

        if($data){
            $imagePath = $data->image;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'Image delete successfully');
        }
    }
    // delete gallery single image
    public function deleteGallery($id){
        
    
        Gallery::where('gallery_title', $id)->delete();

        return redirect()->back()->with('delete', 'Image delete successfully');
    }
}
