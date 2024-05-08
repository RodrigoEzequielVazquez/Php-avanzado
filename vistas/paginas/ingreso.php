<div>

    <form method="post" class="form">

        <div>

            <label for="email">Email:</label>
            <input type="email" class="" id="email" name="ingresoEmail">

            <label for="password">Contraseña:</label>
            <input type="password" class="" id="password" name="ingresoPassword">

            <?php
            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();
            ?>

            <input type="submit" value="enviar" class="enviar">

        </div>
    </form>
</div>