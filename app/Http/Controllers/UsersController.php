<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;use Seld\PharUtils\Timestamps;
use Illuminate\Support\Facades\Hash;
use Validator;
use Carbon\Carbon;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //   $usersTime = User::all(); //get all records from the database
              $users = User::orderBy('id' , 'desc')->get();// get all the records from the database and order them

              return view('dashboard\users', compact('users'));
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
            'name'             => 'required|unique:users',
            'email'            => 'required|unique:users|email',
            'password'         => 'required|same:Confirm-password',
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

        return redirect('dashboard\users');
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
        $user = User::find($id); //get all records from the database
         return view('dashboard\Edit\eUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validateddOnupdate = $request->validate(
            [
                'name'             => 'required|unique:users,name,'.$request->id,
                'email'             =>'required|email|unique:users,email,'.$request->id,
                'password'         => 'same:Confirm-password',
            ],
            [
                'same' => 'Password does not match',
            ]
        );

        // Update user into databasex
        $hashPassword = Hash::make($request->password);
        $user = User::find($request->id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $hashPassword;
        $user->save();
        return redirect('dashboard/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::findorFail($id);
        $deleteUser->delete();
        return redirect('/dashboard/users');
    }
}
