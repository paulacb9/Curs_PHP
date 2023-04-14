<?php
require_once '../vendor/autoload.php';

$frutas = array("manzanas", "naranjas", "sandias");

\FB::log($frutas);

$nombres = array("ejecutivo" => "Paula", "empleado" => "Juan");

\FB::log($nombres);

echo "Hola Mundo !! ".$nombres['ejecutivo'];

\FB::log("Muestrame en consola");
