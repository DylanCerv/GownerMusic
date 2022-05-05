
<?php
    #HEAD
    require_once "views/template/head/head.php";
?>
<body>

    <?php require_once "views/template/nav/nav.php"; ?>

    <main class="post">
        <div class="formulario-post">
            <h2>Publicación</h2>
            <form class="envio-post" action="modules/uploadpost.php" method="post" enctype="multipart/form-data">
                <textarea name="mensaje-post" id="mensaje-post" cols="60" rows="10" placeholder="Description"></textarea>
                <input type="file" name="archivo" id="archivo">
                <button>Publicar</button>
            </form>
        </div>
    </main>

</body>
</html>