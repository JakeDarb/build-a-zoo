<?php

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

Route::get('/', function () {
    return view('welcome');
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
Route::get('/profile', function () {
    return view('users/profile');
});

Route::get('/profile/collection', function () {
    return view('users/collection');
});

Route::get('/profile/collection/detail', function () {
    return view('users/detail');
});
// -----------------------

// Market routes
Route::get('/market', function () {
    return view('market/index');
});
Route::get('/market/detail', function () {
    return view('market/detail');
});
// -----------------------
