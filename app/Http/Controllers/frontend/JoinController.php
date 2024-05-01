<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\JoinUS;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class JoinController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        return view('frontend.join.join');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,webp,gif',
            'fast_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'education' => 'required',
            'carriar_objective' => 'required',
            'pdf' => 'required|mimes:pdf'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $this->uploadImage($request, 'image', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $data['image'] = $relativePath;
            }
        }

        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            $path = $this->uploadImage($request, 'pdf', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $data['pdf'] = $relativePath;
            }
        }



        $data['fast_name'] = $request->fast_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['education'] = $request->education;
        $data['carriar_objective'] = $request->carriar_objective;
        $data['massage'] = $request->massage;

        JoinUS::create($data);

        return redirect()->back()->with('success', 'Your form has been successfully submitted');
    }
}
