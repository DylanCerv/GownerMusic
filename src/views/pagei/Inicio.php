<?php

require_once "src/modules/welcome.php";
require_once "src/modules/inicio.getPosts.php";

    #HEAD
    require_once "src/views/template/head/head.php";
?>


<body>

    <?php require_once "src/views/template/nav/nav.php"; ?>

    <main class="main-inicio">
        <div class="contenedor-lado-izquierdo">
            <div class="contenedor-perfil-resumen">
                <div class="perfil">
                    <div class="perfil-posicion-absoluta"><!-- style="position: relative;"-->
                        <div class="cabecera-perfil"> <!--style="position: absolute;"-->
                            <?php require_once "src/sec.views/inicio.resumenPerfil.php"; ?>
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
                        <img src="assets/img/icons/favorito.png" alt="logo de favoritos">
                        <h5>Favoritos</h5>
                    </div>
                </a>
                <hr class="linea-contenendor-publicaciones-guardadas">
                <a href="#" class="contenedor-publicaciones-guardadas">
                    <div class="publicaciones-guardadas">
                        <img src="assets/img/icons/guardar.png" alt="logo de publicaciones guardadas">
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
                                <img src="assets/img/icons/reciente.png" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="assets/img/icons/reciente.png" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="assets/img/icons/reciente.png" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="assets/img/icons/reciente.png" alt="logo de favoritos">
                                <h5>Cosas Recientes</h5>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="lista-cosas">
                                <img src="assets/img/icons/reciente.png" alt="logo de favoritos">
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
                                <img src="assets/img/icons/grupo.png" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>    
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="assets/img/icons/grupo.png" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="assets/img/icons/grupo.png" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="assets/img/icons/grupo.png" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="lista-grupos">
                                <img src="assets/img/icons/grupo.png" alt="logo de favoritos">
                                <h5>Grupos</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenedor-centro">
            <div class="nuevo-post">
                <?php require_once "src/sec.views/inicio.barraCrearPublicacion.php"; ?>
            </div>
            <hr>

            <?php require_once "src/sec.views/inicio.publicaciones.php"; ?>

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