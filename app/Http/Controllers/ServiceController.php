<?php

namespace App\Http\Controllers;

use App\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('admin.service.create');
    }

    public function store(Request $request){
        $service = new Service;
        $data = $request->all();
        $service->name = ucwords(strtolower($data['name']));
        $service->icon = strtolower($data['icon']);
        $service->body = $data['body'];
        $service->save();
        return redirect()->route('service.view')->with('flash_message_success','Service has been inserted');
    }

    public function index(){
        $services = Service::latest()->get();
        return view ('admin.service.index', compact('services'));
    }

    public function edit($id){
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request,$id){
        $service = Service::findOrFail($id);

        $data = $request->all();
        $service->name = ucwords(strtolower($data['name']));
        $service->icon = strtolower($data['icon']);
        $service->body = $data['body'];
        $service->save();
        return redirect()->route('service.view')->with('flash_message_success','Service has been Updated');
    }

    public function delete($id){
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.view')->with('flash_message_danger','Service has been Deleted');
    }
}
