<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Category;
use App\Comand;
use App\Product;
use App\Chart;

class DashBoardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*
    * count message, category, product, booking
    */
    public function index()
    {
    	$msgs = Message::count();
    	$cats = Category::count();
    	$cmds = Comand::count();
    	$pds = Product::count();

        

        $groups=array(1,2,4,6);
        for ($i=0; $i<=count($groups); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
    	return view('admin.dashboard',compact('chart','msgs','cats','cmds','pds'));
    }
}
