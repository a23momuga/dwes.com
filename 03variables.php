<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES</title>
</head>
<body>
    <h1>Variables</h1>

    <?php

    //Las variables en PHP se definen con el signo $
    $nombre_variable = "Valor de la variable";

    //Variables que no se han definido
    $resultado=$numero+25;
    echo "El valor de numero es $numero <br> y el resultado es $resultado <br>";

    $resultado= $sin_definir + 5.5;
    echo "El valor de sin_definir es $sin_definir <br> y el resultado es $resultado <br>";
    

    //Si la variable está en un contexto lógico su vslor 
    //lógico asume por defecto False

    

    ?>
    <h2>Análisis de Variables</h2>
    <h3>Análisis simple</h3>
    <?php
    //Consiste en introducir una variable en una cadena con " o heredoc
    //para incrustar su valor dentro de la cadena
    echo "El resultado es $resultado <br>";

    ?>

    <h3>Análisis complejo</h3>
    <?php
    //Consiste en introducir una variable en una cadena con {} para incrustar su valor dentro de la cadena
    $calle= "Calle de la Rosa";
    $numero=25;
    $poblacion="Madrid";
    $distrito_postal=28001;

    echo "La dirección es {$calle}, {$numero}th, {$poblacion}, {$distrito_postal} <br>";
    ?>

    <h2>Funciones para variables</h2>
    <?php
    //Funcion gettype
    echo "El tipo de datos de $resultado es ".gettype($resultado)."<br>";  
    echo "El tipo de datos de una expresión es ".gettype($numero+5.5)."<br>";

    //Funcion empty()
    //Devuelve True si la variable está vacía o no está definida y False en caso contrario
    // -Si es entero 0 o cadena "0" devuelve True
    // -Si es float 0.0 devuelve True
    // -Si es cadena vacía devuelve True
    // -Devuelve True si es null o False

    if (empty($numero)){
        echo "La variable numero está vacía <br>";
    }else{
        echo "La variable numero tiene un valor <br>";
    }

    $numero=NULL;
    if (empty($numero)){
        echo "La variable numero está vacía <br>";
    }else{
        echo "La variable numero tiene un valor <br>";
    }

    //Funcion isset()
    //Devuelve True si la variable está definida y False en caso contrario
    // -Devuelve True si es null o False
    if (isset($numero)){
        echo "La variable numero está definida <br>";
    }else{
        echo "La variable numero no está definida <br>";
    }

    /*
    Funciones que comprueban los tipos de datos
    -is_int()
    -is_float()
    -is_string()
    -is_bool()
    -is_array()
    -is_object()
    -is_null()
    */

    if (is_int($numero)){
        echo "La variable numero es un entero <br>";
    }else{
        echo "La variable numero no es un entero <br>";
    }

    if (is_float($numero)){
        echo "La variable numero es un flotante <br>";
    }else{
        echo "La variable numero no es un flotante <br>";
    }
    ?>

    <h2>Constantes</h2>
<p>una constante es un valor con nombre que no puede cambiar de valor en el programa
    .Se le asigna un valor en la declaración y permanece invariable. Se define con la función define()
</p>
    <?php
    define("PI",3.14159);
    define("PRECIO_BASE",1500);
    define("DIRECTORIO_SUBIDAS","/var/www/html/uploads");
    echo "El valor de PI es ".PI."<br>";
    $area_circulo=PI*5*5;
    echo "El área de un círculo de radio 5 es $area_circulo <br>";

    $path_arhcivo=DIRECTORIO_SUBIDAS."/foto.jpg";
    echo "La ruta del archivo es $path_arhcivo <br>";

    $precio_rebajado=PRECIO_BASE*0.9;
    echo "El precio rebajado es $precio_rebajado <br>";

    const IVA=0.21;
    $precio_iva=PRECIO_BASE*IVA;
    echo "El precio del IVA es $precio_iva <br>";

    //Constantes predefinidas
    echo "El script es ". __FILE__ . "<br> y la linea es ".__LINE__."<br>";
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