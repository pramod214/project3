<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $site = Site::first();
        return view('admin.site.index',compact('site'));
    }

    public function update(Request $request,$id)
    {
        $site = Site::findOrFail($id);
        $data = $request->all();

        $site->phone = $data['phone'];
        $site->location = $data['location'];
        $site->email = $data['email'];
        $site->facebook = $data['facebook'];
        $site->twitter = $data['twitter'];
        $site->gmail = $data['gmail'];
        $site->linkedin = $data['linkedin'];

        $site->save();
        return redirect()->route('site')->with('flash_message_success', 'Site Page updated');
    }
}
