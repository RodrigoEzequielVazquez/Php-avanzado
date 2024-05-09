<div class="forms">

    <form action="" method="post" class="form">

        <div>

            <label for="nombre">Nombre:</label>
            <input type="text" class="" id="nombre" name="registroNombre">

            <label for="email">Email:</label>
            <input type="text" class="" id="email" name="registroEmail">

            <label for="password">Contraseña:</label>
            <input type="password" class="" id="password" name="registroPassword">

            <?php
            $registro = ControladorFormularios::ctrRegistro();

            if ($registro == "ok") {
                echo '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                </script>';
                echo "<div> El usuario se registro con exito </div>";
            }
            if ($registro == "error") {
                echo '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                </script>';

                echo "<div> Error no se permiten caracteres especiales</div>";
            }
            ?>


            <input type="submit" value="Enviar" class="enviar">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <script src="vistas/js/script.js"></script>

        </div>
    </form>
</div>