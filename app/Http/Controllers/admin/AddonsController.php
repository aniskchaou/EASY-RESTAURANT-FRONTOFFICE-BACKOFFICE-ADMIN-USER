<?php

namespace App\Http\Controllers\admin;
use App\Addons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $addons = Addons::all();  
  
        return view('admin.pages.addons.index', compact('addons'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.addons.create');  
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
            'name'=>'required',  
        ]);  
  
        $cat = new Addons;  
         $cat->name =  $request->get('name');   
         $cat->price =  $request->get('price');  
          $cat->description =  $request->get('description');   
           $cat->status =  $request->get('status');  
        $cat->save(); 
        return redirect('addons/index');
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
        $cat= Addons::find($id);  
     return view('admin.pages.addons.edit', compact('cat'));  
        
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
            'name'=>'required',  
             
        ]);  
  
        $cat = Addons::find($id);  
        $cat->name =  $request->get('name');   
         $cat->price =  $request->get('price');  
          $cat->description =  $request->get('description');   
           $cat->status =  $request->get('status');  
        $cat->save();
        return redirect('addons/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Addons::find($id);  
        $cat->delete(); 
        return redirect('addons/index');
    }
}

