<?php

namespace App\Http\Controllers\Dashbored;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Products;
use App\Models\category;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class DashboredController extends Controller
{
    public function index()
    {
        $last3users = User::orderBy('id','DESC')->limit(3)->get();
        $allUsers   = User::all();

        $last3gateory    = category::orderBy('id','DESC')->limit(3)->get();
        $allGategories   = category::all();

        $last3products = Products::orderBy('id','DESC')->limit(3)->get();
        $allproducts   = Products::all();


        $last3orders = OrderProduct::orderBy('id','DESC')->with('User','Product')->limit(3)->get();
        $allorders   = Order::all();



        return view('dashboard.welcome', compact('last3users','allUsers','last3products','allproducts','last3gateory','allGategories','allorders','last3orders'));

    }
}
