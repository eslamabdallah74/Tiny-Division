<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Seld\PharUtils\Timestamps;
use Illuminate\Support\Facades\Hash;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              // $users = User:all(); //get all records from the database
              $users = User::orderBy('id' , 'desc')->get(); // get all the records from the database and order them
              return view('users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Create.cUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate database

        $validated = $request->validate(
        [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|same:Confirm-password',
            'Confirm-password' => 'required',
        ],
        [
            'same' => 'Password does not match',
        ]
    );





        // Insert new user into databasex
        $hashPassword = Hash::make($request->password);
        $insert_user = new User;
        $insert_user->name     = $request->name;
        $insert_user->email    = $request->email;
        $insert_user->password = $hashPassword;
        $insert_user->save();

        return redirect('users');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
