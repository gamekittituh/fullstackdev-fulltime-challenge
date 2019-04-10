<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
