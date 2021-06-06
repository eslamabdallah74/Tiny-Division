@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="background">
        <div class="container">
            <h1 class="main-h1">Users</h1>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td><a class="btn btn-info" href="{{$user->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{$user->id}}">Delete</a></td>

                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
