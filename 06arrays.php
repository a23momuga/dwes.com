<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>ARRAY</h1>
    <p>Un array es un conjunto de elementos que se referencian
        con el mismo nombre . A cada variable del array se le
        conoce como componente o elemento del array. Cada componente tiene
        asociado un índice que lo identifica.
    </p>
    En php los arrays son muy flexibles. Hay de 2 tipos: escalares y asociativos.
    Para acceder a un elemento se usa su clave con el operador[]. Si la clabe es un
    número entero mayor o igual a 0, se llama array escalar. Si la clave es una cadena
    de caracteres es un array asociativo.
    </p>
    <h2>Array Escalar</h2>
    <?php
    //Un array se puede definir de dos formas
    //1. Con la función array()
    $notas = array(5, 6, 7, 8, 9);
    //2. Con un literal
    $numeros = [2, 4, 1, 3, 9];

    //Si solo se indican los elementos del array, la clave comienza por 0 desde la izquierda
    echo "La primera nota es " . $notas[0] . "<br>";
    echo "La tercera nota es " . $notas[2] . "<br>";

    //Al definir el array podemos indicar los índices
    $alumnos = array(1 => "Juan", 2 => "Ana", 3 => "Luis", 4 => "Eva");
    //puedo definir índice pars algunos elementos y otros no
    $notas = array(1 => 5, 2 => 6, 3 => 7, 8, 9);

    foreach ($alumnos as $indice => $nombre) {
        echo "El alumno $nombre tiene el índice $indice <br>";
    }

    //Para añadir un elemento al final del array
    $alumnos[] = "Pedro";
    echo "El último alumno es " . $alumnos[5] . "<br>";
    ?>

    <h2>Arrays Asociativos</h2>
    <?php
    //Un array asociativo es un array cuyos índices son cadenas de caracteres
    $alumnos = array("Juan" => 5, "Ana" => 6, "Luis" => 7, "Eva" => 8);
    echo "La nota de Juan es " . $alumnos["Juan"] . "<br>";
    ?>

    <h2>Array mixto </h2>
    <?php
    //Un array mixto es un array que tiene índices numéricos y cadenas de caracteres
    $alumnos = array("Juan" => 5, 6, 7 => "Perez", "Eva" => 8);
    echo "La nota de Juan es " . $alumnos["Juan"] . "<br>";
    echo "El apellido de Perez es " . $alumnos[7] . "<br>";

    ?>

    <h2>ARRAYS MULTIDIMENSIONALES</h2>
    <p>Array multidimensional es un array cuyos elementos son a su vez arrays</p>
    </p>

    <?php
    $notas = array(
        array(5, 6, 7),
        array(6, 7, 8),
        array(7, 8, 9),
        array(8, 9, 10)
    );
    echo "La nota de la segunda asignatura del primer alumno es " . $notas[0][1] . "<br>";

    //los corchetes vacíos añaden un elemento al final del array
    $notas[][] = 9;

    echo "La nota de la tercera asignatura del cuarto alumno es " . $notas[4][0] . "<br>";

    $notas[3][] = 10;
    echo "La nota de la tercera asignatura del cuarto alumno es " . $notas[3][3] . "<br>";

    //Se accede por clave no por indice
    $numeros = [-1 => 1, 2, 3, 4, 5];
    echo "El último número es " . $numeros[-1] . "<br>";

    $coches = array(
        "Seat" => ["marca" => "Ibiza", "modelo" => "Del98"],
        "Renault" => ["marca" => "Clio", "modelo" => "Del2000"],
        "Ford" =>  ["marca " => "Focus", "modelo" => "Del2005"]
    );

    echo "El modelo del Seat es " . $coches["Seat"]["modelo"] . "<br>";
    echo $coches["Ford"]["modelo"] . "<br>";


    //Crea un array de un equipo de fútbol donde cada fila son las posiciones
    //donde juegan los jugadores con el conjunto de jugadores identificados por su dorsal

    //*********************HACER*****************

    //ARRAYS MULTIDIMENSIONALES

    $notas = [
        [
            [5, 6, 7, 1],
            [6, 7, 8, 4],
            [7, 8, 9, 8],
            [8, 9, 10, 9]
        ],
        [
            [5, 6, 7, 1],
            [6, 7, 8, 4],
            [7, 8, 9, 8],
            [8, 9, 10, 9]
        ],
        [
            [5, 6, 7, 1],
            [6, 7, 8, 4],
            [7, 8, 9, 8],
            [8, 9, 10, 9]
        ],
        [
            [5, 6, 7, 1],
            [6, 7, 8, 4],
            [7, 8, 9, 8],
            [8, 9, 10, 9]
        ]
    ];

    echo "La primera nota del 4 alumno es " . $notas[3][2][1] . "<br>";

    $notas = [
        'Juan' => [
            'T1' => ['Matemáticas' => 5, 'Lengua' => 6, 'Inglés' => 7],
            'T2' => ['Matemáticas' => 9, 'Lengua' => 0, 'Inglés' => 0],
            'T3' => ['Matemáticas' => 1, 'Lengua' => 5, 'Inglés' => 10],
        ],
        'María' => [
            'T1' => ['Matemáticas' => 10, 'Lengua' => 1, 'Inglés' => 0],
            'T2' => ['Matemáticas' => 2, 'Lengua' => 8, 'Inglés' => 9],
            'T3' => ['Matemáticas' => 4, 'Lengua' => 3, 'Inglés' => 10],
        ]
    ];

    echo "La nota de inglés de María en la segunda trimestre es " . $notas['María']['T2']['Inglés'] . "<br>";

    ?>

    <h2>Recorrer un Array</h2>

    <?php

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    //Recorrer un array con un bucle for (Para arrays escalares)
    for ($i = 0; $i < count($numeros); $i++) {
        echo "El número $numeros[$i] está en la posición $i <br>";
    }

    //Recorrer un array con un bucle foreach (Para cualquier tipo de array)
    //foreach ($array as [$clave =>] $valor){
    //}

    foreach ($numeros as $numero) {
        echo "El número es $numero <br>";
    }

    $alumnos = ["Juan", "Ana", "Luis", "Eva"];
    
    echo "<br>";
    foreach ($alumnos as $alumno) {
        echo "El alumno es $alumno <br>";
        
    }

    echo "<h3>Recorrido de arrays multidiminsionales</h3>";
    $notas = [
        'Juan' => [
            'T1' => ['Matemáticas' => 5, 'Lengua' => 6, 'Inglés' => 7],
            'T2' => ['Matemáticas' => 9, 'Lengua' => 0, 'Inglés' => 0],
            'T3' => ['Matemáticas' => 1, 'Lengua' => 5, 'Inglés' => 10],
        ],
        'María' => [
            'T1' => ['Matemáticas' => 10, 'Lengua' => 1, 'Inglés' => 0],
            'T2' => ['Matemáticas' => 2, 'Lengua' => 8, 'Inglés' => 9],
            'T3' => ['Matemáticas' => 4, 'Lengua' => 3, 'Inglés' => 10],
        ]
    ];

    // Recorrer un array multidimensional con un bucle foreach
    // foreach ($array as $clave => $valor){
    // }
    // $trimestres representa el array de los trimestres
    foreach ($notas as $alumno => $trimestres) {
        echo "Las notas de $alumno son: <br>";
        foreach ($trimestres as $trimestre => $asignaturas) {
            echo "En el trimestre $trimestre: <br>";
            foreach ($asignaturas as $asignatura => $nota) {
                echo "La nota de $asignatura es $nota <br>";
            }
        }
    }
    ?>
</body>

</html>