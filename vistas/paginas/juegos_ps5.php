<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Juegos PS5</h1>

    <section class="prodSection">

        <?php
        
        const JUEGOS_PS5 = array("harry-potter", "demon-souls", "gt7", "returnal", "sonic", "spiderman-2", "uncharted");

        $juegos_de = "ps5";
        $precio_juegos = 60000;
        $ruta_juegos = "./public/img/juegosPS5/";
        $juegos = JUEGOS_PS5;

    
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