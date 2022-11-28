<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\HomeController;


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
Route::get("/locations", [LocationsController::class, "index"]);
Route::get("/locations/show/{id}",  [LocationsController::class, "show"]);
Route::get("/locations/edit/{id}",  [LocationsController::class, "edit"]);
Route::post("/locations/edit/{id}",  [LocationsController::class, "update"]);

Route::post("/locations/delete/{id}",  [LocationsController::class, "delete"]);

Route::get("/locations/create", [LocationsController::class, "create"]);
Route::post("/locations/create", [LocationsController::class, "store"]);


