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
<div class="layout_padding gallery_section">

<div class="container">

            <ul class="MyMenu show">
                <li class=""><span id="all" href="#">All</span></li>
                @foreach ($Categories as $category)
                <li class=""><span id="{{$category->id}}" href="#">{{$category->category_name}}</span></li>

                @endforeach
                {{-- <li class=""><span id="jackets" href="#">Jackets</span></li>
                <li class=""><span id="shirts" href="#">Shirts</span></li>
                <li class=""><span id="shoes" href="#">Shoes</span></li>
                <li class=""><span id="suits" href="#">Suits</span></li> --}}
            </ul>

{{-- Start of jackets --}}
    <div class="row" id="target-jackets">
        @foreach ($Jackets as $Jacket)
        <div class="holder">
            <div class="wrapper">
                <div class="row">
                    <div id="Product-name" class="col-sm-2">{{$Jacket->product_name}}</div>
                    <div id="Product-price" class="col-sm-2">{{$Jacket->product_price}}$</div>
                </div>
                <div class="row">
                    <div id="Product-desc" class="col-sm-6">{{$Jacket->product_description}}</div>
                    <div id="Product-img" class="col-sm-6"><img src="{{ asset('uploads/products/' . $Jacket->product_img) }}" alt=""></div>
                </div>
                <div class="row">
                    <div id="Product-time" class="col-sm-2">{{Carbon\Carbon::parse($Jacket->created_at)->diffForHumans()}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <a href="{{asset('oneProduct/'.$Jacket->id)}}" class="btn btn-danger">Buy</a>
                        <a href="{{asset('oneProduct/'.$Jacket->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- End of jackets --}}
    {{-- Start of shirts --}}
    <div class="row hide" id="target-shirts">
        @foreach ($Shirts as $Shirt)
        <div class="holder">
            <div class="wrapper">
                <div class="row">
                    <div id="Product-name" class="col-sm-2">{{$Shirt->product_name}}</div>
                    <div id="Product-price" class="col-sm-2">{{$Shirt->product_price}}$</div>
                </div>
                <div class="row">
                    <div id="Product-desc" class="col-sm-6">{{$Shirt->product_description}}</div>
                    <div id="Product-img" class="col-sm-6"><img src="{{ asset('uploads/products/' . $Shirt->product_img) }}" alt=""></div>
                </div>
                <div class="row">
                    <div id="Product-time" class="col-sm-2">{{Carbon\Carbon::parse($Shirt->created_at)->diffForHumans()}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <a href="{{asset('oneProduct/'.$Shirt->id)}}" class="btn btn-danger">Buy</a>
                        <a href="{{asset('oneProduct/'.$Shirt->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
     {{-- End of shirts --}}
    {{-- Start of shoes --}}
    <div class="row hide" id="target-shoes">
        @foreach ($Shoes as $Shoe)
        <div class="holder">
            <div class="wrapper">
                <div class="row">
                    <div id="Product-name" class="col-sm-2">{{$Shoe->product_name}}</div>
                    <div id="Product-price" class="col-sm-2">{{$Shoe->product_price}}$</div>
                </div>
                <div class="row">
                    <div id="Product-desc" class="col-sm-6">{{$Shoe->product_description}}</div>
                    <div id="Product-img" class="col-sm-6"><img src="{{ asset('uploads/products/' . $Shoe->product_img) }}" alt=""></div>
                </div>
                <div class="row">
                    <div id="Product-time" class="col-sm-2">{{Carbon\Carbon::parse($Shoe->created_at)->diffForHumans()}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <a href="{{asset('oneProduct/'.$Shoe->id)}}" class="btn btn-danger">Buy</a>
                        <a href="{{asset('oneProduct/'.$Shoe->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
     {{-- End of shoes --}}
    {{-- Start of Suits --}}
    <div class="row hide" id="target-suits">
        @foreach ($Suits as $Suit)
        <div class="holder">
            <div class="wrapper">
                <div class="row">
                    <div id="Product-name" class="col-sm-2">{{$Suit->product_name}}</div>
                    <div id="Product-price" class="col-sm-2">{{$Suit->product_price}}$</div>
                </div>
                <div class="row">
                    <div id="Product-desc" class="col-sm-6">{{$Suit->product_description}}</div>
                    <div id="Product-img" class="col-sm-6"><img src="{{ asset('uploads/products/' . $Suit->product_img) }}" alt=""></div>
                </div>
                <div class="row">
                    <div id="Product-time" class="col-sm-2">{{Carbon\Carbon::parse($Suit->created_at)->diffForHumans()}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <a href="{{asset('oneProduct/'.$Suit->id)}}" class="btn btn-danger">Buy</a>
                        <a href="{{asset('oneProduct/'.$Suit->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{--  --}}
</div>
<!-- New Arrivals section end -->

@endsection
