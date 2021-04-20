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

// partie 1
Route::get('/', function () {
    return "Bonjour chers utilisateurs";
});

Route::get('/1/{dynamique}', function ($v) {
    return "Bienvenue sur mon site";
});

Route::get('/2/{dynamique}', function ($v) {
    return "Hello" . " " . $v;
});

// partie 2
Route::get('/welcome', function () {
    return view("welcome");
});

Route::get('/about', function () {
    $prenom = "bilal";
    $nom = "el moussaoui";
    return view("about", compact("prenom", "nom"));
})->name("placeholder");
