<?php

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

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::get("/juego", [App\Http\Controllers\JuegoController::class, "index"])->name('juego.index');

Route::get("/juego/crete", [App\Http\Controllers\JuegoController::class, "create"])->name('juego.create');

Route::post("/juego", [App\Http\Controllers\JuegoController::class, "store"])->name('juego.store');

Route::get("/juego/{juego}", [App\Http\Controllers\JuegoController::class, "show"])->name('juego.show');

Route::delete("/juego/{juego}", [App\Http\Controllers\JuegoController::class, "destroy"])->name('juego.destroy');

Route::get("/juego/edit/{juego}", [App\Http\Controllers\JuegoController::class, "edit"])->name('juego.edit');

Route::put("/juego/{juego}", [App\Http\Controllers\JuegoController::class, "update"])->name('juego.update');
*/

use App\Http\Controllers\JuegoController; 
Route::resource('juego', JuegoController::class);
