<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Products;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my-cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('my-cart');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules          = OrderProduct::rules($request);
        $request->validate($rules);
        $product        = Products::findOrFail($request->product_id);
        // Check if user has already Order
        $Order           = Order::where('user_id', Auth()->id())->first();
        if ($Order==null) {// User does not have Order
            $newOrder    = Order::create([
                'user_id'   => Auth()->id(),
                'total'     => $product->product_price
            ]);
            $credentials    = OrderProduct::credentials($request, $product);
            $credentials['cart_id'] = $newOrder->id;
            $CART           = OrderProduct::create($credentials);
        } else {//User already have Order
            $credentials    = OrderProduct::credentials($request, $product);
            $credentials['cart_id'] = $Order->id;
            // Test 1
            $SameProduct = OrderProduct::where('user_id', Auth()->id())->where('product_id' , $product->id )->get();
            if ($SameProduct->count() >= 1 ) {
                return redirect()->route('my-cart.index')->withErrors('The Item Is Already Exist');
            } else {
            // Insert product into cart
            $Order           = Order::create($credentials);
            // update total price
            $this->updateTotal($Order);
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
