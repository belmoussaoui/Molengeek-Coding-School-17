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
    $page = "home";
    return view('welcome', compact("page"));
});

Route::get('/about', function () {
    $page = "about";
    return view('pages/about', compact("page"));
});

Route::get('/products', function () {
    $page = "products";
    return view('pages/products', compact("page"));
});

Route::get('/store', function () {
    $page = "store";
    return view('pages/store', compact("page"));
});
