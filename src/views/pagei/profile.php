<?php

require_once "src/modules/perfil.php";

#HEAD
    require_once "src/views/template/head/head.php";
?>

<body>
    
    <?php require_once "src/views/template/nav/nav.php"; ?>

    <main class="perfil">
        <?php require_once "src/sec.views/perfil.resumen.php"; ?>
        
        <div class="contenedor-derecho contenedor-lado-derecho">
            <?php require_once ("src/views/template/publicidad/publicidad.php") ?>
        </div>
    </main>

</body>
</html>