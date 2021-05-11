<?php

use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/fact', [FactController::class, 'index'])->name('fact');
Route::post('/fact/{id}/delete', [FactController::class, 'delete']);
Route::get('/fact/{id}/edit', [FactController::class, 'edit']);
Route::post('/fact/{id}/update', [FactController::class, 'update']);
Route::get('/fact/create', [FactController::class, 'create']);
Route::post('/fact/store', [FactController::class, 'store']);

Route::get('/skill', [SkillController::class, 'index'])->name('skill');
Route::post('/skill/{id}/delete', [SkillController::class, 'delete']);
Route::get('/skill/{id}/edit', [SkillController::class, 'edit']);
Route::post('/skill/{id}/update', [SkillController::class, 'update']);
Route::get('/skill/create', [SkillController::class, 'create']);
Route::post('/skill/store', [SkillController::class, 'store']);

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/portfolio/{id}/delete', [PortfolioController::class, 'delete']);
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit']);
Route::post('/portfolio/{id}/update', [PortfolioController::class, 'update']);
Route::get('/portfolio/create', [PortfolioController::class, 'create']);
Route::post('/portfolio/store', [PortfolioController::class, 'store']);

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::post('/service/{id}/delete', [ServiceController::class, 'delete']);
Route::get('/service/{id}/edit', [ServiceController::class, 'edit']);
Route::post('/service/{id}/update', [ServiceController::class, 'update']);
Route::get('/service/create', [ServiceController::class, 'create']);
Route::post('/service/store', [ServiceController::class, 'store']);
