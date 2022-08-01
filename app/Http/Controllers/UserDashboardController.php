<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard(){
        $productTotal = Product::where('team_id','=',Auth::user()->currentTeam->id)->count();
        return view('dashboard',compact('productTotal'));
    }
}
