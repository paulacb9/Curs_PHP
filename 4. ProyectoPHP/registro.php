<?php
if(isset($_POST)){
    
    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Iniciar sesión
    if(!isset($_SESSION)){
        session_start();
    }
    // Recoger los valores del formulario de registro       
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    
    // LO MISMO QUE PONER ESTO:
    /*  
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
        }else{
            $nombre = false;
        }
    */
    
    // Array de errores
    $errores = array();
    
    // Validar los datos antes de guardarlos en la base de datos
    // Validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "<i>El nombre no es válido</i>";
    }
    
    // Validar los apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "<i>Los apellidos no es válido</i>";
    }
    
    // Validar el email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "<i>El email no es válido</i>";
    }
    
    // Validar password
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "<i>La contraseña está vacía</i>";
    }
    
    //var_dump($errores);
    
    $guardar_usuario = false;
    
    if(count($errores) == 0){
        $guardar_usuario = true;
        
        // Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
        /*var_dump($password);
        var_dump($password_segura);
        var_dump(password_verify($password, $password_segura));        
        die();*/
        
        // Insertar usuario en la tabla Usuarios de la BBDD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);
            
        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
        }
        
    }else{
        $_SESSION['errores'] = $errores;
    }
}

header('Location: index.php');
