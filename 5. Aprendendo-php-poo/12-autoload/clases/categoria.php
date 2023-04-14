<?php  

class Categoria{
    public $nombre;
    public $descripcion;
    
    public function __construct(){
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las reviews a los videojuegos de accion";
    }
}
