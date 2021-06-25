<?php

namespace App\Http\Controllers;

use App\Models\ProductRivew;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductRivewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productID      = Products::find($request);
        $userID         = User::where('user_id',Auth()->id());

         // Validate database
         $validated = $request->validate(
            [
                'rating'          => 'required',
                'review'          => 'required',

            ]
        );
            //  update product into databasex
            $AddRivew = ProductRivew::all();
            $AddRivew->user_id           = $userID;
            $AddRivew->product_id        = $productID;
            $AddRivew->rating            = $$request->rating;
            $AddRivew->review            = $request->review;
            $AddRivew->savae();
            return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductRivew  $productRivew
     * @return \Illuminate\Http\Response
     */
    public function show(ProductRivew $productRivew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductRivew  $productRivew
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductRivew $productRivew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductRivew  $productRivew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductRivew $productRivew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductRivew  $productRivew
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductRivew $productRivew)
    {
        //
    }
}
