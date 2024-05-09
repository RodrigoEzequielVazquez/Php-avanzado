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

        // Desactivo el condicional ya que no devolvia los datos al momento de mostrarlos en el componente del inicio.
        // if (isset($_POST["registroNombre"])) {

        // }
        $tabla = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrIngreso()
    {
        if (isset($_POST["ingresoNombre"])) {
            $tabla = "registros";
            $item = "nombre";
            $valor = $_POST["ingresoNombre"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["nombre"] == $_POST["ingresoNombre"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

                $_SESSION["validarIngreso"] = "ok";

                var_dump($_SESSION);
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

    //Actualizar registro

    static public function ctrActualizarRegistro()
    {
        if (isset($_POST["actualizarNombre"])) {

            if ($_POST["actualizarNombre"] != "") {

                if ($_POST["actualizarPassword"] != "") {
                    $password = $_POST["actualizarPassword"];
                } else {
                    $password = $_POST["passwordActual"];
                }
            }
            $tabla = "registros";

            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

    
            if ($respuesta == "ok") {

                echo
                '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                window.location = "index.php?ruta=inicio"

                </script>';
            } 
            //else {
            //     echo
            //     '<script>

            //     if (window.history.replaceState) {

            //         window.history.replaceState(null,null,window.location.href);

            //     }
            //     </script>';

            //     echo "<div> Error al ingresar al sistema, el email o la contraseña no coinciden</div>";
            // }
        }
    }

    //Eliminar registro

    static public function ctrEliminarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {

            $tabla = "registros";

            $valor = $_POST["eliminarRegistro"];

            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

            if ($respuesta == "ok") {

                echo
                '<script>

                if (window.history.replaceState) {

                    window.history.replaceState(null,null,window.location.href);

                }
                window.location = "index.php?ruta=inicio"

                </script>';
            } 
            //else {
            //     echo
            //     '<script>

            //     if (window.history.replaceState) {

            //         window.history.replaceState(null,null,window.location.href);

            //     }
            //     </script>';

            //     echo "<div> Error al ingresar al sistema, el email o la contraseña no coinciden</div>";
            // }
        }
    }
}
