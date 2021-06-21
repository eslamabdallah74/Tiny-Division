@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/oneProduct-css.css")}}">
@endsection

@section('title','OurProduct') {{-- Title --}}

@section('content')


<div class="container">
	<div class="row">
		<div class="container">
	<div class="row">
	<a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">
<i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
<span class="ripple pinkBg"></span>
<span class="ripple pinkBg"></span>
<span class="ripple pinkBg"></span>
</a>
	</div>
</div>
</div>
{{-- My Product --}}
<div class="row main-product">
    <div class="col-sm-6">
        <div class="img">
            <img src="{{ asset('uploads/products/' . $OneProduct->product_img) }}" alt="">
        </div>
    </div>
    <div class="col-sm-6 product-info">
        <h1 class="prduct-name">{{$OneProduct->product_name}}</h1>
        <span class="prduct-price">{{$OneProduct->product_price}}$</span>
        <p class="product-description">{{$OneProduct->product_description}}$</p>
        <ul>
            @if ($OneProduct->rating == 1)
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/fb-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/fb-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/fb-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/fb-icon.png")}}"></a></li>


            @endif
            @if ($OneProduct->rating == 2)
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>

            @endif
            @if ($OneProduct->rating == 3)
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>

            @endif
            @if ($OneProduct->rating == 4)
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>

            @endif
            @if ($OneProduct->rating == 5)
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            <li><a href="#"><img src="{{asset("images/star-icon.png")}}"></a></li>
            @endif
        </ul>
        <div class="section" style="padding-bottom:20px;">
            <h6 class="title-attr"><small>CANTIDAD</small></h6>
            <div>
                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                <input value="1" />
                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
            </div>
        </div>
                 <!-- Botones de compra -->
                 <div class="section" style="padding-bottom:20px;">
                    <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Order now</button>
                    <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                </div>
            </div>
    </div>
</div>

@endsection
