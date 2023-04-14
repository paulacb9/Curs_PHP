<?php

/* 
 Ejercicio5. Hacer un programa que muestre todos los numeros IMPARES entre dos numeros que
 nos lleguen por la url ()$_GET)
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if($numero1 == $numero2){
        echo "No hay numeros entre estos dos";   
    }else{
        /*while($numero1 <= $numero2){
            if($numero1%2 != 0){
                echo "$numero1 <br>";
            }
            $numero1++;
        }
        while($numero1 >= $numero2){
            if($numero1%2 != 0){
                echo "$numero1 <br>";
            }
            $numero1--;
        }*/
        for($i = $numero1; $i <= $numero2; $i++){
            if($i%2 != 0){
                echo "$i <br>";
            }
        }
        for($i = $numero1; $i >= $numero2; $i--){
            if($i%2 != 0){
                echo "$i <br>";
            }
        }
    }
}else{
    echo "<h2>Introduce correctamente los valores por la URL</h2>";
}