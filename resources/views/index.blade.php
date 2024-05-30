<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beernamic</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
  <link rel="stylesheet" href="{{ asset('css/acordeon.css') }}">

  <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">



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
    <div class="carousel-container">
      <div class="carousel">
        <div class="slide">
          <img src="{{ asset('img/beer1.png') }}" alt="beer1">
        </div>
        <div class="slide">
          <img src="{{ asset('img/beer2.png') }}" alt="beer2">
        </div>
        <div class="slide">
          <img src="{{ asset('img/beer3.png') }}" alt="beer3">
        </div>
        <div class="slide">
          <img src="{{ asset('img/beer4.png') }}" alt="beer4">
        </div>
      </div>
    </div>

    <h2>La historia de las cervezas</h2>

    <div class="card-row">
      <div class="card">
        <img src="{{ asset('img/fotoCervezas1.jpg') }}" alt="fotoCervezas1">
        <div class="card__content">
          <p class="card__title">Cerveza 1</p>
          <p class="card__description">La historia de la cerveza se remonta a tiempos antiguos. Se cree que la cerveza
            fue uno de los primeros productos de la fermentación que los humanos llevaron a cabo. La cerveza era una
            bebida común en muchas culturas antiguas y se elaboraba con ingredientes como la cebada, el trigo, el lúpulo
            y el agua.</p>
        </div>
      </div>

      <div class="text-right">
        <h3>La cerveza en la antigüedad</h3>
        <p>La cerveza ha sido una bebida apreciada desde tiempos remotos. En la antigüedad, era consumida en rituales
          religiosos y celebraciones festivas. Los primeros registros de producción de cerveza datan de hace más de 5000
          años, y se han encontrado vestigios en antiguas civilizaciones como la Mesopotamia y el antiguo Egipto.</p>
      </div>
    </div>

    <div class="card-row">
      <div class="text-left">
        <h3>La cerveza en la actualidad</h3>
        <p>Hoy en día, la cerveza es una de las bebidas más populares en el mundo. Existen una gran variedad de estilos
          y sabores, desde las tradicionales cervezas alemanas hasta las innovadoras cervezas artesanales. La industria
          cervecera ha experimentado un crecimiento significativo en las últimas décadas, y la cultura cervecera sigue
          siendo una parte importante de muchas sociedades.</p>
      </div>

      <div class="card">
        <img src="{{ asset('img/fotoCervezas2.jpg') }}" alt="fotoCervezas2">
        <div class="card__content">
          <p class="card__title">Cerveza 2</p>
          <p class="card__description">Las primeras evidencias de la producción de cerveza se remontan a la antigua
            Mesopotamia, donde se han encontrado registros que datan de al menos 5.000 años atrás. La cerveza era una
            parte importante de la vida cotidiana en la antigua Mesopotamia y se consumía tanto en ceremonias religiosas
            como en la vida diaria. A lo largo de la historia, la cerveza ha evolucionado y se ha convertido en una
            bebida con una amplia variedad de estilos y sabores.</p>
        </div>
      </div>
    </div>

    <div class="accordion">
      <div class="accordion__toggle">Marcas de cerveza</div>
      <div class="accordion__content">
        <a href="https://www.cervezasalhambra.es/" target="_blank">
          <img src="{{ asset('img/alhambra.png') }}" alt="Alhambra">
        </a>
        <a href="https://www.cruzcampo.es/" target="_blank">
          <img src="{{ asset('img/cruzcampo.png') }}" alt="Cruzcampo">
        </a>
        <a href="https://www.heineken.com/" target="_blank">
          <img src="{{ asset('img/heineken.png') }}" alt="Heineken">
        </a>
        <a href="https://www.mahou.com/" target="_blank">
          <img src="{{ asset('img/mahou.png') }}" alt="mahou">
        </a>
        <a href="https://www.estrellagalicia.es/" target="_blank">
          <img src="{{ asset('/img/estrellaGalicia.png') }}" alt="Estrella Galicia">
        </a>
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


  @if(Auth::check() && Auth::user()->role == 'admin')
  <script>
    alert("¡Bienvenido Administrador de la Página! Tienes privilegios especiales.");
  </script>
  @endif

  <script>
    function toggleUserPanel() {
      var options = document.getElementById("userOptions");
      options.style.display = options.style.display === "block" ? "none" : "block";
    }
  </script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>