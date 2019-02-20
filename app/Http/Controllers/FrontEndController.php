<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Experience;
use App\Mail\ContactUs;
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
use Session;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $contacts = new Contact();
            $data = $request->all();
            $contacts->name = ucwords(strtolower($data['name']));
            $contacts->email = $data['email'];
            $contacts->subject = ucwords($data['subject']);
            $contacts->message = ucwords($data['message']);
            $contacts->save();
            Session::flash('success','Message Sent Successfully');
            return redirect()->route('frontend.index');
        }
    }
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

    public function sendContactMail(Request $request){

        if ($request->isMethod('post')){
            Mail::to('pramod.neupane21@gmail.com')->send(new ContactUs($request->all()));
        }
            return redirect()->back()->with('flash_success_message','Mail Sent Successfully');

    }
}
