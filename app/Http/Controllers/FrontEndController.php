<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Slider;
use App\About;

class FrontEndController extends Controller
{
    public function index(){
      $slider=Slider::first();
      $about = About::first();
      $services = Service::latest()->get();
      return view('front.index', compact('slider','about' , 'services'));
    }
}
