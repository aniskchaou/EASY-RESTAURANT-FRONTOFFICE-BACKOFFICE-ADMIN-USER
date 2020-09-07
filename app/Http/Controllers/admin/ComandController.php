<?php

namespace App\Http\Controllers\admin;
use App\Comand;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ComandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmds = Comand::all();
        $pds = Product::all();  
  
        return view('admin.pages.comand.index', compact('cmds','pds'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.comand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
  
          
           
        $request->validate([  
            'product'=>'required', 
            'email'=>'required',
            'telephone'=>'required',
            'date'=>'required',
            'number_person'=>'required',
            'address'=>'required', 
             
        ]);  
  
        $cmd = new Comand;  
        $cmd->product =  $request->get('product'); 
        $cmd->email =  $request->get('email');
        $cmd->telephone =  $request->get('telephone');
        $cmd->date =  $request->get('date');
        $cmd->number_person =  $request->get('number_person');
        $cmd->address =  $request->get('address');   
        $cmd->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $cmd= Comand::find($id);  
     return view('admin.pages.comand.edit', compact('cmd')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([  
            'product'=>'required', 
            'email'=>'required',
            'telephone'=>'required',
            'date'=>'required',
            'number_person'=>'required',
            'address'=>'required', 
             
        ]);  
  
        $cmd = Comand::find($id);  
        $cmd->product =  $request->get('product'); 
        $cmd->email =  $request->get('email');
        $cmd->telephone =  $request->get('telephone');
        $cmd->date =  $request->get('date');
        $cmd->number_person =  $request->get('number_person');
        $cmd->address =  $request->get('address');   
        $cmd->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cmd=Comand::find($id);  
        $cmd->delete(); 
        return redirect('/comand/index');
    }
}
