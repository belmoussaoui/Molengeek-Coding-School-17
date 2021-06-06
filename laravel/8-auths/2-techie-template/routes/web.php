<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Models\About;
use App\Models\Counter;
use App\Models\Hero;
use App\Models\Section;
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
    $counts = Counter::all();
    $services = Service::paginate(6);
    $testimonials = Testimonial::all();
    $hero = Hero::first();
    $about = About::first();
    $sections = Section::all();
    return view('home', compact('counts', 'services', 'testimonials', 'about', 'hero', 'sections'));
})->name('home');

Route::resource('/counter', CounterController::class)->middleware(['auth']);
Route::resource('/testimonial', TestimonialController::class)->middleware(['auth']);
Route::resource('/service', ServiceController::class)->middleware(['auth']);
Route::resource('/hero', HeroController::class)->middleware(['auth']);
Route::resource('/about', AboutController::class)->middleware(['auth']);
Route::resource('/section', SectionController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';