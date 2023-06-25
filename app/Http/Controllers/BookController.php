<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comand;

class BookController extends Controller
{   

   /**
   * get all product
   */
    function index()
    {
    	$pds = Product::all();  
      return view('book.book', compact('pds'));
    }

    /**
     * get booking by id
     * @var id 
     */
    function book($id)
    {
       $pd= Product::find($id);   
      return view('book.form', compact('pd'));
    }

    /**
     * save booking information
     * @var request
     */
    function store(Request $request)
    {
      //validation
       $request->validate([  
            'product'=>'required', 
            'email'=>'required',
            'telephone'=>'required',
            'date'=>'required',
            'number_person'=>'required',
            'address'=>'required', 
             
        ]);  
        
        //retrieve request data
        $cmd = new Comand;  
        $cmd->product =  $request->get('product'); 
        $cmd->email =  $request->get('email');
        $cmd->telephone =  $request->get('telephone');
        $cmd->date =  $request->get('date');
        $cmd->number_person =  $request->get('number_person');
        $cmd->address =  $request->get('address');
        
        //save data
        $cmd->save();
        
        //redirect
        return redirect('/book/');
    }

    
}
