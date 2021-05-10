<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::post('/article/{id}/delete', [ArticleController::class, 'delete']);
Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
Route::post('/article/{id}/update', [ArticleController::class, 'update']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::post('/article/store', [ArticleController::class, 'store']);

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/portfolio/{id}/delete', [PortfolioController::class, 'delete']);
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit']);
Route::post('/portfolio/{id}/update', [PortfolioController::class, 'update']);
Route::get('/portfolio/create', [PortfolioController::class, 'create']);
Route::post('/portfolio/store', [PortfolioController::class, 'store']);

Route::get('/entreprise', [EntrepriseController::class, 'index'])->name('entreprise');
Route::post('/entreprise/{id}/delete', [EntrepriseController::class, 'delete']);
Route::get('/entreprise/{id}/edit', [EntrepriseController::class, 'edit']);
Route::post('/entreprise/{id}/update', [EntrepriseController::class, 'update']);
Route::get('/entreprise/create', [EntrepriseController::class, 'create']);
Route::post('/entreprise/store', [EntrepriseController::class, 'store']);
