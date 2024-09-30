<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Asignación aumentada</h2>

<?php
    /**
     * Operadores de asignación aumentada
     * ++ incremento
     * -- decremento
     * +=, -=, *=, /=, %=, **=
     * 
     */

    $numero=4;
    $numero++; //5
    echo "El valor de numero es $numero <br>";

    ++$numero; //6
    echo "El valor de numero es $numero <br>";

    $numero = 10;
    $resultado = $numero ++ *2; //primero se hace el producto y luego se incrementa
    echo "El valor de resultado es $resultado y el de numero es $numero <br>";

    $numero = 10;
    $resultado = ++$numero *2; //primero se incrementa y luego se hace el producto
    echo "El valor de resultado es $resultado y el de numero es $numero <br>";

    $numero+=5; // $numero=$numero+5
    echo "El valor de numero es $numero <br>";

    $numero-=5; // $numero=$numero-5
    echo "El valor de numero es $numero <br>";

    $numero*=5; // $numero=$numero*5

    echo "El valor de numero es $numero <br>";
?>
</body>
</html>