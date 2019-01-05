<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function createResume(){
        return view('admin.resume.createResume');
    }

    public function storeResume(Request $request){
        $resume = new Resume;
        $data = $request->all();
        $resume->name = ucwords(strtolower($data['name']));
        $resume->qualification=ucwords(strtolower($data['qualification']));
        $resume->date = $data['date'];
        $resume->body = ucwords($data['body']);
        $resume->address = ucwords($data['address']);
        $resume->save();
        return redirect()->route('viewResume')->with('flash_message_info','Resume Inserted Successfully');
    }

    public function viewResume(){
        $resumes = Resume::latest()->get();
        return view('admin.resume.viewResume',compact('resumes'));
    }

    public function editResume($id){
        $resumes = Resume::findOrFail($id);
        return view('admin.resume.editResume',compact('resumes'));
    }

    public function updateResume(Request $request,$id){
        $resumes = Resume::findOrFail($id);
        $data = $request->all();
        $resumes->name = ucwords(strtolower($data['name']));
        $resumes->qualification=$data['qualification'];
        $resumes->date = $data['date'];
        $resumes->body = ($data['body']);
        $resumes->address = ucwords($data['address']);
        $resumes->save();
        return redirect()->route('viewResume')->with('flash_message_info','Resume Updated Successfully');
    }

    public function deleteResume($id){
        $r =Resume::findOrFail($id);
        $r->delete();
        return redirect()->route('viewResume')->with('flash_message_danger','Resume Deleted Successfully');
    }
}
