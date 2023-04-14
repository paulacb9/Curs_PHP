<?php
require_once 'coche.php';

$coche = new Coche("Amerillo", "Renault", "Clio", "150", "200", "5");
$coche1 = new Coche("Verde", "Seat", "Panda", "150", "200", "5");
$coche2 = new Coche("Azul", "Citroen", "Xara", "150", "200", "5");
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", "150", "200", "5");

$coche->color = "Rosa";
// $coche->marca = "Audi"; NO FUNCIONA PORQUE ES PROTEGIDA 
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche1);
// echo $coche->mostrarInformacion("Hola mundo"); - No funciona si defines la funcion (Coche $miObjeto)

//var_dump($coche->modelo); NO FUNCIONA PORQUE ES PRIVADA
//var_dump($coche->getModelo());

//var_dump($coche);
////var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);