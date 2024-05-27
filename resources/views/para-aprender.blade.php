<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Aprender</title>
    <link rel="stylesheet" href="{{ asset('css/para-aprender.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/botones.css') }}">

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

    <main>
    <div class="section section1">
        <div class="content">
            <h2>Los orígenes remotos</h2>
            <p>La historia de la cerveza se remonta a tiempos antiguos, posiblemente hace más de 10,000 años. Los primeros rastros de cerveza se encontraron en la antigua Mesopotamia, donde se elaboraba a partir de granos fermentados.</p>
            <p>Se cree que la cerveza fue descubierta por accidente cuando granos de cereal se mojaron y fermentaron naturalmente, creando una bebida alcohólica. Esta bebida primitiva era nutritiva y se consumía ampliamente en muchas culturas antiguas como parte de la dieta diaria.</p>
            <p>Con el tiempo, la elaboración de cerveza se volvió más refinada y se convirtió en una práctica establecida en muchas civilizaciones, desempeñando un papel importante en la vida social y religiosa.</p>
        </div>
        <div class="image">
            <img src="{{ asset('img/beer5.png') }}" alt="beer5" style="width: 35%; margin: auto;">
        </div>
    </div>

    <div class="section section2">
        <div class="content">
            <h2>Cerveza en la antigüedad</h2>
            <p>Los sumerios de Mesopotamia fueron una de las primeras civilizaciones en producir cerveza en grandes cantidades. La cerveza se consideraba una parte importante de la dieta y la cultura sumeria.</p>
            <p>Los antiguos egipcios también elaboraban cerveza, que era consumida por todas las clases sociales. La cerveza era a menudo parte de las ofrendas religiosas y se consideraba una bebida nutritiva. Se creía que tenía propiedades medicinales y era parte de los rituales funerarios.</p>
            <p>La producción de cerveza se expandió a lo largo del mundo antiguo, llegando a regiones como la antigua Grecia y Roma, donde era una bebida menos común que el vino pero aún se producía y consumía en diferentes formas.</p>
        </div>
        <div class="image">
            <img src="{{ asset('img/beer6.png') }}" alt="beer6" style="width: 35%; margin: auto;">
        </div>
    </div>

    <div class="section section3">
        <div class="content">
            <h2>El papel de la cerveza desde Roma a la Edad Media</h2>
            <p>Tanto en la antigua Grecia como en Roma, la cerveza era una bebida menos común que el vino, pero aún así se producía y consumía en diferentes formas.</p>
            <p>Durante la Edad Media, los monasterios europeos jugaron un papel crucial en la elaboración de cerveza. Muchas recetas y técnicas de elaboración de cerveza se desarrollaron en monasterios, donde la cerveza era considerada una bebida esencial para la vida cotidiana y se producía en grandes cantidades.</p>
            <p>La cerveza se convirtió en una parte fundamental de la dieta medieval y era más segura de beber que el agua, ya que el proceso de fermentación eliminaba los microorganismos dañinos.</p>
        </div>
        <div class="image">
            <img src="{{ asset('img/beer7.png') }}" alt="beer7" style="width: 75%; margin: auto;">
        </div>
    </div>

    <div class="section section4">
        <div class="content">
            <h2>La Ley de Pureza Alemana</h2>
            <p>En 1516, se promulgó la Ley de Pureza Alemana (Reinheitsgebot) en Baviera, que regulaba los ingredientes permitidos en la cerveza: agua, malta y lúpulo (levadura se añadió más tarde).</p>
            <p>Con la llegada de la Revolución Industrial, la producción de cerveza se volvió más industrializada. Se desarrollaron nuevas técnicas de fermentación y almacenamiento, lo que permitió una producción más eficiente y un suministro más amplio de cerveza.</p>
            <p>La cerveza se convirtió en una bebida popular en todo el mundo, con estilos regionales únicos y una variedad cada vez mayor de sabores y aromas.</p>
        </div>
        <div class="image">
            <img src="{{ asset('img/beer8.jpg') }}" alt="beer8" style="width: 35%; margin: auto;">
        </div>
    </div>

    <div class="section section5">
        <div class="content">
            <h2>La cerveza en la era moderna</h2>
            <p>En el siglo XX, la prohibición del alcohol en muchos países llevó a la disminución de la producción de cerveza. Sin embargo, esto también condujo al resurgimiento de la cerveza artesanal, con pequeñas cervecerías que producían cervezas únicas y de alta calidad.</p>
            <p>Hoy en día, la cerveza es una de las bebidas alcohólicas más populares del mundo. La variedad de estilos y sabores de cerveza es inmensa, y la cultura cervecera sigue evolucionando con la aparición de cervecerías artesanales y festivales de cerveza en todo el mundo.</p>
            <p>Las tendencias modernas en la cerveza incluyen la experimentación con ingredientes no tradicionales, como frutas, especias y hierbas, así como un enfoque renovado en la sostenibilidad y la producción local.</p>
        </div>
        <div class="image">
            <img src="{{ asset('img/beer9.jpg') }}" alt="beer9" style="width: 35%; margin: auto;">
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

    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>