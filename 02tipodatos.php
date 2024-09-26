<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tipos de datos</h2>
    <ul>
        <li>Booleanos</li>
        <li>Numérico entero</li>
        <li>En coma flotante</li>
        <li>Cadena de caracteres</li>
    </ul>
    <p>Datos compuestos</p>
    <ul>
        <li>Array</li>
        <li>Objetos</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>
    <p>Tipos especiales</p>
    <ul>
        <li>Resource</li>
        <li>Null</li>
    </ul>
    <h3>Booleanos</h3>
    <p>Inicialmente las constantes son True y False. Pero otros tipos de datos
        tienen conversión implícita al tipo booleano </p>
    <ul>
        <li>Numérico entero: 0 y -0 es False, cualquier otra cosa es True</li>
        <li>Númerico en coma flotante:0.0 y -0.0 es False, otro valor es True</li>
        <li>Un array con 0 elementos es False, con elemento es True</li>
        <li>El tipo especial NULL es false, otro valor distinto de NULL es true</li>
        <li>Una variable no definida es False</li>
    </ul>

    <?php
    $valor_booleano = True;
    $edad = 20;
    $mayor_edad = $edad >= 18;

    echo "El valor de la variable \$mayor_edad es $mayor_edad <br>";

    $dinero = 0;
    if ($dinero) {
        echo "Tienes dinero<br>";
    } else {
        echo "No tienes dinero<br>";
    }

    $mi_nombre = "";
    if ($mi_nombre) {
        echo "Tienes nombre<br>";
    } else {
        echo "No tienes nombre<br>";
    }



    ?>

    <h2>ENTEROS</h2>
    <p>son de 32 bits (dpeende de la plataforma)</p>

    <?php
    $numero_entero = 1234;
    echo "El número entero es $numero_entero <br>";

    $numero_negativo = -1234;
    echo "El número negativo es $numero_negativo <br>";

    //detecta que es octal porque tiene un 0 delante
    $numero_octal = 01234;
    echo "El número 01234 en octal es en decimal:" . $numero_octal . "<br>";

    //Puedo mostrar un numero entero en octal
    echo "El número 01234 en octal es en octal:" . decoct($numero_octal) . "<br>";

    //Puedo mostrar un numero entero en hexadecimal
    echo "El número 01234 en octal es en hexadecimal:" . dechex($numero_octal) . "<br>";

    //Puedo mostrar un numero entero en binario
    echo "El número 01234 en octal es en binario:" . decbin($numero_octal) . "<br>";


    ?>

    <h2>Números en punto flotante</h2>

    <p>El separador decimal es el punto y se pueden expresas números muy grandes o muy pequeños mediante la notación cienticia con base 10</p>
    <?php
    $pi = 3.14159;
    echo "El valor de pi es $pi <br>";
    echo "El pi con 2 decimales es " . round($pi, 2) . "<br>";
    $inf_int = 7.9e13;
    echo "El valor de inf_int es $inf_int <br>";

    $tamaño_virus = 0.2e-9;
    echo "El tamaño de un virus es $tamaño_virus <br>";
    ?>

    <h2>Cadenas de Caracteres</h2>
    <p>String o cadena es una serie de caracteres donde cada carácter equivale a un byte.
        Esto significa que PHP solo admite 256 caracteres y por ello ofrece soporte nativo a UTF-8
        . Un literal de tipo String se expresa de 4 formas:
    </p>

    <ul>
        <li>Comillas Simples</li>
        <li>Comillas dobles</li>
        <li>Nowdoc</li>
        <li>HereDoc</li>
    </ul>

    <?php

    //Una cadena de caracteres con comillas simples solo admite el carácter escape \' \\

    echo 'Esto es una cadena sencilla <br>';
    echo 'Puedo poner 
una cadena en varias líneas<br>, porque no acaba hasta que pongo el punto y coma <br>';
    // no se reconocen caracteres de escape excepto \' y \
    echo 'Esto es una cadena con una comilla simple \' <br>';
    echo 'Esto es una cadena con una barra invertida \\ <br>';

    //el salto de línea no se expande 
    echo 'Esto es una cadena con un salto \n de línea <br>';
    $mi_nombre = "Manolo";
    //no se pueen usar variables dentro de comillas simples
    echo 'Hola, $mi_nombre, como estas <br>';
    ?>
    <h2>COMILLAS DOBLES</h2>
    <P>Esta es la forma habitual de expresar cadenas de caracteres
        ya que expande los caracteres de escape y las variables
    </P>

    <?php
    //las cadenas en php no son objetos son primitivos
    $cadena="Esto es una cadena con comillas dobles <br>";
    echo "es una cadena un objeto?".is_object($cadena)."<br>";
    ?>

    <h3>HEREDOC</h3>
    <?php
    echo <<<HEREDOC
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$titulo - Ejemplo con Heredoc</title>
    </head>
    <body>
        <h3>Ejemplo con Heredoc</h3>
        <p>Este es un ejemplo de uso de heredoc, donde la variable \$titulo se interpreta como: <strong>$titulo</strong>.</p>
        <p>Es muy útil cuando necesitas insertar variables dentro de cadenas de texto largas o código HTML.</p>
    </body>
    </html>
    HEREDOC;

    
    ?>

    <h3>NOWDOC</h3>
    <?php 
    echo <<<'NOWDOC'
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP con Heredoc y Nowdoc - Ejemplo con Nowdoc</title>
    </head>
    <body>
        <h3>Ejemplo con Nowdoc</h3>
        <p>Este es un ejemplo de uso de nowdoc, donde la variable \$titulo NO se interpreta: <strong>$titulo</strong>.</p>
        <p>Aquí no se interpretan variables, lo que es útil si deseas trabajar con texto literal sin preocuparte por la evaluación de variables.</p>
    </body>
    </html>
    NOWDOC;
    ?>

    <h3>Conversión de tipos de datos</h3>
    <p>Hay dos conversiones: implícitas y explícitas. Las primeras ocurren cuando en 
        una expresión se mezclan tipos de datos y PHP convierte uno de ellos para que coincidan.
    </p>

    <?php
    $cadena="25";
    $numero=8;
    $booleano=True;
    $resultado = $cadena + $numero + $booleano;
    echo "El resultado de la suma es $resultado <br>";
    ?>
    <p><b>¡¡IMPORTANTE!! Cuando se hace una conversión implícita solo afecta al operado, pero no a la variable
        original. Si se quiere cambiar el tipo de una variable se debe hacer una conversión explícita
        </b></p>

    <?php
    $flotante=3.5;
    $resultado=$flotante + $resultado;
    echo "El resultado de la suma es $resultado <br>";

    $cadena = "25 marranos dan mucho provecho";
    $resultado= $numero + $cadena;
    echo "El resultado de la suma es $resultado <br>";
    ?>

    <p><b>Conversiones explicitas se conocen como casting o moldeo y se hacen precediendo la expresión 
        con el tipo de datos a convertir entre paréntesis
        </b></p>

    <?php
    //Si quiero convertir a entero -> (int)expresion
    //Si quiero convertir a flotante -> (float)expresion
    //Si quiero convertir a cadena -> (string)expresion

    echo "Conversiones a entero <br>";
    $valor_booleano = True;
    $valor_convertido = (int)$valor_booleano;
    echo "El valor booleano $valor_booleano convertido a entero es $valor_convertido <br>";
    $valor_float = 3.14159;
    $valor_convertido = (int)$valor_float;
    echo "El valor float $valor_float convertido a entero es $valor_convertido <br>";
    $valor_cadena = "25";
    $valor_convertido = (int)$valor_cadena;
    echo "El valor cadena $valor_cadena convertido a entero es $valor_convertido <br>";
?>


</body>

</html>