


<div class="contenedor-perfil">
    <div class="profile">
        <div class="contenedor-perfil-usuario">
            <div class="content-perfil">
                <div class="fotos-perfil">
                            <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2021/09/mejor-aplicacion-fondos-pantalla-animados-llegaria-android-dentro-poco-2482649.jpg" alt="foto-portada" class="foto-portada">
                    <?php
                        if ($_SESSION['img_perfil_perfil'] != ""){
                    ?>
                            <img src="assets/img/perfil/<?= $_SESSION['img_perfil_perfil']; ?>" alt="foto-perfil" class="foto-perfil">
                    <?php
                        }else{
                    ?>
                            <img src="assets/img/perfil/user_anonimo.jpg" alt="foto-perfil" class="foto-perfil">
                    <?php
                        }
                    ?>
                </div>
                <h3 class="nombre-usuario"><?= $_SESSION['username_perfil']?></h3>
            </div>
            <div class="descripcion-user">
                <p> <?= $_SESSION['description_perfil'] ?> </p>
            </div>
        </div>
        <hr>
        <?php require_once "src/sec.views/perfil.publicaciones.php"; ?>
    </div>
</div>