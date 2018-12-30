<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;

class FrontEndController extends Controller
{
    public function index(){
      $slider=Slider::first();
      $about = About::first();
      return view('front.index', compact('slider','about'));
    }
}
