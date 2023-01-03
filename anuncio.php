<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logotipo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build//img/barras.svg" alt="icono menu resposnsive">
                </div>

                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="" class="dark-mode-boton"/>
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jepg">
            <img src="build/img/destacada.webp" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="/build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" src="/build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos molestiae eum, magnam totam nemo eaque, a sapiente exercitationem eligendi impedit, dolore ab debitis rem quis quam aliquam laboriosam repudiandae laudantium 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ea itaque accusantium alias laudantium facere voluptates similique quas esse. Error aliquid impedit consequatur corporis minima deleniti tenetur harum asperiores deserunt!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum neque sapiente aperiam minima libero quisquam quidem. Fugit earum, eligendi quidem maiores ut reprehenderit, omnis magni magnam molestiae, consectetur mollitia ducimus.
            </p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados 2022 &copy; </p>
    </footer>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>