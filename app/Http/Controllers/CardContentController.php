<?php

namespace App\Http\Controllers;

use App\Models\CardContent;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class CardContentController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = CardContent::all();
        
        return view('backoffice.teamCardContent.teamCardContent',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,webp,gif',
            'title' => 'required',
            'details' => 'required'
        ]);

        $data = CardContent::findOrFail($request->id);

        if($request->hasFile('image')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'image', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->img = $imagePath;
            }
        }

        $data->title = $request->title;
        $data->text = $request->details;
        $data->save();
        return redirect()->back()->with('success', 'Card content update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
