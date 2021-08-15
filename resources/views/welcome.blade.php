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
    	    		<div class="col-md-6 col-sm-12">
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
        <div class="container mt-5">
            <div class="row">
                @foreach ($NewArrivals as $NewArrival)
                <div class="col-md-3">
                    <div class="card1">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> </div>
                            </div> <img src="{{ asset('uploads/products/' . $NewArrival->product_img) }}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between ">
                                <h5 class="dress-name1"> {{$NewArrival->product_name}} </h5>
                                <div class="d-flex flex-column mb-2"> <span class="new-price1">${{$NewArrival->product_price}}</span> > </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="color-select d-flex "> <input type="button" name="grey" class="btn creme"> <input type="button" name="red" class="btn red ml-2"> <input type="button" name="blue" class="btn blue ml-2"> </div>
                                <div class="d-flex "> <span class="item-size mr-2 btn1" type="button">S</span> <span class="item-size mr-2 btn1" type="button">M</span> <span class="item-size btn1" type="button">L</span> </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number">3.6</span> </div> <a href="{{asset('oneProduct/'.$NewArrival->id)}}" class="buy">BUY +</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="card voutchers">
                            <div class="voutcher-divider">
                                <div class="voutcher-left text-center"> <span class="voutcher-name">Vegetarian Food</span>
                                    <h5 class="voutcher-code">#VEGANLOVE</h5>
                                </div>
                                <div class="voutcher-right text-center border-left">
                                    <h5 class="discount-percent">20%</h5> <span class="off">Off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
   	<!-- New Arrivals section end -->

@endsection
