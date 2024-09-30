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

    $numero/=5; // $numero=$numero/5

    echo "El valor de numero es $numero <br>";

    $numero%=5; // $numero=$numero%5

    echo "El valor de numero es $numero <br>";
?>

<h2>Operador Relacionales</h2>
<?php
/**
 *  == Igual
 * === Identico
 * !=, <> Diferente
 * !== No identico
 * < Menor que
 * > Mayor que
 * <= Menor o igual que
 * >= Mayor o igual que
 * <=> Comparación de tres vías (spaceship)
 */
 $numero1=5;
 $cadena="5";
$numero2=10;

$resultado = $numero1 == $numero2;

echo "El resultado de la comparación es ". (int)$resultado." <br>";

$resultado = $numero1 == $cadena;
echo " El resultado de la comparación es ". (int)$resultado." <br>";
//operador ===. es True si los valores son iguales y del mismo tipo
$resultado = $numero1 === $cadena;
echo " El resultado de la comparación es ". (int)$resultado." <br>";

$resultado = $numero1 != $numero2;
echo " El resultado de la comparación es ". (int)$resultado." <br>";

$resultado = $numero1 !== $cadena;
//operador !==. es True si los valores son diferentes o no son del mismo tipo
echo " El resultado de la comparación es ". (int)$resultado." <br>";

//nave espacial 
//devuelve -1 si el primer operando es menor que el segundo
//devuelve 0 si los dos operandos son iguales
//devuelve 1 si el primer operando es mayor que el segundo
//solo se puede usar con valores enteros y flotantes
// if ($numero1<$numero2){
//    elseif ($numero1==$numero2){
//    }else{}
$resultado = $numero1 <=> $numero2;
echo " El resultado de la comparación es ". $resultado." <br>";

// Compara cadenas según el valor ASCII de los caracteres
$nombre1="Zacarias";
$nombre2="adela";
$resultado = $nombre1 > $nombre2;

echo " El resultado de la comparación es ". (int)$resultado." <br>";

$nombre1="Zacarias";
$nombre2="zacarias";
$resultado = $nombre1 === strtolower($nombre2);

echo " El resultado de la comparación es ". (int)$resultado." <br>";
?>
<h2>Operadores Lógicos</h2> 
<?php
/**
 * &&, and
 * ||, or
 * !, not
 * xor
 * 
 */

 $n1=9;
 $n2=5;
 $n3=10;

 $resultado= $n1 == $n2 OR $n2 > $n3;
 $resultado= $n1 == $n2 AND $n2 > $n3;

 echo "El resultado es :". (int)$resultado."<br>";
?>

<h2>Expresiones, operadores y operandos</h2>
<p>una expresión es una combinación de operandos y operadores que arroja un $resultado
    . Tiene tipo de datos, que depende del tipo de datos de sus operandos y de la operación realizada.
    <br> Un operador es un símbolo que indica una operación a realizar y los operandos son los valores
    sobre los que se realiza la operación. 
    <br>Los operadores pueden ser: <br>
    Unarios: actúan sobre un solo operando
    Binarios: actúan sobre dos operandos
    Ternarios: actúan sobre tres operandos
    Un operando es una expresión en si misma, siendo la mas simple un literal o una variable, pero también puede ser un valor deevuelto 
    por una función o el resultado de otra expresión. <br>
    Las operaciones de una expresión no se ejecutan a la vez, sinno en orden según la precedencia y asociatividad de los operadores.
    esto puede alterar a la conveniencia.
</p>

<?php

//el operador de asignacion es =
$numero=5;
$resultado=$numero+5;
$sin_valor= NULL;

?>
<h3>Operadores aritméticos</h3>

<?php
/**
 * +Suma
 * -resta
 * *multiplicación
 * /división
 * %resto de la división
 * **potencia
 * ++incremento
 * --decremento
 * 
 * Unarios
 * +conversión a entero
 * - El opuesto
 */
$numero1=5;
$numero2=3;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;
$opuesto=-$numero1;
$resto=$numero1%$numero2;
$potencia=$numero1**$numero2;

echo "$suma $resta $multiplicacion $division $opuesto $resto $potencia <br>";

$numero3="35";
$numero4=+$numero3;
echo "El numero4 es tipo ".gettype($numero4)."<br>";


?>

</body>
</html>