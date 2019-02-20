<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use Session;

class ContactController extends Controller
{
    public function contact(Request $request){
        if($request->isMethod('post')){
            $contacts = new Contact();
            $data = $request->all();
            $contacts->name = ucwords(strtolower($data['name']));
            $contacts->email = $data['email'];
            $contacts->subject = ucwords($data['subject']);
            $contacts->message = ucwords($data['message']);
            $contacts->save();
            return redirect()->route('frontend.index')->with('flash_message_success','Your message has been sent');
        }

        return view('front.index');
    }

    public function viewContact(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.view_Contact',compact('contacts'));
    }

    public function deleteContact($id){
        $contacts = Contact::findOrFail($id);
        $contacts -> delete();
        return redirect()->route('contact.view');
    }
}
