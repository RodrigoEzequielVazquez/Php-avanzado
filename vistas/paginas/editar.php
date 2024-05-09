<?php

if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

}

?>


<div>

    <form method="post">

        <input type="text" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" name="actualizarNombre">

        <input type="email" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" name="actualizarEmail">

        <input type="password" placeholder="Escriba su contraseña" name="actualizarPassword">

        <input type="hidden" value="<?php echo $usuario["password"]; ?>" name="passwordActual">

        <input type="hidden" value="<?php echo $usuario["id"]; ?>" name="idUsuario">

        <?php

        $actualizar = ControladorFormularios::ctrActualizarRegistro();

        if($actualizar == "ok"){

            echo
            '<script>

            if (window.history.replaceState) {

                window.history.replaceState(null,null,window.location.href);

            }
            </script>';

            echo "<div> El usuario ha sido actualizado </div>";

                '<script>

          setTimeout(function(){

            window.location = "index.php?ruta=inicio";

            },3000);
            </script>';
        } 
    
        ?>

        <button type="submit"> Actualizar </button>

    </form>
</div>