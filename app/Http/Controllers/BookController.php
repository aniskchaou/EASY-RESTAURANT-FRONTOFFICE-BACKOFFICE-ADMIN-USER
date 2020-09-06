<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index()
    {
      return view('book.book');
    }


    function book($id)
    {

    }
}
