<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\EnquiryForm;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        return view('frontend.admission_process.admission_process');
    }

    public function store(Request $request){
        $request->validate([
            'student_name' => 'required',
            'parents_name' => 'required',
            'guardian_name' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'phone' => ['required','max:11'],
            'start_date' => 'required'
        ]);

        $data['student_name'] = $request->student_name;
        $data['parents_name'] = $request->parents_name;
        $data['guardian__name'] = $request->guardian_name;
        $data['gender'] = $request->gender;
        $data['date'] = $request->date;
        $data['phone'] = $request->phone;
        $data['start_date'] = $request->start_date;

        EnquiryForm::create($data);

        return redirect()->back()->with('success', 'Your form has been successfully submitted');
    }
}
