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

Route::get('/dateDuJour', function () {
    return view('date');
})->name("date");

Route::get('/fruit', function () {
    $fruits = ["pomme", "fraise", "banane", "ananas"];
    shuffle($fruits);
    // ou directement
    // $fruits = Arr::shuffle(["pomme", "fraise", "banane", "ananas"]);
    return view('fruit', compact("fruits"));
})->name("fruit");
