<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header y Footer</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/botones.css') }}">
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/acordeon.css') }}">
  
</head>

<body>

<header>
    <img class="logoFoto" src="{{ asset('img/LogoBeernamic.png') }}" alt="Logo Beernamic">
    <nav>
        <button href="#"><span class="box">Productos</span></button> |
        <button href="#"><span class="box">Sobre nosotros</span></button> |
        <button href="#"><span class="box">Para aprender</span></button> |
        <div class="user-panel">
          <button class="user-button" onclick="toggleUserPanel()">Usuario</button>
            <div id="userOptions" class="options">
              <a href="{{ route('login') }}"><button>Iniciar Sesión</button></a>
              <a href="{{ route('register') }}"><button>Registrarse</button></a>
            </div>
        </div>
        <button href="#" class="button">
           <img src="{{ asset('img/carritoBlanco.png') }}" class="cart-icon" alt="Carrito de compras">
        </button>
    </nav>
</header>


  <main>
     <!-- Página de Productos (productos.blade.php):
        -Muestra todos los productos disponibles con su imagen, nombre y precio.
        -Incluye un formulario de búsqueda que permite al usuario buscar productos por nombre o categoría.
        -Cada producto tiene un botón para agregarlo al carrito.
        -Opcionalmente, puede incluir filtros por categoría, precio, etc. 
-->
  
  <!-- Página del Carrito (carrito.blade.php):
        -Muestra todos los productos agregados al carrito con su imagen, nombre, precio y cantidad.
        -Permite al usuario ajustar la cantidad de productos o eliminar productos del carrito.
        -Muestra el total de la compra y ofrece un botón para proceder al pago.
        -Puede incluir un resumen del pedido y opciones de envío. 
-->

  </main>

  <footer>
    <div class="footer-content">
      <div class="contact-info">
        <h3>Contact Information</h3>
        <p>123 Main Street, Cityville, Country</p>
        <p>Phone: +123 456 7890</p>
        <p>Email: info@example.com</p>
      </div>
      <div class="quick-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="social-media">
        <h3>Connect with Us</h3>
        <ul>
          <li><a href="#"><img src="{{ asset('facebook-icon.png') }}" alt="Facebook"></a></li>
          <li><a href="#"><img src="{{ asset('twitter-icon.png') }}" alt="Twitter"></a></li>
          <li><a href="#"><img src="{{ asset('linkedin-icon.png') }}" alt="LinkedIn"></a></li>
          <li><a href="#"><img src="{{ asset('instagram-icon.png') }}" alt="Instagram"></a></li>
        </ul>
      </div>
    </div>
    <div class="legal-info">
      <p>&copy; 2024 Footer Example Company. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
