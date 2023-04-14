<?php 

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;                
    }
    
    // Cuando detecta que no existe um metodo ejecuta el metodo __call
    public function __call($name, $argument){
        $prefix_metodo = substr($name, 0, 3);
        
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3);
            
            if(!isset($this->$nombre_metodo)){
            return "<br>El metodo 'get{$nombre_metodo}' no exites";
            }
            
            // $this ->nombre;
            return $this->$nombre_metodo;
        }
        
        return $nombre_metodo;
    }
}

$persona = new Persona("Paula", 30, "Girona");
echo $persona->getNombre();
echo "<br>".$persona->getEdad();
echo "<br>".$persona->getCiudad();
echo "<br>".$persona->getEmail();