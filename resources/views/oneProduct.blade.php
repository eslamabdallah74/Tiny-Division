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
                    <div class="buy-product"> <button class="btn btn-success" id='BuyToShowForm' style="margin-bottom: 20px;">Buy now</button> </div>
                    <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                </div>
            </div>
    </div>
    {{-- Buy form --}}
    <div class="wrapper hide" id="BuyForm">
        <div class="buy-form">
            <form>
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="name" class="form-control" id="inputName4" placeholder="Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                     i'm 18 years old
                    </label>
                  </div>
                </div>
              <button type="submit"  class="btn btn-success">Buy</button>
              </form>
        </div>
    </div>

</div>
@endsection
