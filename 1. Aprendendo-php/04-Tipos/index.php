<?php
/*
 TIPOS DE DATOS:
 Entero (int / integer) = 99
 Coma flotante / decimales (float / double) = 3,45
 Cadenas (string) = "Hola yo soy un string"
 Boleano (bool) = true false
 Null
 Cleccion de datos o vectores (Array) = [x,y,z]
 Objetoa
 */

// PHP detecta la variable solo
$numero = 5;
$decimal = 27.9;
$texto = "Soy un texto \n $numero";
$verdadero = true;
$nula = null;

echo gettype($numero);
echo "<br>";
echo gettype($decimal);
echo "<br>";
echo gettype($texto);
echo "<br>";
echo gettype($verdadero). " (".$verdadero.")";
echo "<br>";
echo gettype($nula);
echo "<br>";
echo $texto;

// Debugear
$mi_nombre[] = "Paula Cordon Blanch";
$mi_nombre[] = "Paula Cordon Blanch";

//var_dump($mi_nombre);

?>

