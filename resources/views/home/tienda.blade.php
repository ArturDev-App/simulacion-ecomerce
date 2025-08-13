<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>
<body>
    <header>
        <a href=""><h2>MY STORE</h2></a>
        <nav>
            <a href="">Sobre nosotros</a>
            <a href="">Categorías</a>
            <a href="">Carrito</a>
            <a href="">Iniciar Sesión</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>OBTÉN NUESTRAS MEJORES OFERTAS</h1>
            </div>
            <div class="hero-description">
                <p>
                    Somos la primer tienda en el Estado de México, reconocida por nuestro arduo labor logístico y
                    nuestro compromiso con entregarte productos de calidad con las mejores telas exportadas
                    desde Europa. Compra con nosotros y obtén promociones increíbles.
                    <br><br>
                    Regístrate o inicia sesión en el siguiente botón para recibir ofertas y realizar tus procesos de
                    compra:
                </p>
                <button onclick="location.href=''">Registrarme</button>
            </div>
        </section>

        <section class="categorias">
            <div class="categoria"><a href="">HOMBRE</a></div>
            <div class="categoria"><a href="">MUJER</a></div>
            <div class="categoria"><a href="">ACCESORIOS</a></div>
            <div class="categoria"><a href="">NIÑOS/AS</a></div>
        </section>

        <section class="productos">
            <h3>PRODUCTOS DESTACADOS</h3>
            <div id="contenedor-productos" class="grid-productos">
                <!-- Se insertan dinámicamente -->
            </div>
        </section>
    </main>

    <script src="{{ asset('js/tienda.js') }}"></script>
</body>
</html>
