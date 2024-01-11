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
                Blog
            </a>
        </div>

        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">
        <!-- barra lateral --> 
        <aside id="sidebar">
            <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="entrar">
                    </form>
            </div>

            <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form action="registro.php" method="POST">

                        <label for="nombre">Nombre</label>
                        <input type="text" name="name">

                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido">

                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="registrar">
                    </form>
            </div>
        </aside>

        <!-- Caja principal -->

        <div id="">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>titulo de la entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa numquam itaque eos corrupti nisi cumque incidunt, excepturi tenetur. Consequatur consectetur blanditiis cupiditate voluptas dignissimos, optio perferendis esse laborum id sit.
                </p>
            </article>

            <article class="entrada">
                <h2>titulo de la entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa numquam itaque eos corrupti nisi cumque incidunt, excepturi tenetur. Consequatur consectetur blanditiis cupiditate voluptas dignissimos, optio perferendis esse laborum id sit.
                </p>
            </article>

            <article class="entrada">
                <h2>titulo de la entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa numquam itaque eos corrupti nisi cumque incidunt, excepturi tenetur. Consequatur consectetur blanditiis cupiditate voluptas dignissimos, optio perferendis esse laborum id sit.
                </p>
            </article>
        </div>
    </div>

    <!-- Footer -->
    <footer id="pie">
        <p>Desarrollado por Antonio Aguilar</p>
    </footer>
    
</body>
</html>
