    @extends('layouts.app')

    @section('homepage-style')
    <link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
    @endsection
    @section('content')
    <div class="background">
        <div class="container">
            <h1 class="main-h1">Categories
                <br>
                    <a href="{{asset('dashboard/Create/cCategory')}}" class="btn btn-primary">Add new Category</a>
            </h1>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">category name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->category_name}}</td>
                        <td><a class="btn btn-info" href="{{asset('dashboard/Edit/eCategory/'.$category->id)}}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('users.index') }}"
                            onclick="event.preventDefault();
                             document.getElementById(
                               'delete-form-{{$category->id}}').submit();">
                          Delete
                            </a>
                        </td>
                        <form id="delete-form-{{$category->id}}"
                           + action="{{route('categories.destroy', $category->id)}}"
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
