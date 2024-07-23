<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Categorías</h1>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Agregar Categoría</a>
        <ul class="list-group">
            @foreach($categorias as $categoria)
                <li class="list-group-item">{{ $categoria->nombre }}</li>
            @endforeach
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
