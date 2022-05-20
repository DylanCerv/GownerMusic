<?php

require_once "modules/perfil.php";

?>



<?php #HEAD
    require_once "views/template/head/head.php";
?>

<body>
    
    <?php require_once "views/template/nav/nav.php"; ?>

    <main class="perfil">
        
        <?php require_once "sec.views/perfil.resumen.php"; ?>
        <div class="contenedor-derecho">
            <div class="publicidad">
                <a href="http://#"><img src="#" alt="Imagen Publicidad"></a>
            </div>
            <div class="contenedor-chat">
                
            </div>
        </div>
    </main>

</body>
</html>