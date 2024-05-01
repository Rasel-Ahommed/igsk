<?php

namespace App\Http\Controllers;

use App\Models\EnquiryForm;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index(){
        $datas = EnquiryForm::latest()->get();

        return view('backoffice.enquiryForm.enquiryForm',compact('datas'));
    }

    public function destroy($id){
        $data = EnquiryForm::findOrFail($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('success', 'Data delete successfully');
        }
    }
}
