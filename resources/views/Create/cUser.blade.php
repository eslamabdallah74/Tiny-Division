@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="background">
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Add New User</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email *" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Password *" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Confirm Password *" value=""/>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary ">Add</button>
                <a href="../users" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
 </div>
@endsection
