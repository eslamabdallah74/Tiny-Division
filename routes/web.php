<?php

use App\Http\Controllers\UsersController;
use App\Models\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Show
Route::get('/dashboard', [App\Http\Controllers\Dashbored\DashboredController::class, 'index'])->middleware('auth')->name('dashboard');
Route::view('dashboard/users', 'dashboard/users')->middleware('auth');
Route::view('dashboard/products', 'dashboard/products')->middleware('auth');
Route::view('dashboard/orders', 'dashboard/orders')->middleware('auth');
Route::view('dashboard/Create/cUser', 'dashboard/Create/cUser')->middleware('auth');



// Users Controller
Route::resource('dashboard/users', UsersController::class)->middleware('auth');
Route::get('dashboard/Edit/eUser/{id}', [UsersController::class,'edit'])->middleware('auth');
Route::post('dashboard/users', [UsersController::class,'update'])->middleware('auth');




// Login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

