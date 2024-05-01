<?php

namespace App\Http\Controllers;

use App\Models\JoinUS;
use Illuminate\Http\Request;

class JoinUSController extends Controller
{
    public function index(){
        $datas = JoinUS::latest()->get();

        return view('backoffice.joinUs.joinUs',compact('datas'));
    }

    public function destroy($id){
        $data = JoinUS::findOrFail($id);

        if($data){
            $imagePath = $data->image;
            $pdfPath = $data->pdf;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'Join data delete successfully');
        }
    }
}
