@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form jumbotron">
            <div class="note">
                <p>Edit Category</p>
            </div>
            <form method="POST"  action="{{asset('dashboard/categories')}}">
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
              <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="category_name" type="text" class="form-control" placeholder=" Name *" value="{{$category->category_name}}"/>
                        </div>
                    </div>
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
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
 </div>

@endsection
