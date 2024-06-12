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
    <link rel="stylesheet" href="{{ asset('css/cardProductos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
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
                    <a href="{{ route('perfil.index') }}"><button class="user-button" onclick="toggleUserPanel()">Hola,
                            {{ Auth::user()->name }}</button></a>
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
        <div class="product-list-container">
            <!-- Botón para agregar un nuevo producto -->
            @if(Auth::check() && Auth::user()->role == 'admin')
            <div class="add">
                <form class="addition" action="{{ route('productos.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="marca" placeholder="Marca" required>
                    <input type="text" name="variedad" placeholder="Variedad" required>
                    <input type="number" name="precio" placeholder="Precio">
                    <input type="number" name="stock" placeholder="Stock">
                    <input type="file" name="Img" id="Img" accept="image/*">
                    <button type="submit" class="check">Agregar producto</button>
                </form>
            </div>
            @endif

            <!-- Loop para mostrar los productos como cards -->
            @foreach($productos as $producto)
            <div class="card">
                <a href="{{ route('producto.show', $producto->id) }}">
                    @if (Storage::disk('public')->exists('img/cervezas/' . $producto->Img))
                    <img class="card-img-top" src="{{ asset('storage/img/cervezas/' . $producto->Img) }}"
                        alt="Imagen de {{ $producto->marca }}">
                    @else
                    <img class="card-img-top" src="{{ asset('img/cervezas/' . $producto->Img) }}"
                        alt="Imagen de {{ $producto->marca }}">
                    @endif
                </a>
                <div class="card-body">
                    <h5 class="card-text">Marca: {{ $producto->marca }}</h5>
                    <p class="card-text">Variedad: {{ $producto->variedad }}</p>
                    <p class="card-text">Precio: {{ $producto->precio }} €</p>
                    <p class="card-text">Stock: {{ $producto->stock }}</p>
                    <!-- Si el usuario es administrador, mostrar botones de edición y eliminación -->
                    @if(Auth::check() && Auth::user()->role == 'admin')
                    <div class="btn-group" role="group">
                        <!-- Formulario de edición -->
                        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" class="form-control" name="marca" value="{{ $producto->marca }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="variedad"
                                    value="{{ $producto->variedad }}" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="precio" value="{{ $producto->precio }}">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="stock" value="{{ $producto->stock }}">
                            </div>
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </form>
                        <!-- Formulario de eliminación -->
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <!-- Paginación de los productos -->
        <div class="pagination">
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