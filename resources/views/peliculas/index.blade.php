<!DOCTYPE html>
<html>
<head>
    <title>Películas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Películas</h1>
        <a href="{{ route('peliculas.create') }}" class="btn btn-primary mb-3">Agregar Película</a>
        <ul class="list-group">
            @foreach($peliculas as $pelicula)
                <li class="list-group-item">
                    <strong>{{ $pelicula->nombre }}</strong> ({{ $pelicula->año }}) - {{ $pelicula->estudio }} - Categoría: {{ $pelicula->categoria->nombre }}
                </li>
            @endforeach
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
