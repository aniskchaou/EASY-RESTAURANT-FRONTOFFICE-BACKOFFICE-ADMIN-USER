<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TableReservation;
use App\Customer;

class TableReservationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tables = TableReservation::all(); 
          $custs=Customer::all();
  
        return view('admin.pages.tablereservation.index', compact('tables','custs'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $custs=Customer::all();
        return view('admin.pages.tablereservation.create', compact('custs'));  
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
            'customer'=>'required',  
        ]);  
  
        $cat = new TableReservation;  
        $cat->customer =  $request->get('customer');
        $cat->date =  $request->get('date');
        $cat->time =  $request->get('time');
        $cat->guest_number =  $request->get('guest');
        $cat->note =  $request->get('note');
        $cat->table =  $request->get('table');
        $cat->status =  $request->get('status');
        $cat->save(); 
        return redirect('tablereservation/index');
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
         $custs=Customer::all();
        $cat= TableReservation::find($id);  
     return view('admin.pages.tablereservation.edit', compact('cat','custs'));  
        
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
        /*  $request->validate([  
            'customer'=>'required',  
             
        ]);   */
  
        $cat = TableReservation::find($id);  
                $cat->customer =  $request->get('customer');
        $cat->date =  $request->get('date');
        $cat->time =  $request->get('time');
        $cat->guest_number =  $request->get('guest');
        $cat->note =  $request->get('note');
        $cat->table =  $request->get('table');
        $cat->status =  $request->get('status');  
        $cat->save();
        return redirect('tablereservation/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=TableReservation::find($id);  
        $cat->delete(); 
        return redirect('tablereservation/index');
    }
}
