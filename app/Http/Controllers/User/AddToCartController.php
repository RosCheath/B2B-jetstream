<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{

    public function index()
    {
        return view('add_to_cart');
    }

}
