<?php

namespace App\Http\Controllers\admin;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RoomController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rooms = Room::all();  
  
        return view('admin.pages.room.index', compact('rooms'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.room.create');  
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
  
        $cat = new Room;  
        $cat->name =  $request->get('name');
        $cat->capacity =  $request->get('capacity');
        $cat->status =  $request->get('status');
        $cat->save(); 
        return redirect('room/index');
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
        $cat= Room::find($id);  
     return view('admin.pages.room.edit', compact('cat'));  
        
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
  
        $cat = Room::find($id);  
          $cat->name =  $request->get('name');
        $cat->capacity =  $request->get('capacity');
        $cat->status =  $request->get('status');   
        $cat->save();
        return redirect('room/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Room::find($id);  
        $cat->delete(); 
        return redirect('room/index');
    }
}
