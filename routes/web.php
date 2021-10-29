<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return redirect('market');
});


Route::get('/users', function () {
    $users = \DB::table('users')->get();
    $data['users'] = $users;
    return view('users/index', $data);
});

// Authentication routes
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/signup', function () {
    return view('auth/signup');
});
// -----------------------

// User routes

Route::get('/profile/create', [UserController::class, 'create']);

Route::get('/profile/store', [UserController::class, 'store']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/profile/collection', [UserController::class, 'show']);


// -----------------------

// Market routes
Route::get('/market', [MarketController::class, 'index']);

Route::get('/market/{nft}', [MarketController::class, 'show']);

// -----------------------

