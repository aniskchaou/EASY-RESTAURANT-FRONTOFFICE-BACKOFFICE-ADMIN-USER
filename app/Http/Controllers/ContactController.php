<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * view megge page
     */
    function index()
    {
      return view('contact.contact');
    }

    /**
     * send message
     * @var request
     */
    function contact(Request $request)
    {
       //validation
       $request->validate([  
            'name'=>'required', 
            'email'=>'required', 
            'telephone'=>'required', 
            'message'=>'required',  
        ]);  
       
        //get message data
        $msg = new Message;  
        $msg->name =  $request->get('name');
        $msg->email =  $request->get('email');
        $msg->telephone =  $request->get('telephone');
        $msg->message =  $request->get('message');
        
        //save
        $msg->save();

        //redirect
        return redirect('/contact/');
    }
}
