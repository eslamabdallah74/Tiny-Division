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
                                            <td>{{ $CartProduct->id }}</td>
                                            <td><input class="form-control" type="text" value="1" /></td>
                                            <td class="text-right">{{ $CartProduct->price }} $</td>
                                            <td class="text-right"><button class="btn btn-sm btn-danger"> X </button> </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <td class="text-right">255,90 €</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping</td>
                                        <td class="text-right">6,90 €</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>346,90 €</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <button class="btn btn-block btn-light">Continue Shopping</button>
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
