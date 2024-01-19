<?php

// iniciar la sesion y la conexion a la bd 

require_once 'includes/conexion.php';


// recoger datos del formulario

if(isset($_POST)){    // recoger datos del formulario
    $email =trim($_POST['email']);
    $password = $_POST['password'];

    // consulta para comprobar credenciales

    $sql = "SELECT * FROM usuarios WHERE email  = '$email'";
    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        // comprobar contraseña
      //  $verify  = password_verify($usuario['password'], $password);
        // var_dump($usuario['password']);  
        //$opciones = ['cost' => 12,];
         //$password = password_hash("123", PASSWORD_BCRYPT, $opciones);
         //$password2 = password_hash("123", PASSWORD_BCRYPT, $opciones);
       
        // var_dump($password);
        // var_dump(password_verify("123",'$2y$12$kvkEOcayUy3CgerHDagvO.rnMQ5cd1g1TW9vLTmpiuJb2CrmBmN4u'));
        // var_dump($verify);
        if(password_verify($password, $usuario['password'])){
            // utilizar una sesion para guardar los datos 
            $_SESSION['usuario'] = $usuario;

            if(isset($_SESSION['error_login'])){
               unset($_SESSION['error_login']);
            }
        } else {
            // si algo falla se envia una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
            
        }
    } else {
        var_dump("no entro");
        // mensaje error 
        $_SESSION['error_login'] = "Login incorrecto!!";
    }
}

// redireccion al index 

header('Location: index.php');