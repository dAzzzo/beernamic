<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Estilos para la lista de productos */
        .listaProducto-container {
            font-family: Arial, sans-serif;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
        }

        .listaProducto-container table {
            width: 100%;
            /* border-collapse: collapse; */
        }

        .listaProducto-container th {
            padding: 10px;
            text-align: left;
            background-color: #A66E29;
            font-size: 18px;
            color: #333;
        }

        .listaProducto-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

      
        .listaProducto-container td {
            font-size: 16px;
            color: #555;
        }

        .listaProducto-container img {
            max-width: 100px;
            /* Tamaño máximo deseado */
            max-height: 200px;
            /* Tamaño máximo deseado */
            width: auto;
            height: auto;
        }


        .listaProducto-container .card {
            width: 100px;
            /* Ancho de la imagen */
            height: 200px;
            /* Altura de la imagen */
            overflow: hidden;
        }

        .listaProducto-container .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Para mantener la proporción de la imagen */
        }

        /* Estilos adicionales para la paginación */
        .card-body {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
        }

        .card-body .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 0;
        }

        .card-body .pagination li {
            display: inline;
            margin-right: 10px;
        }

        .card-body .pagination li a,
        .card-body .pagination li span {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            color: #333;
            text-decoration: none;
        }

        .card-body .pagination .active a,
        .card-body .pagination .active span {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
    </style>

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
            <a href="{{ route('cart.index') }}"><button class="button">
                <img src="{{ asset('img/carritoBlanco.png') }}" class="cart-icon" alt="Carrito de compras">
            </button></a>
        </nav>
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

            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Marca</th>
                        <th>Variedad</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($productos as $producto)
                    <tr>
                    <td>
                        <a href="{{ route('producto.show', $producto->id) }}">
                            <img src="{{ asset('img/cervezas/' . $producto->Img) }}" alt="Imagen de {{ $producto->marca }}" width="100">
                        </a>
                    </td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->variedad }}</td>
                        <td>{{ $producto->precio }} €</td>
                        <td>{{ $producto->stock }}</td>
                        
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

