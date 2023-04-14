<?php

/* 
FUNCIONES: 
 Una función és un conjunto de instrucciones agrupadas bajo un nombre concreto
 y que pueden reutilizarse solamente invoncando a la función tantas veces
 como queramos:

funtion nombreDeMiFunciojn(){
    // BLOQUE / CONJUNTO DE INSTRUCCIONES
}

nombreDeMiFuncion($mi_parametro);
nombreDeMiFuncion($mi_parametro);
 */

// Ejemplo 1
function muestraNombre(){
    echo "Paula Cordon <br/>";
    echo "Elisa Vieira <br/>";
    echo "Rai Cordon <br/>";
    echo "Ginger C.Blanch <br/>";
}
// Invocar función
/*
muestraNombre();
muestraNombre();
 */

// Ejemplo 2
function tabla($numero){
    echo "<h3> Tabla de multiplicar del número: $numero </h3>";
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}
/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "Introduce un numero en la url";
}
 */
/*
for($i=0;$i<=10;$i++){
    tabla($i);
}
 */

// Ejemplo 3

function calculador($numero1, $numero2, $negrita=false){
    
    // Conjunto de instrucciones a ejecutar
    $Suma = $numero1 + $numero2;
    $Resta = $numero1 - $numero2;
    $Multiplicacion = $numero1 * $numero2;
    $Division = $numero1 / $numero2;
    
    $cadena_texto = "";
    
    if($negrita){ // $negrita existe y es true
        $cadena_texto .= "<h1>";
    }
    
    $cadena_texto .= "Suma: $Suma <br/>";
    $cadena_texto .= "Suma: $Resta <br/>";
    $cadena_texto .= "Suma: $Multiplicacion <br/>";
    $cadena_texto .= "Suma: $Division <br/>";
    
    if($negrita){
        $cadena_texto .= "</h1>";
    }
    
    $cadena_texto .= "<hr/>";  
    
    return $cadena_texto;
}

echo calculador(10, 20, true);

// Ejemplo 4

function getNombre($nombre){
     $texto = "El nombre es: $nombre";
     return $texto;
}

function getApellidos($apellidos){
     $texto = "Los apellidos son: $apellidos";
     return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre) 
        ."<br>".
        getApellidos($apellidos);
            
    return $texto;
}

echo devuelveElNombre("Paula"," C. Blanch");