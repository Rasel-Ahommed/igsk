<?php

namespace App\Http\Controllers;

use App\Models\SiteData;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class SiteDataController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SiteData::first();
        return view('backoffice.director_speech.director_speech',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updateDirectorSpeech(Request $request, $id)
    {
        $request->validate([
            'director_img' => 'mimes:jpg,jpeg,png,webp,gif',
            'directorSpeech' => 'required',
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('director_img')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'director_img', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->director_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->director_img = $imagePath;
            }
        }
        $data->director_speech = $request->directorSpeech;
        $data->save();
        return redirect()->back()->with('success', 'Director speech updated successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateWhyIgsk(Request $request, $id)
    {
        $request->validate([
            'why_igsk_img' => 'mimes:jpg,jpeg,png,webp,gif',
            'aboutIgsk' => 'required',
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('why_igsk_img')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'why_igsk_img', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->why_igsk_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->why_igsk_img = $imagePath;
            }
        }
        $data->why_igsk_text = $request->aboutIgsk;
        $data->save();
        return redirect()->back()->with('success', 'Why IGSK updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function aboutIndex()
    {
        $data = SiteData::first();
        return view('backoffice.about_igsk.about_igsk',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateAboutIgsk(Request $request, $id)
    {
        $request->validate([
            'goalImg' => 'mimes:jpg,jpeg,png,webp,gif',
            'goal' => 'required',
            'mission' => 'required',
            'vision' => 'required',
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('goalImg')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'goalImg', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->goal_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->goal_img = $imagePath;
            }
        }
        $data->goal = $request->goal;
        $data->mission = $request->mission;
        $data->vision = $request->vision;
        $data->save();
        return redirect()->back()->with('success', 'Goal, Mission & Vision updated successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateRulesForStudents(Request $request, $id)
    {
        $request->validate([
            'stdRulesImg' => 'mimes:jpg,jpeg,png,webp,gif',
            'rules' => 'required',
            'rulesForStudents' => 'required',
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('stdRulesImg')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'stdRulesImg', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->student_rules_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->student_rules_img = $imagePath;
            }
        }
        $data->igsk_rules = $request->rules;
        $data->students_rules = $request->rulesForStudents;
        $data->save();
        return redirect()->back()->with('success', 'Rules & Rules for students updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function updateRulesForParents(Request $request, $id)
    {
        $request->validate([
            'parentRulesImg' => 'mimes:jpg,jpeg,png,webp,gif',
            'rulesForParents' => 'required'
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('parentRulesImg')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'parentRulesImg', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->parents_rules_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->parents_rules_img = $imagePath;
            }
        }
        $data->parents_rules = $request->rulesForParents;
        $data->save();
        return redirect()->back()->with('success', ' Rules for parents updated successfully');
    }

    public function admissionIndex(){
        $data = SiteData::first();
        return view('backoffice.AdmissionProcessAndLibrary.AdmissionProcessAndLibrary',compact('data'));
    }

    public function updateAdmissionProcess(Request $request, $id)
    {
        $request->validate([
            'admissionProcess' => 'required'
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        $data->admissin_process = $request->admissionProcess;
        $data->save();

        return redirect()->back()->with('success', ' Admission Process updated successfully');
    }

    public function updateLibrary(Request $request, $id)
    {
        $request->validate([
            'librariImg' => 'mimes:jpg,jpeg,png,webp,gif',
            'librarytext' => 'required'
        ]);

        $id = decrypt($id);
        $data = SiteData::findOrFail($id);

        if($request->hasFile('librariImg')){
            // Upload and handle image
            $path = $this->uploadImage($request, 'librariImg', 'images');
            if ($path) {
                $relativePath = str_replace(public_path(), '', $path);
                $imagePath = url('/') .'/'. $relativePath ;
                $oldImagePath = str_replace(url('/'), '', $data->library_img);
                $cleanImagePath = ltrim($oldImagePath, '/');

                // Check if the image file exists and delete it
                if (file_exists($cleanImagePath)) {
                    unlink($cleanImagePath);
                }
                $data->library_img = $imagePath;
            }
        }
        $data->libraries_text = $request->librarytext;
        $data->save();
        return redirect()->back()->with('success', ' Library updated successfully');
    }


}
