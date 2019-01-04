<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Image;
use File;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(){
        return view('admin.team.create');
    }

    public function store(Request $request){
        $team = new Team();
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/team/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $team->image = $filename;
            }
        }
        $team->name = ucwords(strtolower($data['name']));
        $team->position = ucwords($data['position']);
        $team->twitter = $data['twitter'];
        $team->facebook = $data['facebook'];
        $team->linkedin = $data['linkedin'];
        $team->save();
        return redirect()->route('team.view')->with('flash_message_success','Team Inserted');
    }

    public function view(){
        $teams = Team::latest()->get();
        return view('admin.team.view',compact('teams'));
    }

    public function edit($id){
        $team = Team::findOrFail($id);
        return view('admin.team.edit',compact('team'));
    }

    public function update(Request $request,$id){
        $team =Team::findOrFail($id);

        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/team/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $team->image = $filename;
            }
        }
        $team->name = ucwords(strtolower($data['name']));
        $team->position = ucwords($data['position']);
        $team->twitter = $data['twitter'];
        $team->facebook = $data['facebook'];
        $team->linkedin = $data['linkedin'];
        $team->save();
        return redirect()->route('team.view')->with('flash_message_success','Team Updated');
    }

    public function delete($id){
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('team.view')->with('flash_message_danger','Team Deleted');
    }
}
