<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class NoticeControllerController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $notices = Notice::all();
        // dd($notices);
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
}
