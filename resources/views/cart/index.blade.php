<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
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

    <title>Carrito</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">


    <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">
</head>

<body>
 

    <main>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Shopping Cart</h1>

        @if($cartItems->count() > 0)
        <table class="table">
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
                            <img src="{{ asset('img/cervezas/' . $producto->Img) }}"
                                alt="Imagen de {{ $producto->marca }}" width="100">
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
        @else
        <p>Tu carrito está vacío!</p>
        @endif

        <a href="{{ url('/productos') }}" class="btn btn-primary">Sigue comprando...</a>
    </div>
    @endsection
    </main>



    <!-- <footer>
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