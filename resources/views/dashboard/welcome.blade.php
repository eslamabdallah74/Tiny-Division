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
                    <th scope="col"><a id="products-link" href="{{asset('dashboard/products')}}">Products</a></th>
                    <th scope="col"><a id="orders-link" href="{{asset('dashboard/orders')}}">Orders</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Number of</th>
                    <td>{{$allUsers->count()}}</td>
                    <td>2</td>
                    <td>3</td>
                  </tr>
                </tbody>
              </table>
              {{-- End of table 1 --}}
              <h3 class="">last {{$last3users->count()}}  registered Users </h3>
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
                 <h3 class="">last <a href="/products">Products</a> registered</h3>
                 <table class="table table-striped table-dark">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Product Name</th>
                       <th scope="col">Product Price</th>
                       <th scope="col">Product status</th>

                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>Otto</td>
                     </tr>
                     <tr>
                       <th scope="row">2</th>
                       <td>Jacob</td>
                       <td>Thornton</td>
                       <td>Otto</td>
                     </tr>
                     <tr>
                       <th scope="row">3</th>
                       <td>Larry</td>
                       <td>the Bird</td>
                       <td>Otto</td>
                     </tr>
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
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>Otto</td>
                       <td>2/2</td>
                     </tr>
                     <tr>
                       <th scope="row">2</th>
                       <td>Jacob</td>
                       <td>Thornton</td>
                       <td>Otto</td>
                       <td>2/2</td>
                     </tr>
                     <tr>
                       <th scope="row">3</th>
                       <td>Larry</td>
                       <td>the Bird</td>
                       <td>Otto</td>
                       <td>2/2</td>
                     </tr>
                   </tbody>
                 </table>
             {{-- End of table Orders --}}
        </div>
    </div>
@endsection
