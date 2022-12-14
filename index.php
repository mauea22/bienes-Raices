<?php
    $inicio = true;
    include '../bienesraices/includes/templates/header.php';
?>

<main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Deptos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncios">
                <picture>
                    <source srcset="../bienesraices/build/img/anuncio1.webp" type="image/webp">
                    <source srcset="../bienesraices/build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="../bienesraices/build/img/anuncio1.jpg" alt="imagen anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio </p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="../bienesraices/build/img/icono_wc.svg" alt="icono wc" loading="lazy" class="icono">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="../bienesraices/build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" class="icono">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="../bienesraices/build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy" class="icono">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
            <div class="anuncios">
                <picture>
                    <source srcset="../bienesraices/build/img/anuncio2.webp" type="image/webp">
                    <source srcset="../bienesraices/build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="../bienesraices/build/img/anuncio2.jpg" alt="imagen anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio </p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img  class="icono"src="../bienesraices/build/img/icono_wc.svg" alt="icono wc" loading="lazy">
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
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
            <div class="anuncios">
                <picture>
                    <source srcset="../bienesraices/build/img/anuncio3.webp" type="image/webp">
                    <source srcset="../bienesraices/build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="../bienesraices/build/img/anuncio3.jpg" alt="imagen anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio </p>
                    <p class="precio">$3.000.000</p>

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
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
        </div>
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la Casa de tus Sueños</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture srcest="../bienesraices/build/img/blog1.webp" type="image/webp"></picture>
                    <picture srcest="../bienesraices/build/img/blog1.jpg" type="image/jpeg"></picture>
                    <img src="../bienesraices/build/img/blog1.jpg" alt="entreda de blog" loading="lazy">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20-10-2021 </span>por: <span>Admin</span></p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nisi perferendis voluptate neque officia.</p>
                    </a>
                </div>
            </article>
        

            <article class="entrada-blog">
                <div class="imagen">
                    <picture srcest="../bienesraices/build/img/blog2.webp" type="image/webp"></picture>
                    <picture srcest="../bienesraices/build/img/blog2.jpg" type="image/jpeg"></picture>
                    <img src="../bienesraices/build/img/blog2.jpg" alt="entreda de blog" loading="lazy">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20-10-2021 </span>por: <span>Admin</span></p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nisi perferendis voluptate neque officia</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimonial">
            <h3>Testimonios</h3>

            <div class="testimoniales">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</blockquote>
                <p>- Mauro Allena</p>
            </div>
        </section>
    </div>

    <?php
        include './includes/templates/footer.php';
    ?>

    <script src="../bienesraices/build/js/bundle.min.js"></script>
</body>
</html>