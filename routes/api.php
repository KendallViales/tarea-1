<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPeliController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/peliculas2', [ApiPeliController::class, 'listarPeliculas']);
Route::get('/peliculas2/{id}', [ApiPeliController::class, 'obtenerPelicula']);
Route::post('/peliculas2', [ApiPeliController::class, 'crearPelicula']);