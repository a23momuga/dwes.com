<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Elementos del lenguaje</h1>
    <?php



    ?>
    <h2>Entrada y salida </h2>
    <p>entrada de datos en php es con un formulario o con un enlace
        salida de datos en php es con echo, print, printf
    </p>

    <h3>Funcion echo</h3>
    <?php
    $nombre = "Juan";
    echo "La funcion echo se usa para imprimir texto en pantalla<br>";
    //no funciona con () si no con comillas dobles o simples al tener una sola variable
    echo "Hola, ", $nombre, " como estas ";

    $nombre = "Pedro";
    $apellido = "Perez";

    echo "<br>Hola, $nombre $apellido como estas";

    echo "<br>Hola, " . $nombre . " " . $apellido . "como estas";

    echo "<h4>Forma abreviada de echo: </h4>";

    $portatil = True;
    ?>

    <p>Mi nombre es <b><?= $nombre . " " . $apellido ?> </b></p>


    <!-- Uso muy habitual -->

    <input type="text" value="<?= $nombre . " " . $apellido ?>">
    <input type="checkbox" name="portatil" <?= $portatil ? 'checked' : '' ?>>

    <?php

    echo "<input type = 'text' value = '$nombre $apellido'>";

    ?>




    <h3>Funcion print</h3>
    <?php
    print "La funcion print \n se usa para imprimir texto en pantalla \n";
    print "mi nombre es $nombre $apellido";
    ?>
    <h3>Funcion printf</h3>
    <?php
    $pi = 3.14159;
    $radio = 5;
    $area = $pi * $radio * $radio;
    printf("<br>El area de un circulo de radio %d es %.2f", $radio, $area);
    ?>




</body>

</html>