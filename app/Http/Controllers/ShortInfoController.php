<?php

namespace App\Http\Controllers;

use App\Models\ShortInfo;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class ShortInfoController extends Controller
{
     use ImageUploadTrait;
    public function index(){
        $datas = ShortInfo::all();
        return view('backoffice.home.shortinfo',compact('datas'));
    }

    // store
    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,gif',
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
            'info_details' => ['required', 'string', 'max:255'],
        ]);

        // Upload and handle image
        $path = $this->uploadImage($request, 'image', 'images');

        if ($path) {
            $relativePath = str_replace(public_path(), '', $path);
            $data['image'] = $relativePath;
        }

        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['details'] = $request->info_details;

        ShortInfo::create($data);

        return redirect()->back()->with('success', 'Short info add successfully');
    }

    // update 
    public function update(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,webp,gif',
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
            'edit_info_details' => ['required', 'string', 'max:255'],
        ]);
        

        $data = ShortInfo::findOrFail($request->id);
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
        }
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->details = $request->edit_info_details;

            $data->save();

            return redirect()->back()->with('success', 'Short info updated successfully');
        
    }

    public function destroy($id){
        $data = ShortInfo::findOrFail($id);

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
