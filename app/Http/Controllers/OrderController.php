<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Models\User;



class OrderController extends Controller
{
    public function index()
    {
        $order = Order::orderBy('id' , 'desc')->with('userOrder')->get();

        // $products = Products::orderBy('id' , 'desc')->get();// get all the records from the database and order them
        // $products = Products::with(relations: 'getCategory')->get();

         return view('dashboard\orders', compact('order'));
    }

        public function create()

        {
            $users = User::with('usersOrder')->get();
            // $products = Products::orderBy('id' , 'desc')->with('productOrder')->get();

            return view('dashboard/Create/cOrder', compact('users'));
        }


}
