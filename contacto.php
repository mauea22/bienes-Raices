<?php
    include '../bienesraices/includes/templates/header.php';
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="../bienesraices/build/img/destacada3.webp" type="image/webp">
            <source srcset="../bienesraices/build/img/destacada3.jpg" type="image/jepg">
            <img src="../bienesraices/build/img/destacada3.jpg" alt="imagen de contacto">
        </picture>

        <h3>Llene el Formulario de Contácto</h3>
        <form  class="formulario">
            <fieldset>
                <legend>Informaión Personal</legend>
                
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu email">

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la Propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select name="" id="opciones">
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                    <option value="" disabled selected >--Seleccionar--</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" id="presupuesto" placeholder="Tu Precio">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Cómo desea ser contactado:</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
        include './includes/templates/footer.php'
    ?>

    <script src="../bienesraices/build/js/bundle.min.js"></script>
</body>
</html>