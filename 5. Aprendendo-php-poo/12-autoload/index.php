<?php 
require_once 'autoload.php';
/*  
require_once './clases/categoria.php';
require_once './clases/entrada.php';
require_once './clases/usuario.php'; 
 */
// Para no cargar las clases manualmente una a una, utilizamos autolad.php


$usuario = new Usuario();
echo $usuario->nombre;
echo '<br>';

$categoria = new Categoria();
echo $categoria->descripcion;
echo '<br>';

$entrada = new Entrada();
echo $entrada->fecha;

