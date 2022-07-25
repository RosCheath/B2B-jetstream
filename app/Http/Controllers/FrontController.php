<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('Front.home');
    }

    public function shop(){
        return view('Front.shop');
    }
}
