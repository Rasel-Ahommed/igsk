<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use carbon\carbon;
use App\Traits\ImageUploadTrait;

class NoticeControllerController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $notices = Notice::latest()->get();
        return view('backoffice.home.notice',compact('notices'));
    }

    // store 
    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:pdf',
            'title' => ['required', 'string', 'max:255'],
            'info_details' => ['required', 'string', 'max:255'],
        ]);

        // Upload and handle image
        $path = $this->uploadImage($request, 'image', 'images');

        if ($path) {
            $relativePath = str_replace(public_path(), '', $path);
            $data['image'] = $relativePath;
        }

        $data['title'] = $request->title;
        $data['details'] = $request->info_details;

        Notice::create($data);

        return redirect()->back()->with('success', 'Notiec add successfully');
    }

     // update 
     public function update(Request $request){
        $request->validate([
            'image' => 'mimes:pdf',
            'title' => ['required', 'string', 'max:255'],
            'edit_info_details' => ['required', 'string', 'max:255'],
        ]);
        
        $data = Notice::findOrFail($request->id);
        
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
        $data->details = $request->edit_info_details;

        $data->save();

        return redirect()->back()->with('success', 'Notice updated successfully');
        
    }

    public function destroy($id){
        $data = Notice::findOrFail($id);

        if($data){
            $imagePath = $data->image;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'Notice delete successfully');
        }
    }
}
