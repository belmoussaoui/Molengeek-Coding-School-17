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



Route::get("/", function () {
    return view("index");
});

// Route::get("/contact", function () {
//     return view("contact", ['name' => 'Victoria']);
// });

Route::get("/contact", function () {
    $tableau = [1, 2, 3];
    $object = (object) array(
        'name' => 'Trevor',
        'age' => 42
    );
    return view("contact", compact("object"));
});

// Route::get("/{chiffre}", function ($x) {
//     return "Le chiffre que j'ai ajouté est $x";
// });
