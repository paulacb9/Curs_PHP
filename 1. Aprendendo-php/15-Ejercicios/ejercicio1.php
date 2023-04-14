<?php

/* 
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros
enteros y que haga lo siguiente:
- Recorrerlo y mostrarlo
- Ordenarlo y mostrarlo
- MOstrar su longitud
- Buscar algun elemento (buscar por el parametro que me llegue por la url)
 */

// FUNCIONES
function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $value) {
        $resultado .= $value." ";
    }
    return $resultado;
}

$numeros = [11, 8, 32, 8, 43, 64, 90, 21];

//Recorrer y mostrar
echo mostrarArray($numeros);
echo "<br>";

// Ordenarlo y mostrarlo
sort($numeros);
echo mostrarArray($numeros);
echo "<br>";

// Mostrar su longitud
echo count($numeros);
echo "<br>";

// Buscar algun elemento
if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
    $search = array_search($busqueda, $numeros);
    
    if(!empty($search)){
    echo "El numero sí que existe, y se encuentra en la posicion ".$search;
    }else{
        echo "El resultado no existe";
    }
}


