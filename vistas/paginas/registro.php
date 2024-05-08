<div>

    <form action="" method="post" class="form">

        <div>

            <label for="nombre">Nombre:</label>
            <input type="text" class="" id="nombre" name="registroNombre">

            <label for="email">Email:</label>
            <input type="text" class="" id="email" name="registroEmail">

            <label for="password">Contraseña:</label>
            <input type="password" class="" id="password" name="registroPassword">

            <input type="submit" value="enviar" class="enviar">

            <?php
            $registro = ControladorFormularios::ctrRegistro();
            ?>

        </div>
    </form>
</div>