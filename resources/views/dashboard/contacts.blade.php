@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="background">
    <div class="container">
        <h1 class="main-h1">Contacts
            <br>
        </h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Send At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Contacts as $Contact)
                <tr>
                    <th scope="col">{{$Contact->name}}</th>
                    <th scope="col">{{$Contact->number}}</th>
                    <th scope="col">{{$Contact->email}}</th>
                    <th scope="col">{{$Contact->message}}</th>
                    <th scope="col">{{$Contact->created_at}}</th>
                    <td>
                            <a class="btn btn-danger" href="{{ route('users.index') }}"
                            onclick="event.preventDefault();
                             document.getElementById(
                               'delete-form-{{$Contact->id}}').submit();">
                          Delete
                            </a>
                        </td>
                        <form id="delete-form-{{$Contact->id}}"
                           + action="{{route('contacts.destroy', $Contact->id)}}"
                           method="post">
                           @csrf
                           @method('DELETE')
                         </form>
                </tr>
                @endforeach
            </tbody>

          </table>
    </div>
</div>
@endsection
