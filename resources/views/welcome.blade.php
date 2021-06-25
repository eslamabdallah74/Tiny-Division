@extends('website.layouts.app')

@section('title','Tiny Division') {{-- Title --}}


@section('content')
<body class="main-layout">

	<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($Products as $key => $Product)
                @if ($key == 0)
                <div class="carousel-item active">
                @endif
                @if ($key != 0)
                <div class="carousel-item">
                @endif
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<div class="page_no">{{$key+1}}/4</div>
						<p class="mens_taital_2">{{$Product->Category->category_name}}</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">{{$Product->product_price}}$</h1>
							<h1 class="mens_text"><strong>{{$Product->product_name}}</strong></h1>
							<p class="lorem_text">{{$Product->product_description}}</p>
							<button class="buy_bt"><a style='color:white'  href="{{asset('oneProduct/'.$Product->id)}}">Add To Cart</a></button>
							<button class="more_bt"><a style='color:#f12a47' href="{{asset('oneProduct/'.$Product->id)}}">See More</a></button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="{{ asset('uploads/products/' . $Product->product_img) }}" alt="product image"> </div>
					</div>
				 </div>
                </div>
                @endforeach
              {{-- End carousel --}}
            </div>

        </div>
    </div>
</section>
			</div>
		</div>
	</div>
	<!-- header section end -->

	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
                    @foreach ($TwoProducts as $key => $OneProduct)
    	    		<div class="col-md-6">
                        @if ($key == 0)
    	    			<div class="about-img">
                        @endif
                        @if ($key != 0)
    	    			<div class="about-img2">
                        @endif
    	    				<button class="new_bt">New</button>
    	    				<div class="shoes-img"><img src="{{ asset('uploads/products/' . $OneProduct->product_img) }}" alt="product image"></div>
    	    				<p class="sport_text">{{$OneProduct->product_name}}</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">{{$OneProduct->product_price}}</strong> </div>
    	    				<div class="star_icon">
                            <ul>
                                    @if ($OneProduct->rating == 1)
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($OneProduct->rating == 2)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($OneProduct->rating == 3)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($OneProduct->rating == 4)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($OneProduct->rating == 5)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
    	    					</ul>
    	    				</div>
    	    			</div>
                        @if ($key == 0)
                        <button class="buy_bt"><a style='color:white'  href="{{asset('oneProduct/'.$OneProduct->id)}}">Buy</a></button>
                        @endif
                        @if ($key == 1)
                        <button class="buy_bt"><a style='color:white'  href="{{asset('oneProduct/'.$OneProduct->id)}}">Buy</a></button>
                        @endif
    	    		</div>
                    @endforeach

    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Racing Boots</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	</div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="images/shoes-img3.png"></div>
    				</div>
    				<div class="col-md-4">
    					<div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">Yomi</span> <br>SHOES</strong></div>
    					<div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>New Arrivals Products</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
                @foreach ($NewArrivals as $NewArrival)
                <a href="{{asset('oneProduct/'.$NewArrival->id)}}">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">{{$NewArrival->product_name}}</p>
    					<div class="shoes_icon"><img src="{{ asset('uploads/products/' . $NewArrival->product_img) }}" alt="product image"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
                                    @if ($NewArrival->rating == 1)
    	    						<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
                                    @endif
                                    @if ($NewArrival->rating == 2)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($NewArrival->rating == 3)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($NewArrival->rating == 4)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
                                    @if ($NewArrival->rating == 5)
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
                                    <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    @endif
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">$ <span style="color: #ff4e5b;">{{$NewArrival->product_price}}</span></div>
    						</div>
    					</div>
                        </a>
    				</div>
    			</div>
                {{-- End --}}
                @endforeach
    		</div>
    		<div class="buy_now_bt">
            <button class="btn btn-info" ><a style="color:white" href="{{asset('/Collection')}}">Buy Now</a></button>
    		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->



@endsection
