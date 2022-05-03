<?php

require_once "modules/welcome.php";
require_once "modules/getposts.php";

?>



<?php
    #HEAD
    require_once "views/template/head/head.php";
?>


<body>

    <?php require_once "views/template/nav/nav.php"; ?>

    <main class="main-inicio">
        <div class="contenedor-lado-izquierdo">
            <div class="contenedor-perfil-resumen">
                <div class="perfil">
                    <div class="perfil-posicion-absoluta"><!-- style="position: relative;"-->
                        <div class="cabecera-perfil"> <!--style="position: absolute;"-->
                            <img class="portada" src="https://media-exp1.licdn.com/dms/image/C4D16AQGKgCxFE9D5Xg/profile-displaybackgroundimage-shrink_200_800/0/1644900203321?e=1654732800&v=beta&t=plNZlVVT8oIjV8IEXffbO-3MQcvlEO1LEE_vb2p5UZY" alt="foto de la portada" class="foto-portada">
                            <a style="text-align: center;" href="#">
                                <img class="perfil" src = "img/perfilMio.jpg" alt="foto del perfil">
                                <h4><?= $_SESSION['username_user'] ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="linea-contenendor-perfil-resumen">
                <div class="descripcion">
                    <p><?= $_SESSION['description_perfil'] ?></p>
                </div>
                <hr class="linea-contenendor-favoritos">
                <a href="#" class="contenedor-favoritos">
                    <div class="favoritos">
                        <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                        <h5>Favoritos</h5>
                    </div>
                </a>
                <hr class="linea-contenendor-publicaciones-guardadas">
                <a href="#" class="contenedor-publicaciones-guardadas">
                    <div class="publicaciones-guardadas">
                        <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de publicaciones guardadas">
                        <h5>Publicaciones Guardadas</h5>
                    </div>
                </a>
            </div>
            <div class="contenedor-cosas-recientes">
                <div class="listas">
                    <h5 class="titulos">Reciente</h5>
                    <ul>
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li>    
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="linea-contenendor-grupos">
                <div class="listas">
                    <h5 class="titulos">Grupos</h5>
                    <ul>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>    
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="https://static-exp1.licdn.com/sc/h/2jgp12jkw69qzxpu3r0rvbw01" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenedor-centro">
            <div class="nuevo-post">
                <div class="barra-crear-publicacion">
                    <img src="img/perfilMio.jpg" alt="foto de perfil">
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
            </div>
            <hr>
            <?php
            foreach ($_SESSION['postsDATA'] as $datos){
            ?>
            <div class="publicacion">
                <div class="publicacion-perfil">
                    <a href="#">
                        <img src="img/perfilMio.jpg" alt="foto de perfil">
                        <h4>aaaaaaaaa</h4>
                    </a>
                </div>
                <div class="publicacion-contenido">
                    <p><?= $datos['content']?></p>
                    <img src="<?= $datos['media_dir'] ?>" alt="publicacion-documento">
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
        </div>
        <div class="contenedor-lado-derecho ">
            <div class="publicidad">
                <a href="http://#"><img src="#" alt="Imagen Publicidad"></a>
            </div>
            <div class="contenedor-chat">
                
            </div>
        </div>
    </main>

</body>
</html>