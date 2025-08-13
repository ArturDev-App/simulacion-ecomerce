<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>

<body>
    <div class="container">
        <h1>Agregar Nuevo Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

            <label for="precio">Precio (MXN):</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <label for="imagen_url">Imagen (pega un link de imagen válida):</label>
            <input type="text" id="imagen_url" name="imagen_url">

            <label for="colores">Colores disponibles (separados por comas):</label>
            <input type="text" id="colores" name="colores">

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" min="0" required>

            <button type="submit">Guardar producto</button>
        </form>
    </div>
    @if(session('error'))
    <script>
        alert("{{ session('error') }}")
    </script>
    @endif

    @if(session('success'))
    <script>
        alert("{{ session('success') }}")
    </script>
    @endif


    <script src="{{ asset('js/create.js') }}"></script>
</body>

</html>