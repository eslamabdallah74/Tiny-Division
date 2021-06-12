<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">


    <main>
        @yield('dashbored')
    </main>
    <main>
        @yield('navbar-style')
    </main>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Tiny Division</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('dashboard/users')}}">Users <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="{{url('dashboard/products')}}">Products <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="{{url('dashboard/orders')}}">Orders <span class="sr-only">(current)</span></a>
                      </li>
                  </ul>
                  <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
           @endguest
        </ul>
    </div>
</div>
</nav>
<div class="wrapper">
    <h3>Dashbored</h3>
    <div class="contaier">
        <span class="show-hide-button"><i class="fas fa-chevron-circle-right fa-3x"></i></span>
        <span class="exit-button"><i class="far fa-times-circle"></i></span>

        <div class="row">
            <div id="USERS"
            class="col-md-11 daashbored-users">
            <a href="{{url('dashboard/users')}}"><i class="fas fa-users fa-2x"></i> <br> User</a> </div>
        </div>
        <div class="row">
            <div id="PRODDUCTS"
             class="col-md-11 daashbored-Products">
             <a href="{{url('dashboard/products')}}"> <i class="fab fa-product-hunt fa-2x"></i> <br>Products</a>  </div>
        </div>
        <div class="row">
            <div id="ORDERS"
             class="col-md-11 daashbored-Orders">
             <a href="{{url('dashboard/orders')}}">   <i class="fab fa-jedi-order fa-2x"></i> <br> Orders</a>  </div>
        </div>
    </div>
</div>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="{{asset('js/dashbored.js') }}"></script>

</html>
