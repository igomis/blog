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
    return view('inicio');
})->name('inicio');

// Rutas de prueba para generar y editar posts automáticamente

Route::resource('posts', PostController::class)->only(['index']);
Route::resource('posts', PostController::class)->middleware('auth')->only(['create','store']);
Route::resource('posts', PostController::class)->except(['index','create','store'])->middleware(['auth','owner:Post']);



Auth::routes();
Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout.get');
Route::post('login',[\App\Http\Controllers\LoginController::class,'login']);
