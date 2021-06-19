@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form jumbotron">
            <div class="note">
                <p>New Order</p>
            </div>
            <form method="POST"  action="{{asset('dashboard/Create/cCategory')}}">
                @csrf
              <div class="form-content">
                <div class="row">
                    
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
                <input type="submit" value="Submit" class="btn btn-primary mt-3">
            </div>
            </form>
        </div>
    </div>
 </div>

@endsection
