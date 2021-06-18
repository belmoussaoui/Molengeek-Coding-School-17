<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactItemController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureItemController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialItemController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
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
    $testimonial = Testimonial::first();
    $team = Team::first();
    $contact = Contact::first();
    return view('home', compact('hero', 'about', 'feature', 'service', 'portfolio', 'testimonial', 'team', 'contact'));
});

Route::resource('/admin/hero', HeroController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/about', AboutController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/icons', IconController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/features', FeatureController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/feature-items', FeatureItemController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/services', ServiceController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/service-items', ServiceItemController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/portfolio', PortfolioController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/cards', CardController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/testimonials', TestimonialController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/testimonial-items', TestimonialItemController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/team', TeamController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/member', MemberController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/contact', ContactController::class)->middleware(['auth', 'admin']);

Route::post('/send-mail', [FormulaireController::class, 'sendMail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
