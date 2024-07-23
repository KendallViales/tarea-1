<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Categoria;
class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('peliculas.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'año' => 'required|integer',
            'estudio' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Pelicula::create($request->all());

        return redirect()->route('peliculas.index');
    }
}
