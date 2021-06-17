<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureItemController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialItemController;
use App\Models\About;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
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
    $feature = Feature::first();
    $service = Service::first();
    $portfolio = Portfolio::first();
    // $testimonial = Testimonial::first();
    return view('home', compact('hero', 'about', 'feature', 'service', 'portfolio'));
});

Route::resource('/admin/hero', HeroController::class);
Route::resource('/admin/about', AboutController::class);
Route::resource('/admin/icons', IconController::class);
Route::resource('/admin/features', FeatureController::class);
Route::resource('/admin/feature-items', FeatureItemController::class);
Route::resource('/admin/services', ServiceController::class);
Route::resource('/admin/service-items', ServiceItemController::class);
Route::resource('/admin/portfolio', PortfolioController::class);
Route::resource('/admin/cards', CardController::class);
Route::resource('/admin/testimonials', TestimonialController::class);
Route::resource('/admin/testimonial-items', TestimonialItemController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
