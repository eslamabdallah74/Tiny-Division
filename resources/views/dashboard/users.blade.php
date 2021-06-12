@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="background">
        <div class="container">
            <h1 class="main-h1">Users
                <br>
                    <a href="{{asset('dashboard/Create/cUser')}}" class="btn btn-primary">Add new User</a>
            </h1>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                        <td>{{Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</td>
                        <td><a class="btn btn-info" href="{{asset('dashboard/Edit/eUser/'.$user->id)}}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('users.index') }}"
                            onclick="event.preventDefault();
                             document.getElementById(
                               'delete-form-{{$user->id}}').submit();">
                          Delete
                            </a>
                        </td>
                        <form id="delete-form-{{$user->id}}"
                           + action="{{route('users.destroy', $user->id)}}"
                           method="post">
                           @csrf @method('DELETE')
                         </form>
                      </tr>
                    @endforeach
                </tbody>

              </table>
        </div>
    </div>
@endsection
