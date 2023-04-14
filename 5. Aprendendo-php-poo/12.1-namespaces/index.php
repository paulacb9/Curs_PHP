<?php 
require_once 'autoload.php';

// Espacios de nombres y paquetes

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }

    public function informacion1(){
        echo __METHOD__;
    }
}

// Objeto principal
$principal = new Principal();
$principal->informacion1();
echo '<br>';
// var_dump($principal->usuario);

// Objeto otro paquete
// $usuario = new PanelAdministrador\Usuario(); //Quando no haces 'use'
$usuario = new UsuarioAdmin();
$usuario->informacion();


//Ver lista de todos los metodos
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);


// Comprobar si una clase existe
$clase = @class_exists('PanelAdministrador\Usuario'); // @ esconde los warnings
if($clase){
    echo "<h1>La clase sí existe</h1>";
}else{
    // Autoload con 'include' para que salga
    echo "<h1>La clase no existe</h1>";
}