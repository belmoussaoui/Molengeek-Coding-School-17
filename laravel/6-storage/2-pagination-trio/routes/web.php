<?php

use App\Http\Controllers\GalerieController;
use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use App\Models\Galerie;
use App\Models\Portfolio;
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
    $page="home";
    $portfolios= Portfolio::all();
    $galeries= Galerie::all();
    return view('home', compact("page","portfolios","galeries"));
})->name("home");



//User
//ALL
Route::get('/user', [UserController::class, "index"])->name("user");

//DELETE
Route::post('/user/{id}/delete', [UserController::class, "destroy"]);

//EDIT
Route::get("/user/{id}/edit",[UserController::class, "edit"]);

//UPDATE
Route::post("/user/{id}/update",[UserController::class, "update"]);

//CREATE
Route::get("user/create", [UserController::class, "create"]);

//STORE
Route::post("/user/store", [UserController::class, "store"]);

//Download
Route::post("/user/{id}/download", [UserController::class, "download"]);




//Service
//ALL
Route::get('/service', [ServiceController::class, "index"])->name("service");

//DELETE
Route::post('/service/{id}/delete', [ServiceController::class, "destroy"]);

//EDIT
Route::get("/service/{id}/edit",[ServiceController::class, "edit"]);

//UPDATE
Route::post("/service/{id}/update",[ServiceController::class, "update"]);

//CREATE
Route::get("service/create", [ServiceController::class, "create"]);

//STORE
Route::post("/service/store", [ServiceController::class, "store"]);



//PORTFOLIO
//ALL
Route::get('/portfolio', [portfolioController::class, "index"])->name("portfolio");

//DELETE
Route::post('/portfolio/{id}/delete', [PortfolioController::class, "destroy"]);

//EDIT
Route::get("/portfolio/{id}/edit",[PortfolioController::class, "edit"]);

//UPDATE
Route::post("/portfolio/{id}/update",[PortfolioController::class, "update"]);

//CREATE
Route::get("portfolio/create", [PortfolioController::class, "create"]);

//STORE
Route::post("/portfolio/store", [PortfolioController::class, "store"]);

//Download
Route::post("/portfolio/{id}/download", [PortfolioController::class, "download"]);

//SHOW
Route::get("/portfolio/{id}/show", [PortfolioController::class, "show"]);




//Galerie
//ALL
Route::get('/galerie', [GalerieController::class, "index"])->name("galerie");

//DELETE
Route::post('/galerie/{id}/delete', [GalerieController::class, "destroy"]);

//EDIT
Route::get("/galerie/{id}/edit",[GalerieController::class, "edit"]);

//UPDATE
Route::post("/galerie/{id}/update",[GalerieController::class, "update"]);

//CREATE
Route::get("galerie/create", [GalerieController::class, "create"]);

//STORE
Route::post("/galerie/store", [GalerieController::class, "store"]);

//Download
Route::post("/galerie/{id}/download", [GalerieController::class, "download"]);

//SHOW
Route::get("/galerie/{id}/show", [GalerieController::class, "show"]);





//CARACTERISTIQUE
//ALL
Route::get('/caracteristique', [CaracteristiqueController::class, "index"])->name("caracteristique");

//DELETE
Route::post('/caracteristique/{id}/delete', [caracteristiqueController::class, "destroy"]);

//EDIT
Route::get("/caracteristique/{id}/edit",[caracteristiqueController::class, "edit"]);

//UPDATE
Route::post("/caracteristique/{id}/update",[caracteristiqueController::class, "update"]);

//CREATE
Route::get("caracteristique/create", [caracteristiqueController::class, "create"]);

//STORE
Route::post("/caracteristique/store", [caracteristiqueController::class, "store"]);

//Download
Route::post("/caracteristique/{id}/download", [caracteristiqueController::class, "download"]);

//SHOW
Route::get("/caracteristique/{id}/show", [caracteristiqueController::class, "show"]);
