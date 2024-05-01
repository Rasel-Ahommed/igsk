<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class BackFaqController extends Controller
{
    public function index(){
        $datas = Faq::all();
        return view('backoffice.faq.faq',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'question' => 'required',
            'answer_dtls' => 'required',
        ]);

        $data['question'] = $request->question;
        $data['answer'] = $request->answer_dtls;

        Faq::create($data);

        return redirect()->back()->with('success', 'FAQ added successfully');
    }


    // update 
    public function update(Request $request){
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'edit_faq_details' =>  ['required', 'string'],
        ]);
        // $trimmedContent = strip_tags($request->edit_info_details);

        $data = Faq::findOrFail($request->id);

        if($data){
            $data->question = $request->question;
            $data->answer = $request->edit_faq_details;

            $data->save();
            return redirect()->back()->with('success', 'Faq Update successfully');
        }
    }



    public function destroy($id){
        $data = Faq::findOrFail($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('delete', 'Faq delete successfully');
        }
    }
}
