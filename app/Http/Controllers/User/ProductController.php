<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('UserDashboard.ProductGrid');
    }

    public function create(){

        return view('UserDashboard.create');
    }
}
