VIDEO DE MUESTRA DEL FUNCIONAMIENTO EN LOCAL    
https://drive.google.com/file/d/1_xxr2TcbJ8hv71Lc4JlSZenYPoe-5kHI/view?usp=sharing

Explicacion del funcionamiento = 

Para crear la pagina segui el MVC que utilizamos en las clases, donde las paginas se muestran desde la plantilla principal y donde los formularios estan conectados a la clase del controlador y sus metodos y estos a la clase y metodos de los modelos.
Particularmente elegi una pagina que cuenta con un inicio y 2 paginas de venta y una "cuenta sobre la tienda" y que simula la venta de videojuegos aunque no me enfoque en esa funcionalidad si no mas bien en las sesiones.

La siguiente validacion no fue incluida en el host ya que al momento de ingresar, la pagina siempre retornaba al registro, cosa que no ocurria con la pagina en local.

session_start();

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script> window.location = "index.php?ruta=ingreso"; </script>';

    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script> window.location = "index.php?ruta=ingreso"; </script>';

        return;
    }
}

