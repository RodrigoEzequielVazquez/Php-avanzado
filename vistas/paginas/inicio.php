<?php

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

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);

?>

<h1>Inicio</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $value) : ?>
            <tr>
                <td><?php echo ($key + 1); ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["email"]; ?></td>
                <td><?php echo $value["fecha"]; ?></td>
                <td>
                    <div>
                        <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar"> Editar </a>

                        <form method="post">

                            <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                            <button type="submit" class="boton_borrar"> Borrar </button>
                        </form>

                    </div>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>


<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <body id="contenedorInicio">
        <div class="cardsInicio">
            <p>Xbox Series X y Series S</p>
            <img src="./public/img/xbox.jpg" alt="">
            <p>Las Xbox Series X y Xbox Series S (colectivamente, Xbox Series X|S), son una línea de videoconsolas de sobremesa desarrolladas por Microsoft y la cuarta generación de la familia de consolas Xbox. La familia de consolas, conocida colectivamente como "Project Scarlett" y revelada por primera vez en el E3 2019, incluye la Xbox Series X de gama alta, revelada en The Game Awards 2019 y cuyo nombre en código es "Project Anaconda", y la Xbox Series S de menor costo, anunciada en septiembre de 2020 y cuyo nombre en código es "Project Lockhart". Ambas consolas se lanzaron el 10 de noviembre de 2020 y compiten actualmente con la PlayStation 5 de Sony, lanzada el mismo mes, y ambas son parte de la novena generación de consolas de videojuegos.</p>
        </div>
        <div class="cardsInicio">
            <p>Play Station 5</p>
            <img src="./public/img/ps5.jpg" alt="">
            <p>PlayStation 5 (oficialmente abreviada como PS5) es la quinta consola de videojuegos de sobremesa desarrollada por la empresa Sony Interactive Entertainment, a la vez que es la tercera consola de Sony en ser diseñada por Mark Cerny. Fue anunciada en diciembre de 2019 como la sucesora de la PlayStation 4. Se lanzó el 12 de noviembre de 2020 en Australia, Japón, Nueva Zelanda, Estados Unidos, Canadá, México y Corea del Sur, y en la semana siguiente en el resto del mundo. La PlayStation 5 junto con la Xbox Series X|S de Microsoft, lanzada el mismo mes, son parte de la novena generación de consolas de videojuegos.</p>
        </div>
    </body>
</body>

</html> -->