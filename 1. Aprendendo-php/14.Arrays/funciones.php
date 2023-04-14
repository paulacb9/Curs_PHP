<?php

$cantantes = ['2pac','Drake','Lady Gaga','Avicci'];
$numeros = [1,5,6,8,1,2];

// Ordena orden alfabetico 
asort($cantantes);
var_dump($cantantes);

// Ordena orden alfabetico inverso
arsort($cantantes); 
var_dump($cantantes);

// Ordena orden alfabetico y numero
sort($cantantes);
sort($numeros); 
var_dump($cantantes);
var_dump($numeros);

// Añadir elementos array
$cantantes[] = "Natos";
array_push($cantantes, "Wao");
var_dump($cantantes);

// Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

// Aleatroio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
$reverso = array_reverse($numeros);
var_dump($reverso);

// Buscar dentro de un array
$resultado = array_search('Lady Gaga', $cantantes);
var_dump($resultado);

// Contar numero de elementos
echo count($cantantes)."<br>";
echo sizeof($cantantes);