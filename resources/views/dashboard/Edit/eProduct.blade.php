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
            <form method="POST" action="{{asset('dashboard/products/')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row pt-3">
                  <div class="form-group col-md-6">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input name="product_name" value='{{$product->product_name}}'  type="text" class="form-control" id="inputEmail4" placeholder="Product Name">
                  </div>
                  <div class="form-group col-md-6">
                    <input value="{{old('product_price', $product->product_price)}}" name="product_price" type="number" class="form-control" id="inputPassword4" placeholder="Product Price">
                  </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Description</span>
                    </div>
                    <textarea name="product_description" class="form-control" aria-label="With textarea" rows="5">{{$product->product_description}}</textarea>
                  </div>
                  <div class="pt-3">
                    <input name="image" class="form-control form-control" id="formFileLg" type="file">
                  </div>
                  <div class="pt-3">
                    <span id="Product-img-update"> Current image <img src="{{ asset('uploads/products/' . $product->product_img) }}" alt="product image"> </span>
                  </div>

                  <div class="form-row pt-3">
                     <select  name="category_id" class="custom-select">
                        <option value="" selected>Categories</option>
                        @foreach ($categoriesP as $category)
                        <option  value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                   </div>

                <div class="form-row pt-3">
                    <select  name="product_approval" class="custom-select" >
                        <option
                        @php
                        if ($product->product_approval == 0) {
                            echo 'selected';
                        };
                        @endphp
                        value="0">Not Approved</option>
                        <option
                        @php
                        if ($product->product_approval == 1) {
                            echo 'selected';
                        };
                        @endphp
                         value="1">Approved</option>
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
                <button type="submit" class="btn btn-primary mt-4">Edit Product</button>
              </form>
        </div>
    </div>
 </div>

@endsection
