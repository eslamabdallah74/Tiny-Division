<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Carbon\Carbon;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //   $usersTime = User::all(); //get all records from the database
         $products = Products::orderBy('id' , 'desc')->get();// get all the records from the database and order them

         return view('dashboard\products', compact('products'));
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
        // Validate database

        $validated = $request->validate(
            [
                'product_name'          => 'required|unique:products',
                'product_price'         => 'required',
                'product_description'   => 'required',
                'product_approval'      => 'required',


            ]
        );

            // Insert new user into databasex
            $insert_product = new Products;
            $insert_product->product_name           = $request->product_name;
            $insert_product->product_approval       = $request->product_approval;
            $insert_product->product_price          = $request->product_price ;
            $insert_product->product_description    = $request->product_description;
            $insert_product->save();

            return redirect('dashboard\products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProduct = Products::findorFail($id);
        $deleteProduct->delete();
        return redirect('/dashboard/products');
    }
}
