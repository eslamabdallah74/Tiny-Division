@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="background">
        <div class="container">
                <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><a id="users-link" href="{{asset('dashboard/users')}}">Users</a></th>
                    <th scope="col"><a id="products-link" href="{{asset('dashboard/categories')}}">Categories</a></th>
                    <th scope="col"><a id="products-link" href="{{asset('dashboard/products')}}">Products</a></th>
                    <th scope="col"><a id="orders-link" href="{{asset('dashboard/orders')}}">Orders</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Number of</th>
                    <td>{{$allUsers->count()}}</td>
                    <td>{{$allGategories->count()}}</td>
                    <td>{{$allproducts->count()}}</td>
                    <td>{{$allorders->count()}}</td>
                  </tr>
                </tbody>
              </table>
              {{-- End of table 1 --}}
              <h3 class="">last {{$last3users->count()}}  <a href="/dashboard/users">Users</a> registered </h3>
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($last3users as $key=>$user)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
                 {{-- End of table Users --}}
                 <h3 class="">last 3 <a href="/dashboard/products">Products</a> registered</h3>
                 <table class="table table-striped table-dark">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Product Name</th>
                       <th scope="col">Product Price</th>
                       <th scope="col">Product Image</th>
                       <th scope="col">Product Description</th>


                     </tr>
                   </thead>
                   <tbody>
                    @foreach ($last3products as $key=>$product)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$product->product_name}}</td>
                        <td>${{$product->product_price}}</td>
                        <td>
                           <span id="dashbored-img">
                             <img src="{{ asset('uploads/products/' . $product->product_img) }}" alt="product image">
                            </span>
                        </td>
                        <td>{{$product->product_description}}</td>

                      </tr>
                    @endforeach
                </tbody>
                 </table>
                 {{-- End of table Products --}}
                 <h3 class="">last <a href="/orders">Orders</a> registered</h3>
                 <table class="table table-striped table-dark">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Username</th>
                       <th scope="col">Product Name</th>
                       <th scope="col">Product Price</th>
                       <th scope="col">Orderd at</th>
                       <th scope="col">Since</th>
                     </tr>
                   </thead>
                   <tbody>
                       @foreach ($last3orders as $last3order)

                     <tr>
                       <th scope="row">1</th>
                       <td>{{$last3order->User->name}}</td>
                       <td>{{$last3order->Product->product_name}}</td>
                       <td>${{$last3order->price}}</td>
                       <td>{{$last3order->created_at}}</td>
                       <td>{{Carbon\Carbon::parse($last3order->created_at)->diffForHumans()}}</td>

                     </tr>
                     @endforeach
                   </tbody>
                 </table>
             {{-- End of table Orders --}}
        </div>
    </div>
@endsection
