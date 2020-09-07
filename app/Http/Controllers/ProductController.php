<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
    	$pds = Product::all();
    	$cats = Category::all();  
  
        return view('product.product', compact('pds','cats'));
    }
    function productByCategory($id)
    {
    	
    }
}
