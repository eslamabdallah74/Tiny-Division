@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/oneProduct-css.css")}}">
@endsection

@section('title','OurProduct') {{-- Title --}}

@section('content')


<div class="container">

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

        <ul style="color:gold">
            @if ($OneProduct->rating == 1)
            <i class="fa fa-star"></i>
            @endif
            @if ($OneProduct->rating == 2)
            <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
            @endif
            @if ($OneProduct->rating == 3)
            <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
    		<i class="fa fa-star"></i>
            @endif
            @if ($OneProduct->rating == 4)
            <i class="fa fa-star"></i>
	    	<i class="fa fa-star"></i>
	    	<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
            @endif
            @if ($OneProduct->rating == 5)
            <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
	    	<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            @endif
        </ul>

        <div class="section" style="padding-bottom:20px;">
            <h6 class="title-attr"><small>CANTIDAD</small></h6>
        </div>
                 <!-- Botones de compra -->
                 <div class="section" style="padding-bottom:20px;">
                    @if (Auth::check())
                    <label for="">Quntity</label>
                    <input type="number" name="" id="">
                    <div class="buy-product"> <button class="btn btn-success" id='BuyToShowForm' style="margin-bottom: 20px;">Buy now</button> </div>
                    @endif
                    @if (!Auth::check())
                    <div class="Register-To-Buy"> <button class="btn btn-success" style="margin-bottom: 20px;"> <a href="{{url('login')}}">Login To Buy</a> </button> </div>
                    <div class="Register-To-Buy"> <button class="btn btn-primary" style="margin-bottom: 20px;"> <a href="{{url('register')}}">Register To Buy</a> </button> </div>
                    @endif

                    <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                </div>
            </div>
    </div>
    {{-- Buy form --}}
    <div class="wrapper" id="BuyForm">
        <div class="buy-form">
            <form method="POST" action="{{asset('oneProduct')}}">
                @csrf
                <div> <h1>{{$OneProduct->product_name}}</h1></div>
                <div><h3>Quntity = 0</h3></div>
                <div><h3>Tottal Price = 0</h3></div>
                <button type="submit" class="btn btn-success"> Buy </button>
                <div class="row mydot">
                    <div class="container">
                <div class="row">
                <a href="#" class="intro-banner-vdo-play-btn pinkBg" id="Close-form">
                    <i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
                    <span class="ripple pinkBg"></span>
                    <span class="ripple pinkBg"></span>
                    <span class="ripple pinkBg"></span>
                    </a>
                    </div>
                    </div>
                 </div>
              </form>
        </div>
    </div>

</div>
@endsection
