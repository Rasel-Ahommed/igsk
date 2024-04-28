<?php

namespace App\Http\Controllers;

use App\Models\Newes;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class NewesController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $newses = Newes::all();
        return view('backoffice.home.news',compact('newses'));
    }

    // store 
    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,webp,gif',
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
            'date' => 'required',
        ]);
        // Upload and handle image
        $path = $this->uploadImage($request, 'image', 'images');

        if ($path) {
            $relativePath = str_replace(public_path(), '', $path);
            $data['image'] = $relativePath;
        }

        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['event_date'] = $request->date;

        Newes::create($data);

        return redirect()->back()->with('success', 'News add successfully');
    }

    
     // update 
     public function update(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,webp,gif',
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
            'date' => 'required',
        ]);
        
        $data = Newes::findOrFail($request->id);
        
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
        $data->event_date = $request->date;

        $data->save();

        return redirect()->back()->with('success', 'News updated successfully');
        
    }

    public function destroy($id){
        $data = Newes::findOrFail($id);

        if($data){
            $imagePath = $data->image;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'News delete successfully');
        }
    }
}
