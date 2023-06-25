<?php

namespace App\Http\Controllers\admin;
use App\Tablee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;

class TableController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tables = Tablee::all();
         $rooms=Room::all();  
  
        return view('admin.pages.table.index', compact('tables','rooms'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rooms=Room::all();
        return view('admin.pages.table.create',compact('rooms'));  
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
  
        $cat = new Tablee;  
        $cat->name =  $request->get('name');
        $cat->min =  $request->get('min');
        $cat->max =  $request->get('max');
        $cat->room =  $request->get('room');
        $cat->status =  $request->get('status');
        $cat->save(); 
        return redirect('table/index');
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
        $rooms=Room::all();
        $cat= Tablee::find($id);  
     return view('admin.pages.table.edit', compact('cat','rooms'));  
        
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
  
        $cat = Tablee::find($id);  
         $cat->name =  $request->get('name');
        $cat->min =  $request->get('min');
        $cat->max =  $request->get('max');
        $cat->room =  $request->get('room');
        $cat->status =  $request->get('status');    
        $cat->save();
        return redirect('table/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Tablee::find($id);  
        $cat->delete(); 
        return redirect('table/index');
    }
}
