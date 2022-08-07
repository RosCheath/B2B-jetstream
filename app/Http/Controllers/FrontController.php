<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $products = Product::all();
        return view('Front.home',compact('products'));
    }

    public function shop(){
        $products = Product::all();
        return view('Front.shop',compact('products'));
    }
}
