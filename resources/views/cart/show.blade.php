<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Carrito</title>
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
            <a href="{{ route('productos.index') }}"><button><span class="box">Productos</span></button></a> |
            <a href="{{ route('sobre-nosotros') }}"><button><span class="box">Sobre nosotros</span></button></a> |
            <a href="{{ route('para-aprender') }}"><button><span class="box">Para aprender</span></button></a> |
            <div class="user-panel">
                <button class="user-button" onclick="toggleUserPanel()">Usuario</button>
                <div id="userOptions" class="options">
                    <a href="{{ route('login') }}"><button>Iniciar Sesión</button></a>
                    <a href="{{ route('register') }}"><button>Registrarse</button></a>
                </div>
            </div>
            <a href="{{ route('cart.index') }}" ><button class="button">
                <img src="{{ asset('img/carritoBlanco.png') }}" class="cart-icon" alt="Carrito de compras">
            </button></a>
        </nav>
    </header>


    <main>
        

    </main>

<!-- 
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
    </footer> -->


    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>