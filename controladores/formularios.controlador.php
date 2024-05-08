<?php

class ControladorFormularios
{
    // Registro

    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    // Seleccionar Registros

    static public function ctrSeleccionarRegistros($item, $valor)
    {
        if (isset($_POST["registroNombre"])) {
            $tabla = "registros";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            return $respuesta;
        }
    }

    static public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
               
                $_SESSION["validarIngreso"]="ok";
                
                echo
                '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                window.location = "index.php?ruta=inicio"

                </script>';

             
            } else {
                echo
                '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                </script>';

                echo "<div> Error al ingresar al sistema, el email o la contraseña no coinciden</div>";
            }
        }
    }
}
