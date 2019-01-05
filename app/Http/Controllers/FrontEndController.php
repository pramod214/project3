<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Experience;
use App\Personalskills;
use App\Portfolio;
use App\PortfolioCategory;
use App\Professionalskill;
use App\Resume;
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
      $categories = PortfolioCategory::all();
      $ports = Portfolio::all();
      $blogs = Blog::latest()->get();
      $resumes = Resume::latest()->get();
      $experiences = Experience::latest()->get();
      return view('front.index', compact('slider','about' , 'services' , 'personalskills' , 'professional' , 'site' , 'team', 'categories', 'ports', 'blogs' , 'resumes' , 'experiences'));
    }

    public function blog($id){
        $slider=Slider::first();
        $site = Site::first();

        $blog = Blog::findOrFail($id);
        return view ('front.blog', compact('blog', 'slider', 'site'));
    }
}
