<?php

namespace App\Http\Controllers;

use App\Personalskills;
use App\Professionalskill;
use App\Service;
use App\Site;
use App\Team;
use Illuminate\Http\Request;
use App\Slider;
use App\About;

class FrontEndController extends Controller
{
    public function index(){
      $slider=Slider::first();
      $about = About::first();
      $services = Service::latest()->get();
      $personalskills = Personalskills::latest()->get();
      $professional = Professionalskill::latest()->get();
      $site = Site::first();
      $team = Team::latest()->get();
      return view('front.index', compact('slider','about' , 'services' , 'personalskills' , 'professional' , 'site' , 'team'));
    }
}
