@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="background">
    <div class="container">
        <h1 class="main-h1">Orders
            <br>
                <a href="{{asset('dashboard/Create/cOrder')}}" class="btn btn-primary">New Order</a>
        </h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">User</th>
                <th scope="col">Products</th>
                <th scope="col">Status</th>
                <th scope="col">Total Price</th>
                <th scope="col">Orderd At</th>
              </tr>
            </thead>

          </table>
    </div>
</div>
@endsection
