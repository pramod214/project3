<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
      return view('admin.about.index');
    }

    public function update(Request $request,$id){
      $about = About::findOrFail($id);
      $data = $request->all();
      $about->birthdate = $data['birthdate'];
      $about->phone = $data['phone'];
      $about->details = ucwords(strtolower($data['details']));
      $about->email = $data['email'];
      $about->skype = $data['skype'];
      $about->website = $data['website'];
      $about->facebook = $data['facebook'];
      $about->twitter = $data['twitter'];
      $about->gmail = $data['gmail'];
      $about->linkedin = $data['linkedin'];
      $about->save();
      return redirect() -> route('admin.about.index')->with('flash_message_info','About Page updated');

    }
}
