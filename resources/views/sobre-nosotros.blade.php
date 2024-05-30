<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/sobre-nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">
    <style>
        #map {
            width: 50%;
            height: 400px;
        }
    </style>
</head>

<body>

<header>
    <a href="{{ route('index') }}">
      <img class="logoFoto" src="{{ asset('img/LogoBeernamic4.png') }}" alt="Logo Beernamic">
    </a>
    <!-- Este es el primer navbar visible -->
    <div class='menu'>
      <nav>
        <a href="{{ route('productos.index') }}"><button><span class="box">Productos</span></button></a> |
        <a href="{{ route('sobre-nosotros') }}"><button><span class="box">Sobre nosotros</span></button></a> |
        <a href="{{ route('para-aprender') }}"><button><span class="box">Para aprender</span></button></a> |

        @guest
        <div class="user-panel">
          <button class="user-button" onclick="toggleUserPanel()">Usuario</button>
          <div id="userOptions" class="options">
            <a href="{{ route('login') }}"><button>Iniciar Sesión</button></a>
            <a href="{{ route('register') }}"><button>Registrarse</button></a>
          </div>
        </div>
        @else
        <div class="user-panel">
        <button class="user-button" onclick="toggleUserPanel()">Hola, {{ Auth::user()->name }}</button>
          <div id="userOptions" class="options">
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">{{ __('Logout') }}</button>
          </form>
          </div>
        </div>
        @endguest


        <a href="{{ route('cart.index') }}"><button class="button">
            <img src="{{ asset('img/carritoBlanco.png') }}" class="cart-icon" alt="Carrito de compras">
          </button></a>
      </nav>
    </div>
</header>


<main>
    <div class="about-us">
        <div class="about-text">
            <h1>Sobre nosotros</h1>
            <p>Somos una empresa dedicada a ofrecer las mejores cervezas artesanales a nuestros clientes. Nuestro compromiso es proporcionar productos de alta calidad y satisfacer los gustos más exigentes de los amantes de la cerveza.</p>
            <p>En nuestra fábrica, cada cerveza es elaborada con cuidado y dedicación, siguiendo técnicas tradicionales y utilizando ingredientes de la más alta calidad. Desde las cervezas clásicas hasta las innovadoras, nuestro objetivo es ofrecer una experiencia única a todos los amantes de la cerveza.</p>
        </div>
        <div class="about-image">
            <div class="card">
                <img src="{{ asset('img/company_image.jpg') }}" alt="Imagen de la empresa">
            </div>
        </div>
    </div>

    <div class="about-us-reverse">
        <div class="about-image">
            <div class="card">
                <img src="{{ asset('img/company_image2.jpg') }}" alt="Imagen de la empresa">
            </div>
        </div>
        <div class="about-text">
            <h1>Sobre nosotros</h1>
            <p>Somos una empresa dedicada a ofrecer las mejores cervezas artesanales a nuestros clientes. Nuestro compromiso es proporcionar productos de alta calidad y satisfacer los gustos más exigentes de los amantes de la cerveza.</p>
            <p>Creemos en la importancia de la calidad, la innovación y la pasión por lo que hacemos. Nos esforzamos por mantener altos estándares en cada etapa de producción y estamos constantemente buscando nuevas formas de sorprender a nuestros clientes con sabores y aromas únicos.</p>
        </div>
    </div>

    <div id='map'></div>
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

<script src='https://unpkg.com/leaflet/dist/leaflet.js'></script>
<script>
    var map = L.map('map').setView([36.5297, -6.2926], 12); // Centra el mapa en las coordenadas de Cádiz y establece el nivel de zoom

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { // Utiliza un proveedor de mapas de OpenStreetMap
        maxZoom: 19, // Nivel de zoom máximo
    }).addTo(map);

    L.marker([36.5297, -6.2926]).addTo(map) // Añade un marcador en las coordenadas especificadas
        .bindPopup('Cádiz, España') // Agrega un mensaje emergente al marcador
        .openPopup(); // Abre el mensaje emergente automáticamente
</script>

</body>

</html>
