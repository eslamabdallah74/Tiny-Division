@extends('website.layouts.app')

@section('Contact-css')
<link rel="stylesheet" href="{{asset("css/website/Contact-css.css")}}">
@endsection

@section('title','Contact') {{-- Title --}}

@section('content')
   	<!-- contact section start -->
    <div class="layout_padding contact_section">
    	<div class="container">
            
                    @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                        @endif

    		<h1 class="new_text"><strong>Contact Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                           <!-- Form -->
                          <form method="POST"  action="{{asset('dashboard/contacts')}}">
                             @csrf
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="number">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="email">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                            </div>
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
                            <div class="send_btn">
                               <input type="submit" value="Submit" class="btn btn-danger btn-lg">
                              </div>
                          </form>
                       </div>

                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
                        <div> <img src="{{asset('images/shop-banner.png')}}" alt="shop image"> </div>
    					<div class="our_shop">
    						<button class="out_shop_bt">Our Shop</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->

@endsection
