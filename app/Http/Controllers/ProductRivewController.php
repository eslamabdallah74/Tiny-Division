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
    public function store($id,Request $request)
    {

            $product   = Products::findOrFail($id);
            $rules = ProductRivew::rules($request);
            $request->validate($rules);
            $credentials = ProductRivew::credentials($request, $product->id);
            $credentials = ProductRivew::create($credentials);
            return redirect()->back()
            ->with('message', 'You Rivew has been added');;

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
