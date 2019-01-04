<?php

namespace App\Http\Controllers;

use App\Professionalskill;
use Illuminate\Http\Request;

class ProfessionalSkillController extends Controller
{
    public function create()
    {
        return view('admin.professionalskills.create');
    }

    public function store(Request $request)
    {
        $professional = new Professionalskill();
        $data = $request->all();
        $professional->name = ucwords(strtolower($data['name']));
        $professional->percentage = $data['percentage'];
        $professional->save();
        return redirect()->route('professionalskills.view')->with('flash_message_success', 'ProfessionalSkills has been Inserted');
    }

    public function view(){
        $professional = Professionalskill::latest()->get();
        return view('admin.professionalskills.view',compact('professional'));
    }

    public function edit($id){
        $professional = Professionalskill::findOrFail($id);
        return view('admin.professionalskills.edit',compact('professional'));
    }

    public function update(Request $request,$id){
        $professional = Professionalskill::findOrFail($id);

        $data = $request->all();
        $professional->name = ucwords(strtolower($data['name']));
        $professional->percentage = $data['percentage'];
        $professional->save();
        return redirect()->route('professionalskills.view')->with('flash_message_success', 'ProfessionalSkills has been Updated');
    }

    public function delete($id){
        $professional = Professionalskill::findOrFail($id);
        $professional->delete();
        return redirect()->route('professionalskills.view')->with('flash_message_danger', 'ProfessionalSkills has been Deleted');
    }
}