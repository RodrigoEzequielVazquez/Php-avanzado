<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/estilos.css">
</head>

<body>
    <div id="contenedor">

        <header>
            <div>
                <img src="./public/img/joystick.png" alt="">
                <p>Gamer City</p>
            </div>
            <nav id="botonera_principal">
                <ul>

                    <li> <a href="index.php?ruta=registro"> Registro </a> </li>

                    <li> <a href="index.php?ruta=ingreso"> Ingreso </a> </li>

                    <li> <a href="index.php?ruta=inicio"> Inicio </a> </li>

                    <li> <a href="index.php?ruta=juegos_xbox"> Juegos Xbox </a> </li>

                    <li> <a href="index.php?ruta=juegos_ps5"> Juegos PS5 </a> </li>

                    <li> <a href="index.php?ruta=nosotros"> Nosotros </a> </li>

                </ul>
            </nav>
        </header>

        <section id="contenido">
            <?php

            if (isset($_GET["ruta"])) {

                if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "juegos_xbox" || $_GET["ruta"] == "juegos_ps5" || $_GET["ruta"] == "registro" || $_GET["ruta"] == "ingreso" || $_GET["ruta"] == "editar" || $_GET["ruta"] == "nosotros") {
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            }


            ?>
        </section>
    </div>

    <footer>

        <div>
            <p>Gracias por visitarnos</p>
            <img src="./public/img/joystick.png" alt="">
        </div>
    </footer>



</body>

</html>