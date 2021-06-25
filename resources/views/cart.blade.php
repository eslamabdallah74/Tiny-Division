@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/cart.css")}}">
@endsection

@section('title','Contact') {{-- Title --}}

@section('content')
<div class="container">
    <div class="card cart">
        <div class="card-body">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Available</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-right">Price</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($CartProducts as $CartProduct)
                                        <tr>
                                            <td><img class="img-thumbnail" src="{{ asset('uploads/products/'.$CartProduct->product->product_img) }}" /> </td>
                                            <td>{{ $CartProduct->product->product_name }}</td>
                                            <td>{{ $CartProduct->product->product_Qty }}</td>
                                            <td><input class="form-control" type="text" value="1" /></td>
                                            <td class="text-right">{{$total = $CartProduct->price }} $</td>
                                            <td class="text-right"><button class="btn btn-sm btn-danger"> X </button> </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <td class="text-right">{{ $CartProduct->price}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping</td>
                                        <td class="text-right">6,00 $</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>{{$CartProduct->total}} $</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                        <div class="col-sm-12 col-md-6 text-right">
                                <button class="btn btn-lg btn-block btn-success text-uppercase">Continue Shopping</button>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                                <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
