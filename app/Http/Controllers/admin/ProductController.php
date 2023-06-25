<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Size;
use App\Ingredients;
use App\FoodType;
use App\Kitchen;
use App\Addons;
use App\Http\Controllers\Controller;
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
        $cats = Category::all();
  
        return view('admin.pages.product.index', compact('pds','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        $sizes = Size::all();
        $ingredients = Ingredients::all();
        $foodtypes = FoodType::all();
        $kitchens = Kitchen::all();
        $addons = Addons::all();
        return view('admin.pages.product.create',compact('cats','sizes','ingredients','foodtypes','kitchens','addons')); 
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
            'description'=>'required',  
            'category_id'=>'required',  
            'price'=>'required',
            'image'=>'required'
        ]); 
         
         $imageName = time().'.'.$request->image->getClientOriginalExtension();
         $request->image->move(public_path('images'), $imageName);

        $pd = new Product;  
        $pd->name =  $request->get('name');
        $pd->description =  $request->get('description');
        $pd->category_id =  $request->get('category_id');
        $pd->price =  $request->get('price');
        $pd->ingredients =  $request->get('ingredients');
        $pd->kitchen =  $request->get('kitchen');
        $pd->size =  $request->get('size');
        $pd->type =  $request->get('foodtype');
        $pd->addons =  $request->get('addons');
        $pd->image =  $imageName;
        $pd->save();
        
       
         return redirect('/product/index');
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
        $cats = Category::all();
        $pd= Product::find($id);  
         $sizes = Size::all();
        $ingredients = Ingredients::all();
        $foodtypes = FoodType::all();
        $kitchens = Kitchen::all();
        $addons = Addons::all();
     return view('admin.pages.product.edit', compact('pd','cats','sizes','ingredients','foodtypes','kitchens','addons')); 
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
            'description'=>'required',  
            'category_id'=>'required',  
            'price'=>'required'
        ]); 
        // $imageName = time().'.'.$request->get('image')->getClientOriginalExtension();
        //  $request->image->move(public_path('images'), $imageName);


        $pd = Product::find($id);  
        $pd->name =  $request->get('name');
        $pd->description =  $request->get('description');
        $pd->category_id =  $request->get('category_id');
        $pd->price =  $request->get('price');

        $pd->ingredients =  $request->get('ingredients');
        $pd->kitchen =  $request->get('kitchen');
        $pd->size =  $request->get('size');
        $pd->type =  $request->get('foodtype');
        $pd->addons =  $request->get('addons');

        //$pd->image =  $imageName;
        $pd->save();
        return redirect('/product/index');
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
        return redirect('/product/index');
    }
}
