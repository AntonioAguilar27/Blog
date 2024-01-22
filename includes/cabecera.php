<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href= "./assets/css/style.css" />
</head>
<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- logo -->
        <div id="logo">
            <a href="index.php">
                Game-Review
            </a>
        </div>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php $categorias = conseguirCategorias($db);
                if(!empty($categorias)) :
                    while($categoria = mysqli_fetch_assoc($categorias)) : 
                ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                        </li>
                <?php 
                    endwhile; 
                endif;
                ?>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <div id="contenedor">