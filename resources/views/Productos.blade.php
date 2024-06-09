<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">

    <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">

</head>

<body>

    <header>
        <a href="{{ route('index') }}">
            <img href="{{ route('index') }}" class="logoFoto" src="{{ asset('img/LogoBeernamic4.png') }}"
                alt="Logo Beernamic">
        </a>
        <nav>
            <a href="{{ route('Productos') }}"><button><span class="box">Productos</span></button></a> |
            <a href="{{ route('sobre-nosotros') }}"><button><span class="box">Sobre nosotros</span></button></a> |
            <a href="{{ route('para-aprender') }}"><button><span class="box">Para aprender</span></button></a> |
            <div class="user-panel">
                <button class="user-button" onclick="toggleUserPanel()">Usuario</button>
                <div id="userOptions" class="options">
                    <a href="{{ route('login') }}"><button>Iniciar Sesión</button></a>
                    <a href="{{ route('register') }}"><button>Registrarse</button></a>
                </div>
            </div>
            <button href="#" class="button">
                <img src="{{ asset('img/carritoBlanco.png') }}" class="cart-icon" alt="Carrito de compras">
            </button>
        </nav>
    </header>


    <main>
        <div class="container">


            <div class="productos">
                <h2>Cruzcampo</h2>
                <div class="marca-products">
                    <!-- Productos de Cruzcampo -->
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-tremenda.png') }}" alt="Cruzcampo 1">
                        <p>Tremenda</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-especial.png') }}" alt="Cruzcampo 2">
                        <p>Especial</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-reserva00.png') }}" alt="Cruzcampo 3">
                        <p>Reserva Tostada 0.0</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-singluten.png') }}" alt="Cruzcampo 4">
                        <p>Sin Gluten</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-radler.png') }}" alt="Cruzcampo 5">
                        <p>Radler</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-reserva.png') }}" alt="Cruzcampo 6">
                        <p>Reserva</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-cruzcampo00.png') }}" alt="Cruzcampo 7">
                        <p>Cruzcampo 0.0</p>
                    </div>
                    <div class="product-cruzcampo">
                        <img src="{{ asset('img/cerveza/front-bottle-cana.png') }}" alt="Cruzcampo 8">
                        <p>Cerveza de barril</p>
                    </div>
                </div>


                <h2>Mahou</h2>
                <div class="marca-products">
                    <!-- Productos de Mahou -->
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/mahou-bottle-clasic.png') }}" alt="Mahou 1">
                        <p>Clasica</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/mahou-bottle-ipa.png') }}" alt="Mahou 2">
                        <p>IPA</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/mahou-bottle-gluten.png') }}" alt="Mahou 3">
                        <p>Sin Gluten</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/mahou-bottle-radler.png') }}" alt="Mahou 4">
                        <p>Radler</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/M00T_33cl.png') }}" alt="Mahou 5">
                        <p>Tostada 0.0</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/Barrica_Or.png') }}" alt="Mahou 6">
                        <p>Barrica - Matices de madera de roble</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/Barrica_Bou.png') }}" alt="Mahou 7">
                        <p>Barrica - Bourbon</p>
                    </div>
                    <div class="product-mahou">
                        <img src="{{ asset('img/cerveza/Barrica_12.png') }}" alt="Mahou 8">
                        <p>Barrica - 12 meses</p>
                    </div>
                </div>


                <h2>Estrella Galicia</h2>
                <div class="marca-products">
                    <!-- Productos de Estrella-galicia -->
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/botella-estrella-galicia-especial.png') }}"
                            alt="Estrella-galicia 1">
                        <p>Especial</p>
                    </div>
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/botella-estrella-galicia-00.png') }}"
                            alt="Estrella-galicia 2">
                        <p>0.0</p>
                    </div>
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/botella-estrella-galicia-sin-gluten.png') }}"
                            alt="Estrella-galicia 3">
                        <p>Sin gluten</p>
                    </div>
                    <div class="product-EG-00">
                        <img src="{{ asset('img/cerveza/estrella-galicia-00-tostada-1.png') }}"
                            alt="Estrella-galicia 4">
                        <p>Tostada 0.0</p>
                    </div>
                    <div class="product-EG-00">
                        <img src="{{ asset('img/cerveza/estrella-galicia-00-negra.png') }}"
                            alt="Estrella-galicia 5">
                        <p>Negra 0.0</p>
                    </div>
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/ledg-bottle.png') }}" alt="Estrella-galicia 6">
                        <p>La estrella de Galicia</p>
                    </div>
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/botella-edicion-navidad.png') }}"
                            alt="Estrella-galicia 7">
                        <p>Estrella de Navidad</p>
                    </div>
                    <div class="product-EG">
                        <img src="{{ asset('img/cerveza/estrella_galicia_bodega.png') }}"
                            alt="Estrella-galicia 8">
                        <p>Cerveza de bodega</p>
                    </div>
                </div>

                <h2>Heineken</h2>
                <div class="marca-products">
                    <!-- Productos de Heineken -->
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-00-bottle.png') }}" alt="Heineken 1">
                        <p>0.0</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-original-bottle.png') }}" alt="Heineken 2">
                        <p>Original - Botella</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-original-can.png') }}" alt="Heineken 3">
                        <p>Original - Lata 3</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-silver-sleek-can-product.png') }}" alt="Heineken 4">
                        <p>Silver - Lata</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-draught-glass.png') }}" alt="Heineken 5">
                        <p>Caña</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-extra-cold-glass.png') }}" alt="Heineken 6">
                        <p>Caña helada</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-draught-keg.png') }}" alt="Heineken 7">
                        <p>Barril 5L</p>
                    </div>
                    <div class="product-heineken">
                        <img src="{{ asset('img/cerveza/heineken-sub.png') }}" alt="Heineken 8">
                        <p>Distribuidor de cerveza - Krups</p>
                    </div>
                </div>

                <h2>Alhambra</h2>
                <div class="marca-products">
                    <!-- Productos de Alhambra -->
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-1925.png') }}" alt="Alhambra 1">
                        <p>1925</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-barrica-ron-granada.png') }}" alt="Alhambra 2">
                        <p>Barrica de Ron Granadino</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-reserva-citra-ipa.png') }}" alt="Alhambra 4">
                        <p>Reserva Citra IPA</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-tradicional.png') }}" alt="Alhambra 4">
                        <p>Tradicional</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-especial.png') }}" alt="Alhambra 5">
                        <p>Especial</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-especial-sin.png') }}" alt="Alhambra 6">
                        <p>Especial Sin</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-reserva.png') }}" alt="Alhambra 7">
                        <p>Reserva Roja</p>
                    </div>
                    <div class="product-alhambra">
                        <img src="{{ asset('img/cerveza/alhambra-numeradas.png') }}" alt="Alhambra 8">
                        <p>Las numeradas</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <h3>Información de contacto</h3>
                <p>C/ Rafael Alberti, El Pto. de Sant. Mª , España</p>
                <p>Phone: +34 611 02 54 89</p>
                <p>Email: beernamic@gmail.com</p>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Terminos de uso</a></li>
                    <li><a href="#">Contacta con nosotros</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h3>Conecta con nosotros</h3>
                <ul>
                    <li><a href="#"><img src="{{ asset('img/rrss/facebook.svg') }}" alt="Facebook"></a></li>
                    <li><a href="#"><img src="{{ asset('img/rrss/twitter-x.svg') }}" alt="Twitter"></a></li>
                    <li><a href="#"><img src="{{ asset('img/rrss/instagram.svg') }}" alt="Instagram"></a></li>
                </ul>
            </div>
        </div>
        <div class="legal-info">
            <p>&copy; 2024 Beernamic. Todos los derechos reservados.</p>
        </div>
    </footer>


    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>