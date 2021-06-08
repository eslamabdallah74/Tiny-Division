<?php

namespace App\Http\Controllers\Dashbored;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboredController extends Controller
{
    public function index()
    {
        $last3users = User::orderBy('id','DESC')->limit(3)->get();
        $allUsers   = User::all();
        return view('dashboard.welcome', compact('last3users','allUsers'));

    }
}
