<?php

/* 
Ejercicio6. Imprimir por pantalla todas las tablas de multiplicar del 1 al 10 
*/

echo"<table border='1'>"; // Inicio de la table

echo "<tr>"; // inicio fila 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td><b>Tabla del $cabecera</b></td>";
    }
echo "</tr>"; // cierre fila 1 de celdas

echo "<tr>"; // inicio fila 2 de celdas
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
            for($x = 1; $x <= 10; $x++){
                echo "$i x $x = ".($i*$x)."<br>";
            }
        echo "</td>";
    }
echo "</tr>"; // cierre fila 2 de celdas

echo"</table>"; // fin de la table
