<?php  
session_start();

if(isset($_POST['submit'])){

    // recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false ;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false ;
    $email = isset($_POST['email']) ? $_POST['email'] : false ;
    $password = isset($_POST['password']) ? $_POST['password'] : false ;


    // array errores 

    $errores = array();

    // validar los datos del formulario

    // VALIDAR NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre es invalido";
    }
    // VALIDAR APELLIDO
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellido'] = "El apellido es invalido";
    }
    // VALIDAR CORREO 

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email es invalido";
    }

    // VALIDAR PASSWORD 

    if(!empty($password)){
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "El password es invalido";
    }

    // registro 

    $guardar_usuario = false;
    if(count($errores) ==0){
        $guardar_usuario = true;
    } else {
          $_SESSION['errores'] = $errores;
          header('Location: index.php');
    }

}
?>