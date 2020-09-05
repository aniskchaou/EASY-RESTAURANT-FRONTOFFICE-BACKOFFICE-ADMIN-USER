<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
    {
       // $this->middleware('auth');
    }

    function index()
    {
    	return view('pages.home', array('user' => 1));
    }
}
