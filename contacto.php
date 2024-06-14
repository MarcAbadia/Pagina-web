<?php
include 'header.php';
?>

<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $msg = $_GET['msg'];
    ?>

    <div class="contenedor <?php echo htmlspecialchars($status); ?>">
        <p><?php echo htmlspecialchars($msg); ?></p>
    </div>

    <?php
}
?>

<h2>Contacto</h2>

<main>
    <section>
        <form class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Contáctame enviando tus datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label for="Nombre">Nombre</label>
                        <input class="input-text" type="text" name="nombre" placeholder="Tu nombre">
                    </div>
                    <div class="campo">
                        <label for="Telefono">Teléfono</label>
                        <input class="input-text" type="tel" name="telefono" placeholder="Tu Telefono">
                    </div>
                    <div class="campo">
                        <label for="Correo">Correo</label>
                        <input class="input-text" type="email" name="correo" placeholder="Tu correo">
                    </div>
                    <div class="campo">
                        <label for="Mensaje">Mensaje</label>
                        <textarea class="prueba" name="mensaje" cols="75" rows="10"></textarea>
                    </div>
                    <div class="campo">
                        <input class="boton-2" type="submit" value="Enviar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>

<?php
include 'footer.php';
?>
