<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
      return view('contact.contact');
    }

    function contact(Request $request)
    {
       $request->validate([  
            'name'=>'required', 
            'email'=>'required', 
            'telephone'=>'required', 
            'message'=>'required',  
        ]);  
  
        $msg = new Message;  
        $msg->name =  $request->get('name');
        $msg->email =  $request->get('email');
        $msg->telephone =  $request->get('telephone');
        $msg->message =  $request->get('message');
        $msg->save();
        return redirect('/contact/');
    }
}
