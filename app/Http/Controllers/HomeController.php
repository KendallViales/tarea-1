<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Categoria;
class HomeController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        $categorias = Categoria::all();
        return view('home', compact('peliculas', 'categorias'));
    }
}
