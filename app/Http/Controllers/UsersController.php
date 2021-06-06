<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show() {

        // $pizzas = ModelsPizza::all(); //get all records from the database
        $users = Users::orderBy('id' , 'desc')->get(); // get all the records from the database and order them
        // $pizzas = ModelsPizza::all();
        return view('users', ['users' => $users]);
    }
}
