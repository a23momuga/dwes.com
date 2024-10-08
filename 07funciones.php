<?php

/**
 * Conjunto de sentencias que se agrupan bajo un nombre y que se pueden reutilizar
 *  
 * Tipos: 
 * - Internas, integradas o predefinidas -> Las propias del lenguaje
 * - Métodos de clase -> Funciones que se definen dentro de una clase
 * - Definidas por el usuario -> Funciones que se definen por el programador
 * 
 * 
 * 3.1. Definición de funciones
 * 
 * -Se puede definir en cualquier parte del script
 * Tiene una cabecera y un cuerpo
 * - Sintaxis: 
 * function nombre_funcion(parametro1, parametro2, ..., parametroN) {
 *     sentencias
 * }
 * - Nombre: Identificador de la función sin $
 * - Parámetros: Variables que se pasan a la función
 * - Sentencias: Conjunto de instrucciones que se ejecutan al llamar a la función
 */

function area_triangulo($base, $altura)
{
    return ($base * $altura) / 2;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h1>Funciones</h1>
    <?php
    // Llamada a la función
    $base = 10;
    $altura = 5;
    $area = area_triangulo($base, $altura);
    echo "El área del triángulo de base $base y altura $altura es $area";

    //Paso por referencia
    //Al usar por referencia, se cambia el valor de la variable original
    //si no se usa & no cambia el valor de la variable original
    //En la llamada a la función usamos & antes del argumento.
    //En este paso, el argumento es obligatorio que sea una variable
    function area_triangulo2(&$base, &$altura)
    {
        $base = 20;
        $altura = 10;
        return ($base * $altura) / 2;
    }

    $base = 10;
    $altura = 5;
    $area = area_triangulo2($base, $altura);
    echo "<br>El área del triángulo de base $base y altura $altura es $area";

    // 3.3.2. Parámetros con nombre
    // En la invocación de la función se pueden pasar los argumentos con el nombre del parámetro
    // 

    function area_triangulo3($base, $altura)
    {
        return ($base * $altura) / 2;
    }
    //Paso de parametros con nombre, esto permite cambiar el orden de los parametros
    $area = area_triangulo3($altura = 7, $base = 9);

    echo "<br>El área del triángulo de base $base y altura $altura es $area";

    // 3.3.3. Parámetros con valor por defecto
    // Se pueden asignar valores por defecto a los parámetros (solo literales) ni variables ni expresiones
    // Se asignan en la cabecera de la función
    // Si se llama a la función sin pasar un valor, se toma el valor por defecto
    // Pueden ser arrays y null
    // Permite invocar la función sin esos parámetros, los ccuales adquieren como valor por defecto el 
    // valor asignado en la definición de la función
    // Si la función combina parámetros con valor por defecto y sin valor por defecto, los parámetros con valor por defecto
    // deben ir al final de la lista de parámetros, salvo que en la invocación se usen los nombres de los parámetros

    define("PI", 3.1416);
    function volumen_cilindro($radio, $altura = 10)
    {
        return PI * $radio * $radio * $altura;
    }


    //Parámetros con valor por defecto
    $volumen = volumen_cilindro(5);
    echo "<br>El volumen del cilindro de radio 5 y altura 10 es $volumen";
    $volumen = volumen_cilindro(5, 20);
    echo "<br>El volumen del cilindro de radio 5 y altura por defectos es $volumen";

echo "<br>";
    //Deifinir el tipo de dato de los parámetros
    function area_rectangulo(float $base, float $altura)
    {
        echo "Función area_rectangulo". gettype($base)."<br>";
        echo " Función area_rectangulo". gettype($altura)."<br>";
        return $base * $altura;
    }

    $area = area_rectangulo("8", 5);
    echo "<br>El área del rectángulo de base 8 y altura 5 es $area";


    function media_aritmetica(...$numeros){
        $suma=0;
        foreach($numeros as $numero){
            $suma += $numero;
        }

        return $suma / count($numeros);

        //func_num_args(); //comprueba todos los argumentos pasado a la función, (cuando hay un argumento es igual que count), 
        //pero cuando hay mas 1 no es igual que count

    };

    $media = media_aritmetica(2, 4, 6, 8, 10);
    echo "<br>La media aritmética de 2, 4, 6, 8 y 10 es $media";


    // 3.4. Valor de devolución
    /**
     * Como se devuelve mas de un valor? Con un array. Luego
     * se recoge con list() o con un array
     */

    //:array -> indica que el return devuelve un array
    function circulo_y_circunferencia($radio): array
    {
        echo "<br>";
        $resultado[]=PI * $radio * $radio;
        $resultado[]= 2 * PI * $radio;

        return $resultado;
    }

    //Devolucion de mas de un valor
    $circulo_y_circunferencia = circulo_y_circunferencia(5);
    echo "<br>El área del círculo de radio 5 es $circulo_y_circunferencia[0]";
    echo "<br>La circunferencia del círculo de radio 5 es $circulo_y_circunferencia[1]";


    //Obtenemos los valores devueltos en variables
    list($v1,$v2) = circulo_y_circunferencia(6);
    echo "<br>El área del círculo de radio 5 es $v1";
    echo "<br>La circunferencia del círculo de radio 5 es $v2";

    // ? -> indica que el valor devuelto puede ser null
    function area_rectangulo2(float $base, float $altura): ?float
    {
        if ($base <= 0 || $altura <= 0) {
            $area = null;
        }else{
            $area = $base * $altura;
        }
        return $area;
    }

    $area = area_rectangulo2(1, 5);
    echo $area ? "<br>El área del rectángulo de base 8 y altura 5 es $area" : "<br>Los valores de base y altura deben ser mayores que 0";

    /**
     * 3.5. Ámbito y visibilidad de una variable
     * - Ámbito: Fragmento del programa donde una variable existe
     * - Visibilidad: Capacidad de acceder a una variable desde cualquier parte del script
     */

     function suma(){
        //global permite acceder a variables globales
        //global $a, $b;
         //$resultado = $a + $b;
         $resultado = $GLOBALS['a'] + $GLOBALS['b'];
         return $resultado;
     }

        $a = 5;
        $b = 7;
        $resultado = suma();
        echo "<br>La suma de $a y $b es $resultado ";

    function contador_ejecuciones(){
        //static -> permite que la variable mantenga su valor entre llamadas a la función
        static $contador = 0;
        $contador++;
        

        echo "<br>Esta es la ejecución número $contador";
    }

    contador_ejecuciones();
    contador_ejecuciones();
    contador_ejecuciones();

    // 3.6. Recursividad
    // Una función se llama a sí misma
    // Se utiliza para resolver problemas que se pueden descomponer en subproblemas más simples
    // Se compone de dos partes: caso base y caso recursivo
    // Caso base: Condición que detiene la recursividad
    // Caso recursivo: Llamada a la función dentro de la función

    function factorial($n){
        
        if($n == 0){
            return 1;
        }else{
            return $n * factorial($n - 1);
        }
    }
    $numeros = [1, 2, 3, 4, 5,9];
    echo "<br>";
    
    foreach($numeros as $numero){
        echo "El factorial de $numero es ". factorial($numero)."<br>";
    }
    ?>
</body>

</html>