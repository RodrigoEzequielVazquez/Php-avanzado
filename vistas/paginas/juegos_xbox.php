<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Juegos Xbox</h1>

    <section class="prodSection">

        <?php

        const JUEGOS_XBOX = array("DSR", "FH", "TW3");

        $juegos_de = "XBOX";
        $precio_juegos = 60000;
        $ruta_juegos = "./public/img/juegosxbox/";
        $juegos = JUEGOS_XBOX;


        ?>
        <div class="contenedorPrincipal">
            <div class="titulo">
                <p>Mostrando juegos de <?php echo $juegos_de ?></p>
            </div>

            <div id="contenedorJuegos">

                <?php
                foreach ($juegos as $juego) {
                    $imagenSrc = $ruta_juegos . $juego . ".jpg";
                    echo '<div class="card">';
                    echo '<img src=' . $imagenSrc . ' alt=' . $juego . '>';
                    echo '<div class="precio">';
                    echo '<p >$' . $precio_juegos . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </section>


</body>

</html>