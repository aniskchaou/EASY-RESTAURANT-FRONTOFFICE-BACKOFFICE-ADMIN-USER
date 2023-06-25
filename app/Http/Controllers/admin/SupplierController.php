<?php

namespace App\Http\Controllers\admin;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SupplierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $suppliers = Supplier::all();  
  
        return view('admin.pages.supplier.index', compact('suppliers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.supplier.create');  
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
  
        $cat = new Supplier;  
        $cat->name =  $request->get('name');
        $cat->email =  $request->get('email');
        $cat->address =  $request->get('address');
        $cat->telephone =  $request->get('telephone');
        $cat->save(); 
        return redirect('supplier/index');
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
        $cat= Supplier::find($id);  
     return view('admin.pages.supplier.edit', compact('cat'));  
        
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
  
        $cat = Supplier::find($id);  
       $cat->name =  $request->get('name');
        $cat->email =  $request->get('email');
        $cat->address =  $request->get('address');  
        $cat->telephone =  $request->get('telephone');    
        $cat->save();
        return redirect('supplier/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Supplier::find($id);  
        $cat->delete(); 
        return redirect('supplier/index');
    }
}
