<?php

class UsuarioController{
    
    public function mostrarTodos() {
        // Cargando el modelo
        require_once 'models/usuario.php';
        
        // Ejecutando una lógica
        $usuario = new Usuario();    
        
        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');
        
        // Llamo a la vista, que tiene disponible todas las variables de encima
        require_once 'views/usuarios/mostrar-todos.php';
    }
    
    public function crear() {
        require_once 'views/usuarios/crear.php';
    }
}
