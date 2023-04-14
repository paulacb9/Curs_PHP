<?php
class Coche{
    
    // Atributos o propiedades (antes variables)
    
    // PUBLIC: Podemos aceder desde qualquier lugar, dentro de clase actual dentro de clases que hereden esta clase o fuera de la calse
    public $color;
    
    // PROTECTED: Podemos aceder desde la clase que los definie y desde clases que hereden esta clase
    protected $marca;
    
    // PRIVATE: Unicamente se puede aceder desde esta clase
    private $modelo;
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
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
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
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
    
    public function mostrarInformacion(Coche $miObjeto){
        
        if(is_object($miObjeto)){
            $informacion = "<h1>Información del coche </h1>";
            $informacion .="Color: ".$miObjeto->color;
            $informacion .="<br>Modelo: ".$miObjeto->modelo;
            $informacion .="<br>Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
    
} 

