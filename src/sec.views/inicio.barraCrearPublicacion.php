<div class="barra-crear-publicacion">
    <?php
        if ($_SESSION['img_perfil_perfil'] != ""){
    ?>
            <img src="assets/img/perfil/<?= $_SESSION['img_perfil_perfil']; ?>" alt="foto de perfil">
    <?php
        }else{
    ?>
            <img src="assets/img/perfil/user_anonimo.jpg" alt="foto de perfil">
    <?php
        }
    ?>

    <form class="posts" action="?cm=posts&m=new" method="post">
        <button class="crear-publicacion" name="NewPost">Crear publicacion</button>
    </form>
</div>
<!-- <div class="botones">
    <ul>
        <button class="publicar-foto">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de video">
            Foto
        </button>
        <button class="publicar-video">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de video">
            Videos
        </button>
        <button class="publicar-historia">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de video">
            Hitoria
        </button>
        <button class="publicar-articulo">
            <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de video">
            Escribir articulo
        </button>
    </ul>
</div> -->