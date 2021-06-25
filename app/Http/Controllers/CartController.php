<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Products;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCart       = Cart::where('user_id',Auth()->id())
        ->first();
        $CartProducts   = CartProduct::where('user_id',Auth()->id())
        ->where('cart_id',$userCart->id)
        ->get();


        return view('cart',compact('userCart','CartProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules          = CartProduct::rules($request);
        $request->validate($rules);
        $product        = Products::findOrFail($request->product_id);
        // Check if user has already cart
        $cart           = Cart::where('user_id',Auth()->id())
        ->first();
        if($cart==NULL){// User does not have cart
            $newCart    = Cart::create([
                'user_id'   => Auth()->id(),
                'total'     => $product->product_price
            ]);
            $credentials    = CartProduct::credentials($request,$product);
            $credentials['cart_id'] = $newCart->id;
            $CART           = CartProduct::create($credentials);
        }else{//User already have cart
            $credentials    = CartProduct::credentials($request,$product);
            $credentials['cart_id'] = $cart->id;
            $CART           = CartProduct::create($credentials);
            $this->updateTotal($cart);
        }


        return redirect()->route('my-cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    public function updateTotal($Cart)//Update cart When (ADD produc,Delete Product,Edit Qty of the product)
    {
        $total  = CartProduct::where('cart_id',$Cart->id)
        ->selectRaw('SUM(total) as total')
        ->first()
        ->total;
        $Cart->total = $total;
        $Cart->save();
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
    public function update(Request $request, $id)
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
        //
    }
}
