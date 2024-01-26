
<aside id="sidebar">

                    <?php if(isset($_SESSION['usuario'])) : ?>
                        <div id="usuario-logueado" class="bloque">
                            <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
                            <!-- botones -->
                            <a href="#" class="boton boton-verde">Crear entrada</a>
                            <a href="crear-categoria.php" class="boton">Crear categoria</a>
                            <a href="#" class="boton boton-naranja">Mis datos</a>
                            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a>
                        </div>
                    <?php endif; ?>
                    
                <?php if(!isset($_SESSION['usuario'])) : ?>
                    
                <?php endif; ?>
        </aside>