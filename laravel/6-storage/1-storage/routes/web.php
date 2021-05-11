<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
Route::post('/users/{id}/download', [UserController::class, 'download']);

Route::get('/albums', [AlbumController::class, 'index'])->name('albums');
Route::get('/albums/create', [AlbumController::class, 'create']);
Route::post('/albums/store', [AlbumController::class, 'store']);
Route::post('/albums/{id}/delete', [AlbumController::class, 'destroy']);

Route::get('/photos', [PhotoController::class, 'index'])->name('photos');
Route::get('/photos/create', [PhotoController::class, 'create']);
Route::post('/photos/store', [PhotoController::class, 'store']);
Route::post('/photos/{id}/delete', [PhotoController::class, 'destroy']);
Route::post('/photos/{id}/download', [PhotoController::class, 'download']);
