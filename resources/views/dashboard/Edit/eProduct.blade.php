@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form jumbotron">
            <div class="note">
                <p>Add New Product</p>
            </div>
            <form method="POST" action="{{url('dashboard/products/')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-row pt-3">
                  <div class="form-group col-md-6">
                    <input value='{{$product->product_name}}' name="product_name" type="text" class="form-control" id="inputEmail4" placeholder="Product Name">
                  </div>
                  <div class="form-group col-md-6">
                    <input value='{{$product->product_price}}' name="product_price" type="number" class="form-control" id="inputPassword4" placeholder="Product Price">
                  </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Description</span>
                    </div>
                    <textarea value='{{$product->product_description}}' name="product_description" class="form-control" aria-label="With textarea" rows="5"></textarea>
                  </div>
                  <div class="pt-3">
                    <input name="image" class="form-control form-control" id="formFileLg" type="file">
                  </div>
                <div class="form-row pt-3">
                    <select value='{{$product->approval}}'  name="product_approval" class="custom-select" >
                        <option value="" selected>Product Approval</option>
                        <option value="0">Not Approved</option>
                        <option value="1">Approved</option>
                      </select>
                </div>
                   {{-- Validate error msg --}}
                   @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul class="">
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif
                <button type="submit" class="btn btn-primary mt-4">Add Product</button>
              </form>
        </div>
    </div>
 </div>

@endsection
