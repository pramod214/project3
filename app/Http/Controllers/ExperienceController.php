<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function createExperience(){
        return view('admin.experience.createExperience');
    }

    public function storeExperience(Request $request){
        $experience = new Experience();
        $data = $request->all();
        $experience->company_name = ucwords(strtolower($data['name']));
        $experience->job_title=ucwords(strtolower($data['job']));
        $experience->date = $data['date'];
        $experience->body = ucwords($data['body']);
        $experience->address = ucwords($data['address']);
        $experience->save();
        return redirect()->route('viewExperience')->with('flash_message_info','Experience Inserted Successfully');
    }

    public function viewExperience(){
        $experiences = Experience::latest()->get();
        return view('admin.experience.viewExperience',compact('experiences'));
    }

    public function editExperience($id){
        $experiences = Experience::findOrFail($id);
        return view('admin.experience.editExperience',compact('experiences'));
    }

    public function updateExperience(Request $request,$id){
        $experiences = Experience::findOrFail($id);
        $data = $request->all();
        $experiences->company_name = ucwords(strtolower($data['name']));
        $experiences->job_title=$data['job'];
        $experiences->date = $data['date'];
        $experiences->body = ($data['body']);
        $experiences->address = ucwords($data['address']);
        $experiences->save();
        return redirect()->route('viewExperience')->with('flash_message_info','Experience Updated Successfully');
    }

    public function deleteExperience($id){
        $e =Experience::findOrFail($id);
        $e->delete();
        return redirect()->route('viewExperience')->with('flash_message_danger','Experience Deleted Successfully');
    }

}
