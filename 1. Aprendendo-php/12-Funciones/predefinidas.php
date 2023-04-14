<?php

// Debuggear
$nombre = "Paula C Blanch";
var_dump($nombre);
echo "<br>";

// Fechas
echo date('d-m-y')."<br>";
echo date('d-M-y')."<br>";
echo time()."<br>";
echo "<br>";

// Matematicas
echo "Raiz cuadrad de 10: ".sqrt(10)."<br>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40)."<br>";
echo "Numero pi: ".pi()."<br>";
echo "Redondear: ".round(7.81636, 2)."<br>";
echo "<br>";

// Más funciones generales
echo gettype($nombre);
echo "<br>";

// Detectar tipado
if(is_string($nombre)){
    echo "Esa variable es un string";
}
echo "<br>";
if(!is_float($nombre)){ // No es un float
    echo "Esta variable es un numero con decimales";
}
echo "<br>";

// Comprobar si existe una variable
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable NO existe";
}
echo "<br>";

// Limpiar espacios
$frase = "    mi contenido   ";
var_dump($frase); // tiene los espacios
var_dump(trim($frase)); // elimina los espacios

// Eliminar variables / indices
$year = 2020;
unset($year);

// Comprobar variable vacia
$texto = " ";
if(empty($texto)){
    echo "La varaible está vacia";
}else{
    echo "La variable TIENE CONTENIDO";
}
echo "<br>";
echo "<br>";

// Contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);
echo "<br>";

// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, 'vida'); // indica a que caracter comienza
echo "<br>";

// Remplazar palabras de un string
$frase = str_replace('vida', 'moto', $frase);
echo $frase."<br>";

// MAYUSCULAS y minusculas
echo strtoupper($frase); 
echo "<br>";
echo strtolower($frase);