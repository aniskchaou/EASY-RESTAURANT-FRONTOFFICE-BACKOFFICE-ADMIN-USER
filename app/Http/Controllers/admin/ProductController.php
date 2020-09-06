<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pds = Product::all();  
  
        return view('pages.product.index', compact('pds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create'); 
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
            'category'=>'name',  
            'category'=>'description',  
            'category'=>'category_id',  
            'category'=>'price',  
        ]);  
  
        $pd = new Product;  
        $pd->name =  $request->get('name');
        $pd->description =  $request->get('description');
        $pd->category_id =  $request->get('category_id');
        $pd->price =  $request->get('price');
        $pd->save();
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
        $pd= Product::find($id);  
     return view('pages.product.edit', compact('pd')); 
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
            'category'=>'name',  
            'category'=>'description',  
            'category'=>'category_id',  
            'category'=>'price',  
        ]);  
  
        $pd = Product::find($id);  
        $pd->name =  $request->get('name');
        $pd->description =  $request->get('description');
        $pd->category_id =  $request->get('category_id');
        $pd->price =  $request->get('price');
        $pd->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pd=Product::find($id);  
        $pd->delete();
    }
}
