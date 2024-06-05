<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

    <title>Carrito</title>

    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">

    <link rel="icon" href="{{ asset('img/LogoBeernamic2.png') }}" type="image/x-icon">
</head>

<body>


<main>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1 class="titulo">Carrito</h1>

        @if($cartItems->count() > 0)
        <div class="listaProducto-container">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Marca</th>
                        <th>Variedad</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $cartItem)
                    <tr>
                        <td>
                            <a href="{{ route('producto.show', $cartItem->product->id) }}">
                                <img src="{{ asset('img/cervezas/' . $cartItem->product->Img) }}"
                                    alt="Imagen de {{ $cartItem->product->marca }}" width="100">
                            </a>
                        </td>
                        <td>{{ $cartItem->product->marca }}</td>
                        <td>{{ $cartItem->product->variedad }}</td>
                        <td>{{ $cartItem->product->precio }} €</td>
                        <td>{{ $cartItem->product->stock }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                @csrf
                                <input type="hidden" name="id" value="{{ $cartItem->product->id }}">
                                <button type="submit" class="btnEliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>¡Tu carrito está vacío!</p>
        @endif

        <a href="{{ url('/productos') }}" class="botonSeguirComprando">Sigue comprando . . .</a>
    </div>
    @endsection
</main>


    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>