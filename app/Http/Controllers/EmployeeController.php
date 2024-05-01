<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\ImageUploadTrait;


class EmployeeController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $employees = Employee::get();
        $school_types = DB::table('school_type')->get();
        $teams = DB::table('team')->get();

        $datas = Employee::select('employees.*','school_type.name as schoolType', 'team.name as teamName')
                ->join('school_type', 'employees.school_type', '=', 'school_type.id')
                ->join('team', 'employees.team', '=', 'team.id')
                ->get();

        // dd($team);
        return view('backoffice.employee.employee',compact('employees','school_types','teams','datas'));
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,webp,gif',
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:15'],
            'position' => ['required', ],
            'experience' => ['required', ],
            'department' => ['required',],
            'education' => ['required',],
            'school_type' => ['required',],
            'team' => ['required',],
            
            
        ]);
        // Upload and handle image
        $path = $this->uploadImage($request, 'image', 'images');
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'department' => $request->department,
            'experience' => $request->experience,
            'education' => $request->education,
            'school_type' => $request->school_type,
            'team' => $request->team,
        ];
        
        if ($path) {
            $relativePath = str_replace(public_path(), '', $path);
            
            $data['image'] = $relativePath;
        }
        

        Employee::create($data);

        return redirect()->back()->with('success', 'Employees add successfully');
    }



    public function update(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,webp,gif',
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:15'],
            'position' => ['required', ],
            'experience' => ['required', ],
            'department' => ['required',],
            'education' => ['required',],
            'school_type' => ['required',],
            'team' => ['required',],
        ]);
        
        $data = Employee::findOrFail($request->id);
        
        if($request->hasFile('image')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'image', 'images');
            
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = $data->image;
                
                // Check if the image file exists and delete it
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                
                $data->image = $relativePath;
            }
        }
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->position = $request->position;
        $data->department = $request->experience;
        $data->experience = $request->department;
        $data->education = $request->education;
        $data->school_type = $request->school_type;
        $data->team = $request->team;
        $data->save();

        return redirect()->back()->with('success', 'Employee updated successfully');
        
    }

    public function destroy($id){
        $data = Employee::findOrFail($id);

        if($data){
            $imagePath = $data->image;
                
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $data->delete();

            return redirect()->back()->with('delete', 'Employee delete successfully');
        }
    }
}
