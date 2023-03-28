<?php

use App\Http\Controllers\ArtistasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [ArtistasController::class, 'index'])->name('artistas.index');
Route::get('/create', [ArtistasController::class, 'create'])->name('artistas.create');
Route::post('/store', [ArtistasController::class, 'store'])->name('artistas.store');
Route::get('/edit/{id}', [ArtistasController::class, 'edit'])->where('id','[0-9]+');
Route::put('/edit/{id}', [ArtistasController::class, 'update'])->where('id','[0-9]+');
Route::get('/show/{id}', [ArtistasController::class, 'show'])->where('id','[0-9]+');
Route::delete('/destroy/{id}', [ArtistasController::class, 'destroy'])->where('id','[0-9]+');