<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
	public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.dashboard');
    }
}
