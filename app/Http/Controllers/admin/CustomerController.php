<?php

namespace App\Http\Controllers\admin;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers = Customer::all();  
  
        return view('admin.pages.customer.index', compact('customers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.customer.create');  
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
  
        $cat = new Customer;  
        $cat->name =  $request->get('name');
        $cat->email =  $request->get('email');
        $cat->address =  $request->get('address');
        $cat->save(); 
        return redirect('customer/index');
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
        $cat= Customer::find($id);  
     return view('admin.pages.customer.edit', compact('cat'));  
        
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
  
        $cat = Customer::find($id);  
        $cat->name =  $request->get('name');
        $cat->email =  $request->get('email');
        $cat->address =  $request->get('address');   
        $cat->save();
        return redirect('customer/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Customer::find($id);  
        $cat->delete(); 
        return redirect('customer/index');
    }
}
