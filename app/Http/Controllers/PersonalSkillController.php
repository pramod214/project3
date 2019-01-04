<?php

namespace App\Http\Controllers;

use App\Personalskills;
use Illuminate\Http\Request;

class PersonalSkillController extends Controller
{
    public function create(){
        return view('admin.personalskills.create');
    }

    public function store(Request $request){
        $personalskills = new Personalskills();
         $data = $request->all();
        $personalskills->name = ucwords(strtolower($data['name']));
        $personalskills->percentage = $data['percentage'];
        $personalskills->save();
        return redirect()->route('personalskills.view')->with('flash_message_success','Personal Skills has been Inserted');
    }

    public function view(){
        $personalskills = Personalskills::latest()->get();
        return view('admin.personalskills.view',compact('personalskills'));
    }

    public function edit($id){
        $personalskills = Personalskills::findOrFail($id);
        return view('admin.personalskills.edit', compact('personalskills'));
    }

    public function update(Request $request,$id){
        $personalskills = Personalskills::findOrFail($id);

        $data = $request->all();
        $personalskills->name = ucwords(strtolower($data['name']));
        $personalskills->percentage = $data['percentage'];
        $personalskills->save();
        return redirect()->route('personalskills.view')->with('flash_message_success','Personal Skills has been Updated');
    }

    public function delete($id){
        $personalskills = Personalskills::findOrFail($id);
        $personalskills ->delete();
        return redirect()->route('personalskills.view')->with('flash_message_danger','Personal Skills has been Deleted');
    }
}
