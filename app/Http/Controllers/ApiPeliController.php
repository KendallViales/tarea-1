<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;

use Illuminate\Http\Request;

class ApiPeliController extends Controller
{
    public function listarPeliculas(Request $request)
    {
          $sortBy = $request->query('sortBy', 'nombre'); 
          $sortOrder = $request->query('sortOrder', 'asc'); 
  
          $validSortFields = ['nombre', 'año', 'estudio'];
          if (!in_array($sortBy, $validSortFields)) {
              return response()->json(['error' => 'Campo de ordenación no válido'], 400);
          }
  
          $peliculas = Pelicula::with('categoria')->orderBy($sortBy, $sortOrder)->get();
          return response()->json($peliculas);

          //Para obtener las películas ordenadas por nombre de manera ascendente:
          //GET /api/peliculas2?sortBy=nombre&sortOrder=asc
         //Para obtener las películas ordenadas por año de manera descendente:
         //GET /api/peliculas?sortBy=año&sortOrder=desc

    }

    public function obtenerPelicula($id)
    {
        $pelicula = Pelicula::with('categoria')->find($id);

        if (!$pelicula) {
            return response()->json(['error' => 'Película no encontrada'], 404);
        }

        return response()->json($pelicula);
    }

    public function crearPelicula(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'año' => 'required|integer',
            'estudio' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        
        $pelicula = Pelicula::create($validatedData);

        return response()->json(['message' => 'Película creada exitosamente', 'pelicula' => $pelicula], 201);
    }
}