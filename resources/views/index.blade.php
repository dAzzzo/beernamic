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
        <a href="{{ route('perfil.index') }}"><button class="user-button" onclick="toggleUserPanel()">Hola, {{ Auth::user()->name }}</button></a>
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

  <div id="age-modal">
        <div id="age-modal-content">
            <h2>Verificación de Edad</h2>
            <p>Por favor, ingresa tu fecha de nacimiento</p>
            <div>
                <input type="number" id="day" class="modal-input" placeholder="Día" min="1" max="31">
                <input type="number" id="month" class="modal-input" placeholder="Mes" min="1" max="12">
                <input type="number" id="year" class="modal-input" placeholder="Año" min="1900" max="2023">
            </div>
            <button class="modal-button" onclick="checkAge()">Ingresar</button>
            <p id="error-message" class="modal-error">Debes tener 18 años o más para entrar.</p>
        </div>
    </div>


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

    <div class="content-wrapper">

    <section class="intro">
      <h2>Bienvenidos a Beernamic</h2>
      <p>Explora la diversidad y riqueza de las cervezas artesanales. Aquí encontrarás información sobre nuestros productos, la historia de la cerveza, y eventos destacados.</p>
    </section>

    <section class="info-section fade-in-scroll">
      <h2>Nuestros Productos</h2>
      <div class="info-content">
        <img src="{{ asset('img/cerveza.webp') }}" alt="fotoCervezas1">
        <div class="text-content">
          <h3>Variedad de Cervezas</h3>
          <p>Descubre una variedad de cervezas artesanales, cada una con su propio carácter y sabor único. Desde las cervezas rubias más ligeras hasta las oscuras y robustas.</p>
        </div>
      </div>
    </section>

    <section class="info-section fade-in-scroll">
      <h2>La Historia de la Cerveza</h2>
      <div class="info-content">
        <img src="{{ asset('img/homer.webp') }}" alt="Historia de la cerveza">
        <div class="text-content">
          <h3>La Cerveza en la Antigüedad</h3>
          <p>Conoce la fascinante historia de la cerveza, desde sus orígenes en la antigua Mesopotamia hasta su evolución y popularidad en la actualidad.</p>
        </div>
      </div>
    </section>

    <section class="info-section fade-in-scroll">
      <h2>Estilos de Cerveza</h2>
      <div class="info-content">
        <img src="{{ asset('img/dino.webp') }}" alt="Estilos de cerveza">
        <div class="text-content">
          <h3>Variedad de Estilos</h3>
          <p>Explora los diferentes estilos de cerveza, desde las lagers ligeras y refrescantes hasta las ales robustas y complejas. Cada estilo ofrece una experiencia única.</p>
        </div>
      </div>
    </section>

    <section class="info-section fade-in-scroll">
      <h2>Eventos y Degustaciones</h2>
      <div class="info-content">
        <img src="{{ asset('img/funnyBeer.webp') }}" alt="Eventos de degustación">
        <div class="text-content">
          <h3>Participa en Nuestros Eventos</h3>
          <p>Participa en nuestros eventos y degustaciones para experimentar de primera mano la calidad y sabor de nuestras cervezas.</p>
        </div>
      </div>
    </section>
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

    document.addEventListener('DOMContentLoaded', function () {
      const sections = document.querySelectorAll('.fade-in-scroll');

      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, { threshold: 0.1 });

      sections.forEach(section => {
        observer.observe(section);
      });
    });
  </script>

  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>