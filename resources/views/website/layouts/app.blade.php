<!DOCTYPE html>
<html lang="en">
<head>
 <!-- basic -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- mobile metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1">
 <!-- site metas -->
 <title>@yield('title')</title>
 <!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('css/website/bootstrap.min.css') }}">
 <!-- style css -->
<link rel="stylesheet" href="{{asset("css/website/style.css")}}">
 <!-- Responsive-->
 <link rel="stylesheet" href="{{asset("css/website/responsive.css")}}">
 <!-- fevicon -->
<link rel="icon" href="{{asset("images/fevicon.png")}}" type="image/gif" />
 <!-- Scrollbar Custom CSS -->
 <link rel="stylesheet" href="{{asset("css/website/jquery.mCustomScrollbar.min.css")}}">
 <!-- Tweaks for older IEs-->
 <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
 <!-- owl stylesheets -->
 <link rel="stylesheet" href="{{asset("css/website/owl.carousel.min.css")}}">
 <link rel="stylesheet" href="{{asset("css/website/owl.theme.default.min.css")}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
 <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
 <link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />


 <main>
    @yield('Collection-css')
</main>
<main>
    @yield('oneProduct-css')
</main>
 <main>
    @yield('Contact-css')
</main>
</head>
<body>
    {{-- Navbar --}}
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="#"><img src="{{asset('images/logo.png')}}"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="{{asset('/')}}">Home</a>
                           <a class="nav-item nav-link" href="{{asset('/Collection')}}">Collection</a>
                           <a class="nav-item nav-link" href="{{asset('/racingBoots')}}" ">Racing Boots</a>
                           <a class="nav-item nav-link" href="{{asset('Contact')}}">Contact</a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>

{{-- Start page content --}}

<main>
    @yield('content')
</main>

{{-- Footer --}}
<!-- section footer start -->
<div class="section_footer">
    <div class="container">
        <div class="mail_section">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div><a href="#"><img src="{{asset("images/favicon.png")}}" ></a></div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-logo"><img src="{{asset("images/phone-icon.png")}}"><span class="map_text">(71) 1234567890</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><img src="{{asset("images/email-icon.png")}}"><span class="map_text">Demo@gmail.com</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="{{asset("images/fb-icon.png")}}"></a></li>
                            <li><a href="#"><img src="{{asset("images/twitter-icon.png")}}"></a></li>
                            <li><a href="#"><img src="{{asset("images/in-icon.png")}}"></a></li>
                            <li><a href="#"><img src="{{asset("images/google-icon.png")}}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h2 class="shop_text">Address </h2>
                    <div class="image-icon"><img src="{{asset("images/map-icon.png")}}"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Our Company </h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Delivery</li>
                            <li>Legal Notice</li>
                            <li>About us</li>
                            <li>Secure payment</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            <div class="col-sm-6 col-lg-3">
                <h2 class="adderess_text">Products</h2>
                <div class="delivery_text">
                        <ul>
                            <li>Prices drop</li>
                            <li>New products</li>
                            <li>Best sales</li>
                            <li>Contact us</li>
                            <li>Sitemap</li>
                        </ul>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <h2 class="adderess_text">Newsletter</h2>
                <div class="form-group">
                    <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                </div>
                <button class="subscribr_bt">Subscribe</button>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- section footer end -->
<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>

 <!-- Javascript files-->
 <script src="{{asset("js/website/jquery.min.js")}}"></script>
 <script src="{{asset("js/website/popper.min.js")}}"></script>
 <script src="{{asset("js/website/bootstrap.bundle.min.js")}}"></script>
 <script src="{{asset("js/website/jquery-3.0.0.min.js")}}"></script>
 <script src="{{asset("js/website/plugin.js")}}"></script>
 <!-- sidebar -->
 <script src="{{asset("js/website/jquery.mCustomScrollbar.concat.min.js")}}"></script>
 <script src="{{asset("js/website/custom.js")}}"></script>
 <!-- javascript -->
 <script src="{{asset("js/website/owl.carousel.js")}}"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="{{asset("js/website/MyJavaScript.js")}}"></script>

 <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });


$('#myCarousel').carousel({
       interval: false
   });

   //scroll slides on swipe for touch enabled devices

   $("#myCarousel").on("touchstart", function(event){

       var yClick = event.originalEvent.touches[0].pageY;
       $(this).one("touchmove", function(event){

           var yMove = event.originalEvent.touches[0].pageY;
           if( Math.floor(yClick - yMove) > 1 ){
               $(".carousel").carousel('next');
           }
           else if( Math.floor(yClick - yMove) < -1 ){
               $(".carousel").carousel('prev');
           }
       });
       $(".carousel").on("touchend", function(){
           $(this).off("touchmove");
       });
   });
 </script>

</body>
</html>
