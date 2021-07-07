<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
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
        //Show all orders
        $OrdersProducts = OrderProduct::orderBy('id' , 'desc')->with('Product','User')->get();
        $Orders         = Order::orderBy('id' , 'desc')->with('User')->get();
        return view('dashboard/orders', compact('OrdersProducts','Orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }
    public function ChangeStatus($id,$status)
    {
        $order  = Order::findOrFail($id);
        $order->status  = $status;
        $order->save();
        return redirect('dashboard/orders')->with('message', 'Order Status Has Been Changed');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart   = Cart::where('id',$request->cart_id)
        ->where('user_id',Auth()->id())
        ->first();
        if($cart){
            $order = Order::create([
                'user_id' => Auth()->id(),
                'total'   => $cart->total,
                'status'  => Order::PendingStatus
            ]);
            $CartProducts  = CartProduct::where('user_id',Auth()->id())
            ->where('cart_id',$cart->id)
            ->get();
            foreach ($CartProducts as $CartInfo){
                OrderProduct::create([
                    'order_id'      => $order->id,
                    'product_id'    => $CartInfo->product_id,
                    'user_id'       => Auth()->id(),
                    'price'         => $CartInfo->price,
                    'quntity'       => $CartInfo->Qty,
                    'total'         => $CartInfo->total,
                ]);
                $CartInfo->delete();
            }
            $cart->delete();
            return redirect()->back();
        }else{
            //Session
            return redirect()->back();
        }
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
