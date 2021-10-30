<h2 class="titulo-pagina">Contacto</h2>

<section class="contenedor">
    <h3>Contactame llenando los campos:</h3>
    
    <form class="formulario" method="POST">
        <div class="contenedor-inputs">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre" name="nombre">
            </div>

            <div class="campo">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" placeholder="Tu apellido" name="apellido">
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu teléfono" name="telefono">
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu email" name="email">
            </div>
        </div>

        <div class="campo-textarea">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="Tu mensaje"></textarea>
        </div>

        <input type="submit" value="Enviar" class="boton">
    </form>
</section>