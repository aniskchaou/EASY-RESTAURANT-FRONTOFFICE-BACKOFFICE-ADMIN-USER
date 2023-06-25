<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Comand;
use App\Category;
use App\Size;
use App\Ingredients;
use App\FoodType;
use App\Kitchen;
use App\Addons;
class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFood()
    {
        $cats = Category::all();
        $sizes = Size::all();
        $ingredients = Ingredients::all();
        $foodtypes = FoodType::all();
        $kitchens = Kitchen::all();
        $addons = Addons::all();
         $sizes = array();  
  
        return view('admin.pages.reporting.food', compact('cats','sizes','ingredients','foodtypes','kitchens','addons'));  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOrder()
    {
         $sizes = array(); 
          $pds=Product::all();  
  
        return view('admin.pages.reporting.order', compact('sizes','pds'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFood(Request $request)
    {
        $cats = Category::all();
        $sizes = Size::all();
        $ingredients = Ingredients::all();
        $foodtypes = FoodType::all();
        $kitchens = Kitchen::all();
        $addons = Addons::all();

        $category= $request->get('category');
        $type= $request->get('type');
        $kitchen= $request->get('kitchen');
         $sizes=Product::where('category_id','=',$category)->where('type','=',$type)->where('kitchen','=',$kitchen)->get();
        return view('admin.pages.reporting.food', compact('cats','sizes','ingredients','foodtypes','kitchens','addons'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOrder(Request $request)
    {
       $category= $request->get('category');
        $pds=Product::all(); 
       
         $sizes=Comand::where('product','=',$category)->get();
        return view('admin.pages.reporting.order', compact('sizes','pds'));
    }
}
