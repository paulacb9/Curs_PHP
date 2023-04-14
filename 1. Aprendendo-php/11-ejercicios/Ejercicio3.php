<?php

/* 
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
(un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
pd: Utilizar bucle While
 */
/*
$numero=0;
while($numero<=40){
    echo "El cuadrado de $numero es <b>".($numero*$numero)."</b><br>";
    $numero++;
}
*/

for($i=0;$i<=40;$i++){
    echo "El cuadrado de $i es <b>".($i*$i)."</b><br>";
}