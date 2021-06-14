<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Carbon\Carbon;
use App\Http\Controllers\ImageUploadController;
use App\Models\category;
use Illuminate\Support\Facades\File;
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
        // $products = Products::with(relations: 'getCategory')->get();

         return view('dashboard\products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriesP = category::all();
        return view('dashboard\Create\cProduct', compact('categoriesP'));

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
                'category_id'           => 'required',
                'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'mimes' => 'The image should be jpeg,png,jpg,gif,svg',
            ]
        );

            // Insert new user into databasex
            $insert_product = new Products;
            $insert_product->product_name           = $request->product_name;
            $insert_product->product_approval       = $request->product_approval;
            $insert_product->product_price          = $request->product_price ;
            $insert_product->product_description    = $request->product_description;
            $insert_product->category_id            = $request->category_id;



            if ($request->hasfile('image')) {
                $file       = $request->file('image');
                $extension  = $file->getClientOriginalExtension(); //get image exten
                $filename   = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $insert_product->product_img = $filename;
            } else {
                return $request;
                $insert_product->product_img = '';
            }

            $insert_product->save();


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
         $product = Products::find($id); //get all records from the database
         return view('dashboard\Edit\eProduct', compact('product'));
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
        // Validate database
        $validated = $request->validate(
            [
                'product_name'          => 'required',
                'product_price'         => 'required',
                'product_description'   => 'required',
                'product_approval'      => 'required',
                'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'mimes' => 'The image should be jpeg,png,jpg,gif,svg',
            ]
        );
            //  update product into databasex
            $update_product = Products::find($request->id);
            $update_product->product_name           = $request->product_name;
            $update_product->product_approval       = $request->product_approval;
            $update_product->product_price          = $request->product_price ;
            $update_product->product_description    = $request->product_description;

            if ($request->hasfile('image')) {
                $destination = 'uploads/products/'.$update_product->product_img;
                if (File::exists($destination)) {
                   File::delete($destination);
                }
                $file       = $request->file('image');
                $extension  = $file->getClientOriginalExtension(); //get image exten
                $filename   = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $update_product->product_img = $filename;
            }
            $update_product->update();
            return redirect('dashboard/products/');

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
        $destination = 'uploads/products/'.$deleteProduct->product_img;
        if (File::exists($destination))
    {
            File::delete($destination);
        }
        $deleteProduct->delete();
        return redirect('/dashboard/products');
    }
}
