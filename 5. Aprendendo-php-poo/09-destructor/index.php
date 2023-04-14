<?php 
// Destructores sirven para detectar cuando un objeto va a dejar de ejecutarse

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Paula C. Blanch";
        $this->email = "paulacoba@hotmail.com";
        echo "Creando del objeto <br>";  //No se suele imprimir cosas en el constructor, solo ahora por fines didacticos
    }
    
    public function __toString(){
        return "Hola, {$this->nombre}, esta registrado con {$this->email}";     
    }
    
    public function __destruct(){
        echo "<br>Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
echo "<br>".$usuario->email;
