<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductRivewController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Models\OrderProduct;
use App\Models\ProductRivew;
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
Route::view('dashboard/contacts', 'dashboard/contacts')->middleware('auth');
Route::view('dashboard/Create/cUser', 'dashboard/Create/cUser')->middleware('auth');




// Users Controller
Route::resource('dashboard/users', UsersController::class)->middleware('auth');
Route::post('dashboard/Create/cUser/', [UsersController::class,'store'])->middleware('auth');
Route::get('dashboard/Edit/eUser/{id}', [UsersController::class,'edit'])->middleware('auth');
Route::post('dashboard/users', [UsersController::class,'update'])->middleware('auth');
Route::delete('dashboard/delete/{id}',[UsersController::class],'destroy');

// Categories
Route::resource('dashboard/categories', CategoriesController::class)->middleware('auth');
Route::get('dashboard/Create/cCategory/', [CategoriesController::class,'create'])->middleware('auth');
Route::post('dashboard/Create/cCategory/', [CategoriesController::class,'store'])->middleware('auth');
Route::get('dashboard/Edit/eCategory/{id}', [CategoriesController::class,'edit'])->middleware('auth');
Route::post('dashboard/categories', [CategoriesController::class,'update'])->middleware('auth');
Route::delete('dashboard/delete/{id}',[CategoriesController::class],'destroy');



// Products Controller
Route::resource('dashboard/products', ProductsController::class)->middleware('auth');
Route::get('dashboard/Create/cProduct/', [ProductsController::class,'create'])->middleware('auth');
Route::post('dashboard/Create/cProduct/', [ProductsController::class,'store'])->middleware('auth');
Route::get('dashboard/Edit/eProduct/{id}', [ProductsController::class,'edit'])->middleware('auth');
Route::post('dashboard/products', [ProductsController::class,'update'])->middleware('auth');
Route::delete('dashboard/delete/{id}',[ProductsController::class],'destroy');


//Order controller
Route::resource('dashboard/orders', OrderController::class)->middleware('auth');

// Contact us
Route::resource('dashboard/contacts', ContactController::class)->middleware('auth');
Route::post('dashboard/contacts', [ContactController::class,'store'])->middleware('auth');
Route::delete('dashboard/contacts/{id}',[ContactController::class],'destroy');



// Login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');




// Main website
Route::view('/' , '
');
Route::get('/', [HomepageController::class,'index']);

Route::view('Collection' , 'Collection');
Route::get('Collection', [App\Http\Controllers\CollectionsController::class,'index']);

Route::view('oneProduct' , 'oneProduct');
Route::get('oneProduct/{id}', [App\Http\Controllers\OneProduct::class,'index']);
Route::post('oneProduct/{id}', [App\Http\Controllers\OneProduct::class,'store']);

//Cart
Route::resource('my-cart', CartController::class)->middleware('auth');

// Order
Route::resource('Order', OrderController::class)->middleware('auth');
Route::POST('changeStatus/{id}/{status}', [OrderController::class,'ChangeStatus'])->middleware('auth')->name('Status');


// Rivew
Route::post('rivew/{id}', [App\Http\Controllers\ProductRivewController::class,'store'])->middleware('auth')->name('rivew');


Route::view('racingBoots' , 'racingBoots');


Route::view('Contact' , 'contact');



