<div  class="forms">

    <form method="post" class="form">

        <div>

            <label for="nombre">Nombre:</label>
            <input type="text" class="" id="nombre" name="ingresoNombre">

            <label for="password">Contraseña:</label>
            <input type="password" class="" id="password" name="ingresoPassword">

            <?php
            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();
            ?>

            <input type="submit" value="Enviar" class="enviar">

        </div>
    </form>
</div>