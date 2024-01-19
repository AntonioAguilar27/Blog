<?php

// iniciar la sesion y la conexion a la bd 

require_once 'includes/conexion.php';


// recoger datos del formulario

if(isset($_POST)){
    $email =trim($_POST['email']);
    $password = $_POST['password'];

    // consulta para comprobar credenciales

    $sql = "SELECT * FROM usuarios WHERE email  = '$email'";
    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        // comprobar contraseña
        $verify  = password_verify($password, $usuario['password']);

        if($verify){
            // utilizar una sesion para guardar los datos 
            $_SESSION['usuario'] = $usuario;
            
            if(isset($_SESSION['error_login'])){
                session_unset($_SESSION['error_login']);
            }
        } else {
            // si algo falla se envia una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
        }
    } else {
        // mensaje error 
        $_SESSION['error_login'] = "Login incorrecto!!";
    }
}

// redireccion al index 

header('Location: index.php');