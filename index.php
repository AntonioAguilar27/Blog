<?php require_once 'includes/cabecera.php' ;?>
        <!-- barra lateral --> 
<?php require_once 'includes/lateral.php' ;?>
        <!-- Caja principal -->

<div id="principal">
        <h1>Ultimas entradas</h1>

        <?php
            $entradas = conseguirUltimasEntradas($db);
            if (!empty($entradas)) :
                while($entrada = mysqli_fetch_assoc($entradas)) :
        ?>
            <article class="entrada">
                <!-- <?php var_dump($entrada);?> -->
                <h2><?=$entrada['titulo']?></h2>
                    <p>
                        <?=substr($entrada['descripcion'],0,255). "..."?>
                    </p>
            </article>

        <?php 
                endwhile;
            endif;
        ?>
        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
</div>

    <!-- Footer -->
<?php require_once 'includes/pie.php' ;?>
    
</body>
</html>
