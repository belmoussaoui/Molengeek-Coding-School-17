<?php

use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LivreController;
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

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/{id}/delete', [UserController::class, 'delete']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);

Route::get('/bibliotheque', [BibliothequeController::class, 'index'])->name('bibliotheque');
Route::post('/bibliotheque/{id}/delete', [BibliothequeController::class, 'delete']);
Route::get('/bibliotheque/{id}/edit', [BibliothequeController::class, 'edit']);
Route::post('/bibliotheque/{id}/update', [BibliothequeController::class, 'update']);
Route::get('/bibliotheque/create', [BibliothequeController::class, 'create']);
Route::post('/bibliotheque/store', [BibliothequeController::class, 'store']);

Route::get('/livre', [LivreController::class, 'index'])->name('livre');
Route::post('/livre/{id}/delete', [LivreController::class, 'delete']);
Route::get('/livre/{id}/edit', [LivreController::class, 'edit']);
Route::post('/livre/{id}/update', [LivreController::class, 'update']);
Route::get('/livre/create', [LivreController::class, 'create']);
Route::post('/livre/store', [LivreController::class, 'store']);

Route::get('/image', [ImageController::class, 'index'])->name('image');
Route::post('/image/{id}/delete', [ImageController::class, 'delete']);
Route::get('/image/{id}/edit', [ImageController::class, 'edit']);
Route::post('/image/{id}/update', [ImageController::class, 'update']);
Route::get('/image/create', [ImageController::class, 'create']);
Route::post('/image/store', [ImageController::class, 'store']);
