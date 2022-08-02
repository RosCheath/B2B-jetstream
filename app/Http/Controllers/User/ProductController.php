<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::get();
        return view('UserDashboard.product.ProductGrid',compact('product'));
    }

    public function create(){

        return view('UserDashboard.product.create');
    }
}
