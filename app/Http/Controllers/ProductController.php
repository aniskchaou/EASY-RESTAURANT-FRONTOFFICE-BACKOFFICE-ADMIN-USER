<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * get all products
     */
    public function index()
    {
    	$pds = Product::all();
    	$cats = Category::all();  
  
        return view('product.product', compact('pds','cats'));
    }

    /**
     * find product by id
     */
    function productByCategory($id)
    {
    	
    }
}
