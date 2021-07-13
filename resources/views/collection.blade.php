@extends('website.layouts.app')

@section('Collection-css')
<link rel="stylesheet" href="{{asset("css/website/Collection-css.css")}}">
@endsection

@section('title','Collection') {{-- Title --}}

@section('content')

<!-- New Arrivals section start -->
<div class="collection_text">Our Products</div>
<div class="collection_section layout_padding">
</div>
<!-- start Product section -->
<div class="container-fluid mt-3 mb-3">
    <div class="row g-2">
        @foreach ($OurProducts as $OurProduct)


        <div class="col-md-4">
            <div class="card">
                <div class="img-container">
                    <div class="d-flex justify-content-between align-items-center p-2 first">
                          <span class="wishlist"><i class="fa fa-heart"></i></span>
                        </div> <img src="{{ asset('uploads/products/' . $OurProduct->product_img) }}" class="img-fluid1 ">
                </div>
                <div class="product-detail-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">{{$OurProduct->product_name}}</h6> <span class="text-danger font-weight-bold">${{$OurProduct->product_price}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                        <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size1" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>L</span> </label> </div>
                    </div>
                    <div class="mt-3"> <a href="{{asset('oneProduct/'.$OurProduct->id)}}" class="btn btn-danger btn-block">Buy Now</a> </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End product section -->
@endsection
