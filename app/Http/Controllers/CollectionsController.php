<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\category;
use App\Models\CartProduct;


class CollectionsController extends Controller
{
    public function index()
    {
        $Jackets  = Products::orderBy('id','DESC')->where('category_id', 4)->get();
        $Shirts  = Products::orderBy('id','DESC')->where('category_id', 3)->get();
        $Shoes  = Products::orderBy('id','DESC')->where('category_id', 2)->get();
        $Suits  = Products::orderBy('id','DESC')->where('category_id', 1)->get();
        $MyCart  = CartProduct::where('user_id' , Auth()->id())->get();


        $Categories = Category::orderBy('id','Desc')->get();

        return view('Collection' , compact('Jackets','Shirts','Shoes','Suits','Categories','MyCart'));

    }
}
