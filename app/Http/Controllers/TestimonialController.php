<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){

        $testimonials = Testimonial::all();
        return view('backoffice.home.testimonial',compact('testimonials'));
    }

    // store 
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'testimonial_dtls' =>  ['required', 'string'],
        ]);
        $trimmedContent = strip_tags($request->testimonial_dtls);
        

        $data['name'] = $request->name;
        $data['massage'] = $trimmedContent;

        Testimonial::create($data);

        return redirect()->back()->with('success', 'Testimonial added successfully');
    }

    // update 
    public function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'edit_info_details' =>  ['required', 'string'],
        ]);
        $trimmedContent = strip_tags($request->edit_info_details);

        $data = Testimonial::findOrFail($request->id);

        if($data){
            $data->name = $request->name;
            $data->massage = $trimmedContent;

            $data->save();
            return redirect()->back()->with('success', 'Testimonial Update successfully');
        }
    }

    // delete 

    public function destroy($id){
        $data = Testimonial::findOrFail($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('delete', 'Testimonial delete successfully');
        }
    }
}
