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
    $edad= 20;
    $mayor_edad = $edad >= 18;

    echo "El valor de la variable \$mayor_edad es $mayor_edad <br>";



    ?>
</body>
</html>