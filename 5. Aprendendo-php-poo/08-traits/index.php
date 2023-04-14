<?php
// Utilizar el trair cuando no queremos utilizar la herencia 

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class VideoJuegos{
    public $nombre;
    public $ano;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Paula C. Blanch";
$persona->mostrarNombre();

$videjuego = new VideoJuegos();
$videjuego->nombre = "Call of Duty";
$videjuego->mostrarNombre();


