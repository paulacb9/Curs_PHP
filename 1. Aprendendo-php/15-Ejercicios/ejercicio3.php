<?php

/* 
 Ejercicio 3. Programa que compruebe si una variable esta vacia y si esta vacia
 rellenarla con texto en minúscula y mostrarlo en mayusculas y negrita.
 */

$texto = "";

if(empty($texto)){
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMay = strtoupper($texto);
    echo "<b>$textoMay</b>";
}else{
    echo "La variable tiene este contenido dentro: ".$texto;
}
