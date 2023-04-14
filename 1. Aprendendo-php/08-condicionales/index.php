<?php

/*
// CONDICIONALES IF
  
 if(condicion){
    instrucciones;
 }
 else{
    otras instrucciones;
 }

// OPERADORES DE COMPARACIÓN
    == igual
    === identico
    != diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que

// OPERADORES LOGICOS
    && AND Y
    || OR O
    ! NOT NO
    and, or
 
*/

// EJEMPLO 1
$color = "verde";

if($color == "rojo"){
    echo "EL COLOR ES ROJO";
}else{
    echo "El color NO es rojo";
}
echo "<br>";

// EJEMPLO 2
$year = 2022;
if($year == 2022){ 
    echo "Estamos en 2022";
}else{
    echo "No estamos en 2022";
}
echo "<br>";

//EJEMPLO 3
$nombre="Paula CB";
$ciudad = "Girona";
$continente = "Asia";
$edad=29;
$mayor_edad=18;

if($edad >= $mayor_edad){
    echo "$nombre es mayor de edad. ";
    if($continente == "Europa"){
        echo "Y es de $ciudad";
    }    else{
        echo "No es europeo";
    }
}else{
    echo "$nombre NO es mayor de edad";
}
echo "<hr>";

// EJEMPLO 4
$dia=2;

/*if($dia == 1){
    echo "Es Lunes";
}else{
    if($dia == 2){
        echo "Es Martes";
    }else{
        if($dia == 3){
            echo "Es Miercoles";
        }else{
            if($dia == 4){
                echo "Es Jueves";
            }
        }
    }
}*/

if($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "Es Martes";
}elseif($dia == 3){
    echo "Es Miercoles";
}elseif($dia == 4){
    echo "Es Jueves";
}elseif ($dia == 5) {
    echo "Es Viernes";
}
echo "<hr>";

// SWITCH
$dia= 5;

switch ($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "FIN DE SEMANA";
        break;
}
echo "<hr>";

// EJEMPLO 5
$edad1=18;
$edad2=64;
$edad_oficial=20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar, tiene $edad_oficial años";
}else{
    echo "NO esta en edad de trabajar, tiene $edad_oficial años";
}
echo "<br>";

$pais="Francia";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais se habla español";
}else{
    echo "no se habla español";
}

// GOTO
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
    echo "<h2> Me he saltado 4 echos </h2>";

?>
