<?php
    include '../bienesraices/includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>

        <picture>
            <source srcset="../bienesraices/build/img/destacada.webp" type="image/webp">
            <source srcset="../bienesraices/build/img/destacada.jpg" type="image/jepg">
            <img src="../bienesraices/build/img/destacada.webp" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="../bienesraices/build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="../bienesraices/build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" src="../bienesraices/build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos molestiae eum, magnam totam nemo eaque, a sapiente exercitationem eligendi impedit, dolore ab debitis rem quis quam aliquam laboriosam repudiandae laudantium 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ea itaque accusantium alias laudantium facere voluptates similique quas esse. Error aliquid impedit consequatur corporis minima deleniti tenetur harum asperiores deserunt!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum neque sapiente aperiam minima libero quisquam quidem. Fugit earum, eligendi quidem maiores ut reprehenderit, omnis magni magnam molestiae, consectetur mollitia ducimus.
            </p>
        </div>
    </main>

    <?php
        include './includes/templates/footer.php'
    ?>

    <script src="../bienesraices/build/js/bundle.min.js"></script>
</body>
</html>