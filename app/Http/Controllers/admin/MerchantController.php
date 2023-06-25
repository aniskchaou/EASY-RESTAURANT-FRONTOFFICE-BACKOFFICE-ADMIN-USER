<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Merchant;
use App\Http\Controllers\Controller;
class MerchantController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $merchants = Merchant::all();  
  
        return view('admin.pages.merchant.index', compact('merchants'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.merchant.create');  
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
  
        $cat = new Merchant;  
        $cat->name =  $request->get('name');
        $cat->slug =  $request->get('slug');
        $cat->telephone =  $request->get('telephone');
        $cat->email =  $request->get('email');
        $cat->email =  $request->get('email');
        $cat->cuisine =  $request->get('cuisine');
        $cat->save(); 
        return redirect('merchant/index');
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
        $cat= Merchant::find($id);  
     return view('admin.pages.merchant.edit', compact('cat'));  
        
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
  
        $cat = Merchant::find($id);  
         $cat->name =  $request->get('name');
        $cat->slug =  $request->get('slug');
        $cat->telephone =  $request->get('telephone');
        $cat->email =  $request->get('email');
        $cat->email =  $request->get('email');
        $cat->cuisine =  $request->get('cuisine');  
        $cat->save();
        return redirect('merchant/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Merchant::find($id);  
        $cat->delete(); 
        return redirect('merchant/index');
    }
}
