<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/botones.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   
</head>
<body>
    <div id="app">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        function toggleUserPanel() {
            var options = document.getElementById("userOptions");
            options.style.display = options.style.display === "block" ? "none" : "block";
        }
    </script>
</body>
</html>
