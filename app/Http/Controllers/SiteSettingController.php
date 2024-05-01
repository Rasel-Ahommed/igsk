<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class SiteSettingController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = SiteSetting::all();
        return view('backoffice.siteSetting.siteSetting',compact('datas'));
    }

     // update 
     public function update(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,webp,gif',
            'facebook' => 'required',
            'twitter' => 'required',
            'whatsapp' => 'required',
            'youtube' => 'required',
        ]);
        
        $data = SiteSetting::findOrFail($request->id);
        
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
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->whatsapp = $request->whatsapp;
        $data->youtube = $request->youtube;

        $data->save();

        return redirect()->back()->with('success', 'Site setting updated successfully');
        
    }
}
