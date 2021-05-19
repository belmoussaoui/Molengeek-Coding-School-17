<?php

use App\Http\Controllers\GalerieController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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
// user
Route::resource("/users", UserController::class);
Route::post('/users/{id}/download',[UserController::class,'download']);

// portfolio
Route::resource("/portfolios", PortfolioController::class);
Route::post('/portfolios/{id}/download',[PortfolioController::class,'download']);

// galerie
// https://stackoverflow.com/questions/59137700/laravel-resource-controller-change-parameter-from-id-to-slug
Route::resource("/galeries", GalerieController::class)->parameters(['galeries' => 'galerie']);
Route::post('/galeries/{id}/download',[GalerieController::class,'download']);

// caracteristique
Route::resource("/caracteristiques", CaracteristiqueController::class);

// service
Route::resource("/services", ServiceController::class);
