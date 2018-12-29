<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class FrontEndController extends Controller
{
    public function index(){
      $slider=Slider::first();
      return view('front.index', compact('slider'));
    }
}
