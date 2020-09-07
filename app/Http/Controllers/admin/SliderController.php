<?php

namespace App\Http\Controllers\admin;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sls = Slider::all();
        $pds = Product::all();
        return view('admin.pages.slider.index', compact('sls','pds'));
    }   
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $pds = Product::all(); 
        return view('admin.pages.slider.create',compact('pds')); 
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
            'product_id'=>'required',  
        ]);  
  
        $sl = new Slider;  
        $sl->product_id =  $request->get('product_id');
        $sl->save();
        return redirect('/slider/index');
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
        $cat= Category::find($id);  
     return view('admin.pages.category.edit', compact('cat')); 
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
            'category'=>'required',  
             
        ]);  
  
        $cat = Category::find($id);  
        $cat->name =  $request->get('category');    
        $cat->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sl=Slider::find($id);  
        $sl->delete();
        return redirect('/slider/index');
    }
}
