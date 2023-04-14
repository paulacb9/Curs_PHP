<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Elisa Vieira";
        $this->email = "elisamiriam@hotmail.com";
    }
    
    public function informacion(){
        echo __NAMESPACE__;
    }
}

