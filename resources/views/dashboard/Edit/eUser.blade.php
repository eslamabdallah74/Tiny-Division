@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <h4 class="pt-2">Edit User</h4>
                <h6>{{$user->name}}</h6>
            </div>
            <form method="POST" action="{{url('dashboard/users')}}">
                @csrf
              <div class="form-content">
                <div class="row">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder=" Name *" value="{{$user->name}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder=" email *" value="{{$user->email}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="password *" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="Confirm-password" type="password" class="form-control" placeholder="confirm password *" />
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
                <input type="submit" value="Update User" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
 </div>

@endsection
