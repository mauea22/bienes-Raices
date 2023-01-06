<?php
    include '../bienesraices/includes/templates/header.php';
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="../bienesraices/build/img/nosotros.webp" type="image/webp">
                    <source srcset="../bienesraices/build/img/nosotros.jpg" type="image/jpeg">
                    <img src="../bienesraices/build/img/nosotros.jpg" alt="sobre Nosotros" loading="lazy">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consequuntur adipisci deleniti in inventore cum aliquam dignissimos id. Dolorum, tempora iure ipsam tempore possimus corporis iste facilis. Facere, necessitatibus possimus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ullam itaque ipsum, tempora quae laborum dicta nesciunt consequuntur maxime veritatis assumenda, fugit aut officia corrupti libero illo cupiditate iste eos?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quidem dolore eum voluptate accusamus cumque illum placeat obcaecati repellendus reprehenderit voluptatem labore debitis possimus sint odio, distinctio similique maxime dolor.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1> Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="../bienesraices/build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum delectus tenetur alias quibusdam accusantium doloremque recusandae expedita, eum, tempore similique, quis soluta. Nisi ducimus hic commodi eveniet necessitatibus nam accusamus.</p>
            </div>
            <div class="icono">
                <img src="../bienesraices/build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum delectus tenetur alias quibusdam accusantium doloremque recusandae expedita, eum, tempore similique, quis soluta. Nisi ducimus hic commodi eveniet necessitatibus nam accusamus.</p>
            </div>
            <div class="icono">
                <img src="../bienesraices/build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum delectus tenetur alias quibusdam accusantium doloremque recusandae expedita, eum, tempore similique, quis soluta. Nisi ducimus hic commodi eveniet necessitatibus nam accusamus.</p>
            </div>
        </div>
    </section>

    <?php
        include './includes/templates/footer.php';
    ?>

    <script src="../bienesraices/build/js/bundle.min.js"></script>
</body>
</html>