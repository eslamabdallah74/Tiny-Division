<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\category;
use App\Models\CartProduct;
use Illuminate\Cache\RateLimiting\Limit;

class CollectionsController extends Controller
{
    public function index()
    {
        $OurProducts  = Products::orderBy('id','DESC')->get();

        return view('Collection' , compact('OurProducts'));

    }
}
