<img class="portada" src="https://media-exp1.licdn.com/dms/image/C4D16AQGKgCxFE9D5Xg/profile-displaybackgroundimage-shrink_200_800/0/1644900203321?e=1654732800&v=beta&t=plNZlVVT8oIjV8IEXffbO-3MQcvlEO1LEE_vb2p5UZY" alt="foto de la portada" class="foto-portada">
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
        <h4><?= $_SESSION['username_perfil'] ?></h4>
</a>
