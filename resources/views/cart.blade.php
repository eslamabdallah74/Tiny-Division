@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/cart.css")}}">
@endsection

@section('title','Cart') {{-- Title --}}

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
                                            <td><input class="form-control" type="text" value="{{ $CartProduct->Qty }}" /></td>
                                            <td class="text-right">{{ $CartProduct->price }} $</td>
                                            <td>
                                                <a class="btn btn-danger" href="{{ route('users.index') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById(
                                                'delete-form-{{$CartProduct->id}}').submit();">
                                            Remove
                                                </a>
                                            </td>
                                            <form id="delete-form-{{$CartProduct->id}}"
                                            + action="{{route('my-cart.destroy', $CartProduct->id)}}"
                                            method="post">
                                            @csrf @method('DELETE')
                                            </form>
                                         </tr>
                                    @endforeach
                                         <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <td class="text-right">{{ $userCart->total }} $</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping</td>
                                        <td class="text-right">20,00$</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>{{ $userCart->total + 20}} $</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Validate error msg --}}
                               @if ($errors->any())
                               <div class="alert alert-danger pt-10">
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif
                    <div class="col mb-2">
                        <div class="row">
                        <div class="col-sm-12 col-md-6 text-right">
                                <button class="btn btn-lg btn-block btn-success text-uppercase"><a href="{{url('/')}}">Continue Shopping</a></button>
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
