<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class BannerController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = Banner::all();
        return view('backoffice.home.banner',compact('datas'));
        
    }

    // store 
    public function store(Request $request){
        $request->validate([
            'code_line' => ['required', 'string', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,gif'
        ]);

        // Upload and handle image
        $path = $this->uploadImage($request, 'image', 'images');

        if ($path) {
            $relativePath = str_replace(public_path(), '', $path);
            $data['image'] = $relativePath;
        }

        $data['code_line'] = $request->code_line;

        Banner::create($data);

        return redirect()->back()->with('success', 'Banner add successfully');
    }


    public function update(Request $request){
        $request->validate([
            'code_line' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg,webp,gif'
        ]);

        $data = Banner::findOrFail($request->id);

        if($request->hasFile('image')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'image', 'images');
            
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = $data->image;
                
                // Check if the image file exists and delete it
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                
                $data->image = $relativePath;
            }

            $data->code_line = $request->code_line;
        }

        $data->save();
        return redirect()->back()->with('success', 'Banner update successfully');
    }


    public function destroy($id){
        $data = Banner::findOrFail($id);

        if($data){
            $imagePath = $data->image;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'Banner delete successfully');
        }
    }

}
