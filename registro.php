<?php  

if(isset($_POST['submit'])){

    require_once 'includes/conexion.php';
    session_start();
    // recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false ;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false ;
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
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
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
    $password = '';
    if(count($errores) ==0){
        $guardar_usuario = true;

        // cifrar la contraseña
        $opciones = ['cost' => 12,];
        $password_segura= password_hash($password, PASSWORD_BCRYPT, $opciones)."\n";

        // INSERTAR USUARIO EN LA TABLA USUARIOS
        $sql = "INSERT INTO  usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());"; 
        $guardar = mysqli_query($db, $sql);

        if ($guardar){
            $_SESSION['completado'] = "El registro fue exitoso";
        } else {
            $_SESSION['errores']['general'] = "fallo al registrar";
        }
    } else {
          $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');
?>