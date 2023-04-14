<?php

/* 
Ejercicio 5. Crear un array con el contenido de la tabla:
ACCION  AVENTURA  DEPORTES
 GTA 5    ASSASINS    FIFA 19
 COD    CRASH       PES 19
 PUGB   POP         MOTO GP 19

Cada fila debe ir en un fichero separado (includes).    
 */ 

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUBG"),
    "AVENTURA" => array("Assassins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("Fifa 19", "PES 19", "Moto GP")
);
$categorias = array_keys($tabla);

?>

<table border='1'>
    <?php require_once './Ejercicio5/encabezado.php';?>
    <?php require_once './Ejercicio5/primera.php';?>
    <?php require_once './Ejercicio5/segunda.php';?>
    <?php require_once './Ejercicio5/tercera.php';?>
</table>