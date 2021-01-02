<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = \App\Product::orderBy('created_at', 'DESC')->take(12)->get();
        return view('welcome', compact('products'));
    }
}
