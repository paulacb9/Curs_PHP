<?php

/* FOR
for(evariable contador, condición, actualizando contador){
    BLOQUE DE INSTRUCCIONES
}
*/

/*
$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
    echo "El resultado es: $resultado ";
}

echo "<h1>El resultado es: $resultado</h1>";
  */

// EJEMPLO tabla multiplicar

if(isset($_GET['numero'])){
    // Cambiar tipo de dato (castear)
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del nuemero $numero</h1>";

for($contador = 1;$contador <= 10; $contador++){
    
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}

?>
