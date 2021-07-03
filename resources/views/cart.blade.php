@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/cart.css")}}">
@endsection

@section('title','Cart') {{-- Title --}}

@section('content')
<div class="container">

    @if ($userCart == NULL)
    <div class="alert alert-danger" role="alert" id="DANGER">
        There's not items here
        <a href="{{asset('/')}}"> Go > Home <i class="fa fa-home"></i></a>
      </div>
    @else
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
                                            <td>
                                                <!-- QTY -->
                                            <form method="POST" action="{{ route('my-cart.update', $CartProduct->id) }}">
                                            @csrf
                                            @method('PATCH')
                                              <div class="input-group">
                                                    <input name="Qty" value="{{$CartProduct->Qty}}" type="text" id="quantity"  class="form-control input-number"  min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button value="submit" class="quantity-left-minus btn btn-secondary btn-number"  data-type="minus" data-field="">
                                                        Change
                                                        </button>
                                                   </span>
                                                </div>
                                             </form>
                                            </td>
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
                                        <td class="text-right">{{ number_format($userCart->total, 2) }} $</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping</td>
                                        <td class="text-right">+20,00$</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>{{ number_format($userCart->total+20, 2)}} $</strong></td>
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
                                <form method="POST" action="{{route('Order.store')}}">
                                    @csrf
                                    <input type="hidden" name="cart_id" value="{{ $userCart->id }}">
                                    <button class="btn btn-lg btn-block btn-success text-uppercase" value="submit" id='BuyToShowForm' style="margin-bottom: 20px;">
                                        Order Now
                                    </button>
                                </form>
                               </div>
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </div>
      </div>
    </div>

@endif
@endsection
