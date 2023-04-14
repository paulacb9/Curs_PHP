<?php

/* 
Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje
segun el tipo de variable que sea
 */

$matriz = array("hola mindo", 88);
$texto = "Master en php";
$numero = 29;
$verdadero = true;

if(is_array($matriz)){
    echo "<h1>El array es un array</h1>";
}
if(is_string($texto)){
    echo "<h1>$texto</h1>";
}
if(is_integer($numero)){
    echo "<h1>$numero</h1>";
}
if(is_bool($verdadero)){
    echo "<h1>$verdadero</h1>";
}