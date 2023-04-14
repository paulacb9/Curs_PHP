<?php

/* 
Ejercicio 2. Escribir un script en PHP que nos muestre por pantalla todos
los numero pares que hay del 1 al 100 
*/

for($numero=1; $numero<=100; $numero++){
    $result=$numero/2;
    // if ($numero%2 == 0)
    if(gettype($result) == 'integer'){
        echo $numero." ";
    }    
}

?>