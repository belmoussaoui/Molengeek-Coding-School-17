<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroItemController;
use App\Models\Hero;
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
    $hero = Hero::first();
    return view('home', compact('hero'));
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/hero/{id}/edit', [HeroController::class, 'edit'])->name('hero.edit');
Route::post('/hero/{id}/update', [HeroController::class, 'update'])->name('hero.update');

Route::resource('hero-items', HeroItemController::class);

Route::get('/header/{id}/edit', HeaderController::class);
Route::post('/header/{id}/update', HeaderController::class);

Route::get('/dashboard', function () {
    return view('backoffice.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
