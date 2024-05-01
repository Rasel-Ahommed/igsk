<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class BackCurriculumController extends Controller
{
    public function index(){
        $datas = Curriculum::all();
        return view('backoffice.academics.curriculum',compact('datas'));
    }


    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'curriculum_title' => 'required'
        ]);

        $data = Curriculum::findOrFail($request->id);

        if($data){
            $data->title = $request->title;
            $data->details = $request->curriculum_title;

            $data->save();

            return redirect()->back()->with('success', 'Curriculum updated successfully');
        }
    }
}
