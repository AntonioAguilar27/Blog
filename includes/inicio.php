<?php require_once '../includes/conexion.php'; ?>
<?php require_once '../includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../assets/css/style.css"/>
    <title>Login</title>
</head>
<body>
<div class="container">
            <div id="login" class="bloque">
                <div class="div-imagen-login">
                    <img src="../assets/img/acceso.png"" alt="img-login">
                </div>
                    <h3>Identificate</h3>
                    <?php if(isset($_SESSION['error_login'])) : ?>
                        <div class="alerta alerta-error">
                            <?=$_SESSION['error_login']; ?>
                        </div>
                <?php endif; ?>

                    <form action="../login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" require> 

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" require>

                        <input type="submit" value="entrar">
                    </form>
            </div>

            <div id="register" class="bloque">
                    <h3>Registrate</h3>
                        <!-- Mostrar errores -->
                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                    <?= $_SESSION['completado']?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-exito">
                    <?= $_SESSION['errores']['general']?>
                    </div>   
                    <?php elseif(isset($_SESSION['errores']['duplicado'])): ?>
                    <div class="alerta alerta-exito">
                    <?= $_SESSION['errores']['duplicado']?>
                    </div>       
                    <?php endif; ?>
                    <form action="../registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>

                        <label for="apellidos">Apellido</label>
                        <input type="text" name="apellidos">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ?>

                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>

                        <input type="submit" value="registrar"  name="submit">
                    </form>
                    <?php borrarErrores(); ?> 
            </div>
</div>
</body>
</html>