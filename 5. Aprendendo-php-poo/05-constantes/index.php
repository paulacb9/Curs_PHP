<?php

class Usuario{
    
    const URL_COMPLETA = "http://localhost";    // nivel de clase
    public $email;                              // nivel de objeto
    public $password;
    
    public function getEmail() {
        self::URL_COMPLETA;         // modificando una propiedad (en este caso constante) a nivel de clase global
        return $this->email;        // modificando una propiedad a nivel de objeto
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;    //acceder con :: y no con la flecha
var_dump($usuario);

echo Usuario::URL_COMPLETA;