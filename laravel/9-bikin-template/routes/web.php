<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureItemController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\IconController;
use App\Models\About;
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
    $about = About::first();
    return view('home', compact('hero', 'about'));
});

Route::resource('/admin/hero', HeroController::class);
Route::resource('/admin/about', AboutController::class);
Route::resource('/admin/icons', IconController::class);
Route::resource('/admin/features', FeatureController::class);
Route::resource('/admin/feature-items', FeatureItemController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
