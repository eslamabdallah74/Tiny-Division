@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/oneProduct-css.css")}}">
@endsection

@section('title','OurProduct') {{-- Title --}}

@section('content')


<div class="container">
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

{{-- My Product --}}
<div class="row main-product">
    <div class="col-sm-6">
        <div class="img">
            <img src="{{ asset('uploads/products/' . $OneProduct->product_img) }}" alt="">
        </div>
    </div>
    <div class="col-sm-6 product-info">
        <h1 class="prduct-name">{{$OneProduct->product_name}}</h1>
        <span class="prduct-price">{{ $OneProduct->product_price}}$</span>
        <p class="product-description">{{$OneProduct->product_description}}</p>

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
        <!-- Add product to cart -->
        <form method="POST"  action="{{asset('my-cart')}}">
        @csrf
        <input type="hidden" name="product_id" value="{{$OneProduct->id}}">
                 <!-- Botones de compra -->
                 <div class="section" style="padding-bottom:20px;">
                    @if (Auth::check())
                    <div class="buy-product"> <button class="btn btn-success" value="Submit" id='BuyToShowForm' style="margin-bottom: 20px;">Add To Cart</button> </div>
                    @endif
                    @if (!Auth::check())
                    <div class="Register-To-Buy"> <button class="btn btn-success" style="margin-bottom: 20px;"> <a href="{{url('login')}}">Login To Buy</a> </button> </div>
                    <div class="Register-To-Buy"> <button class="btn btn-primary" style="margin-bottom: 20px;"> <a href="{{url('register')}}">Register To Buy</a> </button> </div>
                    @endif

                    <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                </div>
            </div>
            </form>
    </div>

</div>
<!-- reviews -->
<!-- Add reviw -->
 <div class="">
    <form method="POST"  action="{{asset('oneProduct')}}">
        @csrf
     <div class="row">
         <div class="add-reviw col-sm-12">
         <div class="form-group">
        <label for="exampleFormControlSelect1" id="rating-label">Rating</label>
            <select name="rating" class="form-control" id="exampleFormControlSelect1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>
            <div class="form-group">
            <textarea name="review " class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Rivew"></textarea>
            </div>
            <a href=""class='btn btn-info' type="submit">Send</a>
              {{-- Validate error msg --}}
              @if ($errors->any())
              <div class="alert alert-danger pt-10">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
         </div>
     </div>
   </form>
 </div>
<!-- end add reviw -->
<!-- show reviw -->
<div class="">
    <div class="row">
        @foreach ($Rivews as $Rivew)
    <div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
      <div class="caption">
        <small>by <a href="#">{{$Rivew->GetUser->name}}</a></small>
      </div>

    </div>
    <div class="col-md-9">
      <h4>My awesome review</h4>
      <div class="ratebox text-center" data-id="0" data-rating="5"></div>
      <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>
        <div class="rating" style="color: yellow">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
      <small class="review-date">March 26, 2017</small>
    </div>
  </div>
</div>
@endforeach
    </div>
</div>
<!-- End of reviw -->
@endsection
