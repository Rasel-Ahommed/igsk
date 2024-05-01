<?php

namespace App\Http\Controllers;

use App\Models\AssessmentProcess;
use Illuminate\Http\Request;

class AssessmentProcessController extends Controller
{
    public function index(){
        $datas = AssessmentProcess::all();
        return view('backoffice.academics.assessment_process',compact('datas'));
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'assesment_title' => 'required'
        ]);

        $data = AssessmentProcess::findOrFail($request->id);

        if($data){
            $data->title = $request->title;
            $data->details = $request->assesment_title;

            $data->save();

            return redirect()->back()->with('success', 'Curriculum updated successfully');
        }
    }
}
