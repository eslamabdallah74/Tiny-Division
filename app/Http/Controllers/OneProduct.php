<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductRivew;
use App\Models\OrderProduct;



class OneProduct extends Controller
{
    public function index($id)
    {
        $OneProduct = Products::find($id);
        $Rivews = ProductRivew::orderBy('id','DESC')->limit(4)->where('product_id' , $id)->get();
        return view('oneProduct', compact('OneProduct','Rivews'));

    }
    public function store(Request $request)
    {
        // Validate database
        $validated = $request->validate(
            [
                'quntity'          => 'required',
            ],
            [
                'mimes' => 'The image should be jpeg,png,jpg,gif,svg',
            ]
        );
            //  update product into databasex
            $orderProduct = Products::find($request->id);
            $orderProduct->user_id                = $request->user_id ;
            $orderProduct->product_id             = $request->product_id;
            $orderProduct->product_name           = $request->product_name;
            $orderProduct->product_price          = $request->product_price ;
            $orderProduct->quntity                = $request->quntity;

            $orderProduct->save();
            return redirect('oneProduct');

    }

}
