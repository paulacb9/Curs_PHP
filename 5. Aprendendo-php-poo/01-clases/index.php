<?php
// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase (molde para crear más objetos de tipo coche con caracteristicas
// parecidas
class Coche{
    
    // Atributos o propiedades (antes variables)
    public $color = "Rojo";
    public $modelo = "Ferrari";
    public $marca = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    // Métodos, son acciopnes que hace el objeto (antes funciones)
    public function getColor(){
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color; 
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelociad(){
        return $this->velocidad;
    }
} // fin definicion de la clase

// Crear un objeto / Instanciar la clase (objeto = new clase)
$coche = new Coche();

// Usar los metodos
$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelociad()." km/h <br>";

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);