<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Estructuras de control</h1>
    <h2>Sentencias</h2>
    <p>Las sentencias simples acaban en ; , pudiendo haber más de una en la misma línea</p>

    <?php
    $numero3 = 3;
    echo "Hola";
    print " klk";
    ?>
    <p>Un bloque de sentencias es un conjunto de sentencias encerrados entre llaves. No
        suelen ir solas, sino formar parte de una estructura de control. Además, se pueden anidar.
    </p>

    <?php {
        $numero = 5;
        echo "El número es $numero <br>";
        $numero -= 2;
        echo " Ahora es $numero <br>";
    }
    ?>

    <h2>Estructuras de control simple</h2>
    <?php
    $numero = 1;
    //if (expresión) sentencia;
    if ($numero >= 4) echo "hola";
    if ($numero >= 4) {
        echo "hola";
    }
    if ($numero === 4 and $numero % 2 == 0)
        echo "El numero es igual a 4 y su resto al dividir por dos es 0 <br> "
    ?>
    <h2>Estructura</h2>
    <?php
    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    if (($n1 == 9 or $n2 < $n1) and $n3 > 10) {
        echo "El resultado es glonal es True <br>";
    } else {
        echo "El resultado es glonal es False <br>";
    }
    if ($n1 > 20 or $n3 < 15) echo "La condicion es True <br>";
    else echo "La condicion es False";

    $edad = 21;
    if ($edad > 18)
        echo "Puedes ver la peli <br>";
    else
        echo "No puedes ver la peli para mayores";

    $tipo_carnet = "C1";
    if ($edad > 18 and $tipo_carnet == "C1") {
        echo "Obtecion del carnet de camion <br>";
        echo "Tienes $edad años y al superar los 21 puedes obtener el carnet $tipo_carnet <br>";
    } else {
        echo "No cumplos los requisotos para el carnet $tipo_carnet";
        echo "Comprueba que tienes mas de 21 años <br>";
    }

    // Uso de codigo HTML en las estructuras de control
    if ($edad > 18 and $edad < 65) { ?>
        <h3>Servicios del gimnasio disponibles</h3>
        <ul>

            <li>Spinning</li>
            <li>Boxeo</li>
            <li>Zumba</li>
        </ul>

    <?php
    } else { ?>

        <h3>Servicios para jubilados o menore de 18</h3>
        <ul>
            <li>Taichi</li>
            <li>Pilates</li>
            <li>Yoga</li>
        </ul>
    <?php
    }
    if ($tipo_carnet == "C1")
        echo <<<CARNET_C1
<h2>Documentacion para obtener el carnet $tipo_carnet</h2>
<ul>
<li>FOtocopia carnet</li>
    
</ul>
CARNET_C1;


    ?>

    <h2>If else Anidado</h2>

    <?php

    $nota = 6.5;
    if ($nota >= 0 and $nota < 5)
        echo "Suspenso";
    elseif ($nota < 6)
        echo "Aprobado";
    elseif ($nota < 7)
        echo "Bien";
    elseif ($nota < 9)
        echo "Notable";
    elseif ($nota <= 10)
        echo "Sobresaliente";
    else "La nota no es correcta";


    //Estructura condicional multiples switch
    $nota = 7;
    switch ($nota) {
        case 1:
        case 2:
        case 3:
        case 4:
            echo "Suspenso";
            break;
        case 5:
            echo "Aprobado";
            break;
        case 6:
            echo "Bien";
            break;
        case 7:
        case 8:
            echo "Notable";
            break;
        case 9:
        case 19:
            echo "Sobresaliente";
            break;
        default:
            echo "La nota no es correcta";
    }

    ?>
    <h2>Expresion MATCH</h2>
    <?
    //Expresión match
    // A partir de PHP 8.0
    // Se puede usar para comparar una expresión con una serie de valores y ejecutar el código correspondiente al valor que coincida

    $calificacion = match ($nota) {
        0, 1, 2, 3, 4 => "Suspenso",
        5 => "Aprobado",
        6 => "Bien",
        7, 8 => "Notable",
        9, 10 => "Sobresaliente",
        default => "Nota errónea"
    };

    echo "<br> Con tu nota $nota tienes una calificación de $calificacion <br>"
    ?>
    <h2>OPERADOR TERNARIO</h2>

    <?php
    //Sintaxis
    // <condicion> ? <expresion1> : <expresion2>

    $nota = 6;
    $resultado = ($nota >= 5) ? "Aprobado" : "Suspenso";
    echo "Con una nota de $nota tienes un $resultado <br>";
    $con_beca = True;
    $nombre  = "Juan";
    ?>

    <form action="">
        <input type="text" name="nombre" size="30" value=<?= isset($nombre) ? $nombre : "" ?>> <br> </input>
        <input type="checkbox" <?= $con_beca ? "checked" : "" ?>>Beca</input><br>
        <button>Enviar</button>
    </form>


    <h2>Operador de fusión de NULL</h2>
    <?php

    //?? // Operador de fusión de NULL (Comprueba si una variable es NULL y si lo es devuelve un valor por defecto)

    $metodo = "POST";
    $segundo_metodo = "GET";
    $resultado = $metodo ?? $segundo_metodo;
    echo "El método de envío es $resultado <br>";


    //unset hace lo mismo que  //$metodo= NULL;
    unset($metodo);
    $segundo_metodo = "GET";
    $resultado = $metodo ?? $segundo_metodo;
    echo "El método de envío es $resultado <br>";

    unset($metodo);
    unset($segundo_metodo);
    $por_defecto = "PUT";

    $resultado = $metodo ?? $segundo_metodo ?? $por_defecto;
    echo "El método de envío es $resultado <br>";

    ?>
    <H2>Bucles</H2>
    <ul>
        <li>For con contador </li>
        <li>For para colecciones de datos</li>
        <li>While</li>
        <li>Do while</li>
        <li>Sentencias break y continue</li>
    </ul>
    <h3>Bucle for con contador</h3>
    <?php
    //Tabla de multiplicar del 4 
    for ($i = 1; $i <= 10; $i++) {
        echo "4 x $i = " . 4 * $i . "<br>";
    }

    //Varias expresiones en el inicio del contador
    //y en la parte del incremento
    echo "<h2>BUCLE CON VARIAS EXPRESIONES</h2>";
    for ($i = 1, $j = 1; $i <= 10; $i++, $j += 2) {
        echo "4 x $i = " . 4 * $i . "<br>";
        echo "5 x $j = " . 5 * $j . "<br>";
    }
    ?>
    <H2>BUCLE WHILE </H2>

    <?php

    //Sumar los números pares para que se generen aleatoriamente hasta que salga 0
    //while (condición) sentencia;

    $numero = rand(0, 10);
    $total = 0;
    while ($numero != 0) {
        if ($numero % 2 == 0) {
            $total += $numero;
            echo "Número: $numero<br>";
        }
        $numero = rand(0, 10);
    }
    echo "Total: $total <br>";
    ?>

    <h3>Do .. While</h3>
    <?php
    //do sentencia while (condición);

    do {
        $numero = rand(0, 10);
        echo "Número: $numero<br>";
    } while ($numero != 0);
    ?>
    <h3>Sentencias break y continue</h3>
    <?php
    //break; //Sale del bucle
    //continue; //Salta a la siguiente iteración

    do {
        $numero = rand(0, 10);
        if ($numero == 0) break;
        echo "Número: $numero<br>";
    } while (true);

    echo "Fin del bucle con break<br>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) continue;
        echo "Número: $i<br>";
    }
    echo "Fin del bucle con continue<br>";


    echo "<br><br><br>";

    //Genera 10 números aleatorios
    //Por cada uno genera 10 caracteres en minuscula aleatorios como ese número
    //Si alguno de los caracteres generados es z, se acaba y no se generan

    for ($i = 1; $i <= 10; $i++) {
        echo "Número: $i<br>";
        for ($j = 1; $j <= 10; $j++) {
            $letra = chr(rand(97, 122)); //chr convierte un número en un caracter ASCII
            echo "$letra ";
            if ($letra == "z") break 2; //al poner el 2 sale del bucle de las letras y del de los número
        }
        echo "<br>";
    }
    ?>

    <h3>SINTAXIS ALTERNATIVA A LAS ESTRUCTURAS DE CONTROL</h3>

    <?php
    $numero = rand(1, 100);
    if ($numero % 2 == 0):
        echo "El número $numero es par";
    else:
        echo "El número $numero es impar";
    endif;

    for ($i = 1; $i <= 10; $i++):
        echo "4 x $i = " . 4 * $i . "<br>";
    endfor;

    while ($numero != 0):
        $numero = rand(0, 10);
        echo "Número: $numero<br>";
    endwhile;

    ?>

</body>

</html>