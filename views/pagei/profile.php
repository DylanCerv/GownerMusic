<?php

require_once "modules/perfil.php";

?>



<?php #HEAD
    require_once "views/template/head/head.php";
?>

<body>
    
    <?php require_once "views/template/nav/nav.php"; ?>

    <main class="perfil">
        <div class="contenedor-perfil">
            <div class="profile">
                <div class="contenedor-perfil-usuario">
                    <div class="fotos">
                        <img src="https://media-exp1.licdn.com/dms/image/C4D16AQGKgCxFE9D5Xg/profile-displaybackgroundimage-shrink_200_800/0/1644900203321?e=1654732800&v=beta&t=plNZlVVT8oIjV8IEXffbO-3MQcvlEO1LEE_vb2p5UZY" alt="foto-portada" class="foto-portada">
                        <img src="img/user_anonimo.jpg" alt="foto-perfil" class="foto-perfil">
                        <h3 class="nombre-usuario"><?= $_SESSION['username_user_perfil']?></h3>
                    </div>
                    <div class="descripcion-user">
                        <p> <?= $_SESSION['description_perfil'] ?> </p>
                    </div>
                </div>
                <hr>
                <div class="publicacion">
                    <div class="publicacion-perfil">
                        <a href="#">
                            <img src="img/user_anonimo.jpg" alt="foto de perfil">
                            <h4><?= $_SESSION['username_user_perfil']?></h4>
                        </a>
                    </div>
                    <div class="publicacion-contenido">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit inventore consectetur qui sint vitae odio. Nesciunt unde porro nihil, veritatis eveniet et voluptatibus quasi, molestiae qui debitis hic, illo ad.</p>
                        <img src="img/portada_anonimo.jpg" alt="publicacion-documento">
                    </div>
                </div>
            </div>
        </div>
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