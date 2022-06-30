
<div class="container-img-resumen-perfil">
    <img class="portada" src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2021/09/mejor-aplicacion-fondos-pantalla-animados-llegaria-android-dentro-poco-2482649.jpg">
    
    
    <a style="text-align: center;" href="?cm=pagei&m=perfil&i=<?= $_SESSION['id_user']?>">
    <?php
        if ($_SESSION['img_perfil_perfil'] != ""){
    ?>
            <img class="perfil" src = "assets/img/perfil/<?= $_SESSION['img_perfil_perfil']; ?>" alt="foto del perfil">
    <?php
        }else{
    ?>
            <img class="perfil" src = "assets/img/perfil/user_anonimo.jpg" alt="foto del perfil">
    <?php
        }
    ?>
    </a>
</div>


<a style="text-align: center;" href="?cm=pagei&m=perfil&i=<?= $_SESSION['id_user']?>">
    <h4><?= $_SESSION['username_perfil'] ?></h4>
</a>