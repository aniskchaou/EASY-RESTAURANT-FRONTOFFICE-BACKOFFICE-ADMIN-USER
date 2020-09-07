<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Category;
use App\Comand;
use App\Product;


class DashBoardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$msgs = Message::count();
    	$cats = Category::count();
    	$cmds = Comand::count();
    	$pds = Product::count();
    	return view('admin.dashboard',compact('msgs','cats','cmds','pds'));
    }
}
