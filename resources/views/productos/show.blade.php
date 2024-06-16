<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Estilos para el card */
        .producto-detalles {
            background-color: #732002;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
            /* Centrar horizontalmente */
            margin-bottom: 45px;
        }

        .producto-detalles h1 {
            margin-bottom: 10px;
            color: white;
        }

        .producto-detalles img {
            max-width: 100%;
            /* La imagen no superará el ancho del contenedor */
            height: auto;
            /* Para mantener la relación de aspecto */
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .producto-detalles p {
            margin-bottom: 10px;
            color: white;
        }
    </style>

    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">

   
    <script src="https://www.paypal.com/sdk/js?client-id=BAAu35SaqY0Ks0gLnSgH_V7zZ4diee1DZesdFyZ7-lRnehQhVi91dFAHbZZujFPQRG7j8mRyBLzwWLcGEg&components=hosted-buttons&disable-funding=venmo&currency=EUR"></script>


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

    <main>
        <div class="producto-detalles">
            <h1>{{ $producto->marca }} - {{ $producto->variedad }}</h1>
            
            @if (Storage::disk('public')->exists('img/cervezas/' . $producto->Img))
                    <img class="producto-imagen" src="{{ asset('storage/img/cervezas/' . $producto->Img) }}"
                        alt="Imagen de {{ $producto->marca }}">
                        <div class="shadow"></div>
                    @else
                    <img class="producto-imagen" src="{{ asset('img/cervezas/' . $producto->Img) }}"
                        alt="Imagen de {{ $producto->marca }}">
                        <div class="shadow"></div>
            @endif

            <p><strong>Precio:</strong> {{ $producto->precio }} €</p>
            <p><strong>Stock:</strong> {{ $producto->stock }}</p>
            <p><strong>Descripción:</strong> {{ $producto->Descripcion }}</p>
             
            <form action="{{ route('cart.add') }}" method="POST">
                 @csrf
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn btn-primary"> <img src="{{ asset('img/carritoBlanco.png') }}" class="button" style="width: 50px; height: auto; animation: none;"
                        alt="Añadir al carrito"></button>
            </form>
            <!-- Boton conectado a paypal -->
            <div id="paypal-container-WA2BTYKW39N4N"></div>

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