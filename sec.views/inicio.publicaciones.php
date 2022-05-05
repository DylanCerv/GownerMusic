<?php
foreach ($_SESSION['postsDATA'] as $datos){
        
?>
<div class="publicacion">
    <div class="publicacion-perfil">
        <a href="?cm=pagei&m=perfil&i=<?= $datos['id_user']?>">
            <?php
            if ($datos['img_perfil'] != ""){
            ?>
                <img src="<?= $datos['img_perfil']?>" alt="foto de perfil">
            <?php
            }else{
            ?>
                <img src="img/user_anonimo.jpg" alt="foto de perfil">
            <?php
            }
            ?>
            <h4><?= $datos['username_perfil']?></h4>
        </a>
    </div>
    <div class="publicacion-contenido">
        <p><?= $datos['content']?></p>

        <?php
        if ($datos['media_dir'] != ""){
        ?>
            <img src="<?= $datos['media_dir'] ?>" alt="publicacion-documento">
        <?php
        }
        ?>

    </div>
    <div class="publicacion-opciones">
        <a href="">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="publicacion-documento">
            <p>Like</p>
        </a>
        <!-- <a href="">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="publicacion-documento">
            <p>Compartir</p>
        </a>
        <a href="">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="publicacion-documento">
            <p>Guardar</p>
        </a> -->
    </div>
</div>
<?php
}
?>