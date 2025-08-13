<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Bienvenido al Panel de Administración</h1>
        <div class="menu">
            <a href="{{ url('/admin/productos') }}">📦 Ver productos</a>
            <a href="{{ url('/admin/productos/crear') }}">➕ Agregar producto</a>
            <a href="#">🛒 Ver pedidos (futuro)</a>
            <a href="#">📉 Reportes (futuro)</a>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
