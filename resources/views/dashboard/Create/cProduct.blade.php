@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Add New Product</p>
            </div>
            <form method="POST" action="{{url('dashboard/products')}}">
                @csrf
                <div class="form-row pt-3">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input name="product_name" type="text" class="form-control" id="inputEmail4" placeholder="Product Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Product Price</label>
                    <input name="product_price" type="number" class="form-control" id="inputPassword4" placeholder="Product Price">
                  </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Description</span>
                    </div>
                    <textarea name="product_description" class="form-control" aria-label="With textarea"></textarea>
                  </div>
                <div class="form-row pt-3">
                    <select  name="product_approval" class="custom-select" >
                        <option value=""selected>Product Approval</option>
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
