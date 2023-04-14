<?php

/* 
Variables locales: son las que se definen dentro de una función y no pueden ser
 * usadas fuera de la función, solo estan disponibles dentro. A no ser que hagamos
 * un return.
Variavles globales: son las que se declaran fuera de una función y estan disponibles
 * dentro y fuera de las funciones.
 */

// Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase; // declarar la varaible global para tener acceso dentro de la función
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
}

holaMundo();
//echo $year; // No se puede llamar esta variable

// Funciones variables

function buenasDias(){
    return "Hola, buenos dias ;)";
}

function buenasTarde(){
    return "Hey, que tal ha ido la comida?";
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas noches";
}

$horario = "Noches";

$miFuncion = "buenas".$horario; //para llamar funcion concatenada se tiene que hacer en una variable
echo $miFuncion();


?>