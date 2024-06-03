<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablaProductos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crudProductos.css') }}">


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
  
    <div class="search-bar">
        <!-- Formulario para filtrar por marca y variedad -->
        <form action="{{ route('productos.index') }}" method="GET">
            <div>
                <label for="marca">Marca:</label>
                <select name="marca" id="marca">
                    <option value="">Seleccionar Marca</option>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca }}">{{ $marca }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="variedad">Variedad:</label>
                <select name="variedad" id="variedad">
                    <option value="">Seleccionar Variedad</option>
                    @foreach ($variedades as $variedad)
                    <option value="{{ $variedad }}">{{ $variedad }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Filtrar</button>
        </form>
    </div>

    <main>



        <!-- Contenido principal -->
        <div class="listaProducto-container">

            <!-- Botón para agregar un nuevo producto -->
            @if(Auth::check() && Auth::user()->role == 'admin')
            <div class="add">
                <form class="addition" action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    <input type="text" name="marca" placeholder="Marca" required>
                    <input type="text" name="variedad" placeholder="Variedad" required>
                    <input type="number" name="precio" placeholder="Precio">
                    <input type="number" name="stock" placeholder="Stock">
                    <input type="file" name="Img" id="Img" accept="image/*" >
                    <button type="submit" class="check">Agregar producto</button>
                </form>
            </div>
            @endif


            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Marca</th>
                        <th>Variedad</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                        <th>Acciones</th>
                        @endif
                    </tr>
                </thead>
                <tbody>

                    @foreach($productos as $producto)
                    <tr>
                        <td>
                            <a href="{{ route('producto.show', $producto->id) }}">
                                <img src="{{ asset('img/cervezas/' . $producto->Img) }}"
                                    alt="Imagen de {{ $producto->marca }}" width="100">
                            </a>
                        </td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->variedad }}</td>
                        <td>{{ $producto->precio }} €</td>
                        <td>{{ $producto->stock }}</td>

                        <!-- Si el usuario logeado es admin puede ver y trabajar con esta parte -->
                        @if(Auth::check() && Auth::user()->role == 'admin')
                        <td>
                            <!-- Formulario de edición -->
                            <form action="{{ route('productos.update', $producto->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <input type="text" name="marca" value="{{ $producto->marca }}">
                                <input type="text" name="variedad" value="{{ $producto->variedad }}">
                                <input type="number" name="precio" value="{{ $producto->precio }}">
                                <input type="number" name="stock" value="{{ $producto->stock }}">
                                <button type="submit" class="btn btn-warning">Actualizar</button>
                            </form>

                            <!-- Formulario de eliminación -->
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <div class="card-body">
            {{ $productos->links() }}
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