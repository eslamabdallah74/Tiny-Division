<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Products;
use DB;
use Illuminate\Http\Request;
use Session;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCart       = Cart::where('user_id', Auth()->id())
        ->first();
        // dd($userCart);
        if ($userCart == NULL)
        {
            return view('cart', compact('userCart'));
        } else {
            $CartProducts   = CartProduct::where('user_id', Auth()->id())
            ->where('cart_id', $userCart->id)
            ->get();
            return view('cart', compact('userCart', 'CartProducts'));
        }
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
        $cart           = Cart::where('user_id', Auth()->id())
        ->first();
        if ($cart==null) {// User does not have cart
            $newCart    = Cart::create([
                'user_id'   => Auth()->id(),
                'total'     => $product->product_price
            ]);
            $credentials    = CartProduct::credentials($request, $product);
            $credentials['cart_id'] = $newCart->id;
            $CART           = CartProduct::create($credentials);
        } else {//User already have cart
            $credentials    = CartProduct::credentials($request, $product);
            $credentials['cart_id'] = $cart->id;
            // Test 1
            $SameProduct = CartProduct::where('user_id', Auth()->id())->where('product_id' , $product->id )->get();
            if ($SameProduct->count() >= 1 ) {
                return redirect()->route('my-cart.index')->withErrors('The Item Is Already Exist');
            } else {
            // Insert product into cart
            $CART           = CartProduct::create($credentials);
            // update total price
            $this->updateTotal($cart);
            }
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
        $total  = CartProduct::where('cart_id', $Cart->id)
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

        $cart  = Cart::where('user_id', Auth()->id())
        ->first();



        $deleteProduct = CartProduct::findOrFail($id);
        $deleteProduct->delete();

        $CartProducts   = CartProduct::where('user_id', Auth()->id())
        ->where('cart_id', $cart->id)
        ->get();

        if ($CartProducts->count() >= 1) {
            $this->updateTotal($cart);
            return redirect()->route('my-cart.index');
        } else {
            $cart->delete();
            return redirect()->route('my-cart.index');
        }
        // End of delete
    }
}
