<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class OneProduct extends Controller
{
    public function index($id)
    {
        $OneProduct = Products::find($id);
        return view('oneProduct', compact('OneProduct'));

    }
}
