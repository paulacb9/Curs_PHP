<?php
/* Interfaz es un contrato en el cual definimos que metodos y en que orden 
    van a estar en una clase */

  interface Ordenador{
      public function encender();
      public function apagar();
      public function reiniciar();
      public function desfregmentar();
      public function detectarUSB();      
}

class iMac implements Ordenador{
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function encender(){
        
    }
    public function apagar(){
        
    }
    public function reiniciar(){
        
    }
    public function desfregmentar(){
        
    }
    public function detectarUSB(){
        
    }
}

$maquintos = new iMac();
$maquintos->setModelo("Macbook PRO 2022");
echo $maquintos->getModelo();