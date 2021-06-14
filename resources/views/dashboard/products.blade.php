@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="background">
    <div class="container">
        <h1 class="main-h1">Products
            <br>
                <a href="{{asset('dashboard/Create/cProduct')}}" class="btn btn-primary">Add new Product</a>
        </h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Product name</th>
                <th scope="col">category</th>
                <th scope="col">Product description</th>
                <th scope="col">Product approval</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product price</th>
                <th scope="col">Created at</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_approval}}</td>
                    <td id="Product-img"> <img src="{{ asset('uploads/products/' . $product->product_img) }}" alt="product image"> </td>
                    <td>{{$product->product_price}}</td>
                    <td>{{Carbon\Carbon::parse($product->created_at)->diffForHumans()}}</td>
                    <td><a class="btn btn-info" href="{{asset('dashboard/Edit/eProduct/'.$product->id)}}">Edit</a></td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('users.index') }}"
                        onclick="event.preventDefault();
                         document.getElementById(
                           'delete-form-{{$product->id}}').submit();">
                      Delete
                        </a>
                    </td>
                    <form id="delete-form-{{$product->id}}"
                       + action="{{route('products.destroy', $product->id)}}"
                       method="post">
                       @csrf @method('DELETE')
                     </form>
                  </tr>
                @endforeach
            </tbody>

          </table>
    </div>
</div>
@endsection
