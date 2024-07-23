<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

Route::get('home', function () {
    return view('home');
});
//Route::get('index', HomeController::class);
Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::resource('peliculas', PeliculaController::class);
Route::resource('categorias', CategoriaController::class);