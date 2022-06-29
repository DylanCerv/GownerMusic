

<?php

    session_start();

    if (isset($_SESSION['id_user'])){
        header("Location: ?cm=pagei&m=home");
    }

    #HEAD
    require_once "src/views/template/head/head.php";
    
?>

<body class="body-login">

    <main class="main-page-login">
        <div class="main-login">
            <div class="imagen">
                <!-- <img src="" alt="Imagen de login"> -->
                
            </div>
            <div class="formulario">
                <div class="all-items-formulario">
                    <div class="contenedor-formulario-login">
                        <div class="tittle-branding">
                            <img src="assets\img\icons\logo.svg" alt="">
                            <h1>GownerMusic</h1>
                        </div>
                        <form class="formulario-login" method="post" action="src/modules/login.php">
                            <div class="container-imput">
                                <label for="username">Usuario o Email</label>
                                <input type="text" placeholder="Usuario o Correo electronico" name="usernameLogin" id="usernameLogin" >
                            </div>
                            <div class="container-imput">
                                <label for="password">Contraseña</label>
                                <input type="password" placeholder="Contraseña" name="passwordLogin" id="passwordLogin" ><!--required-->
                            </div>
                            <button>Iniciar Session</button>
                        </form>
                        <div class="boton-login-google">
                            <button><img src="assets/img/svg/googleIcon.svg" alt="Img Google"><p> Iniciar Sesion con Google</p></button>
                        </div>
                        <a href="" class="recuperar-contraseña">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="registro">
                        <p>¿No tienes una cuenta?
                            <a href="?cm=singup&m=register">REGISTRATE</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer">
            <div class="enlaces">
                <p>
                    <a href="">Informacion</a>
                    <a href="">Ayuda</a>
                    <a href="">Privacidad</a>
                    <a href="">Condiciones</a>
                    <a href="">Cuentas destacadas</a>
                    <a href="">Hashtags</a>
                </p>
                <p>Español &copy; 2022 by Dylan Espña (Gowner) <b><a id="link-portfolio" href=""> Protfolio</a></b></p>
            </div>
        </div>
    </main>

</body>
</html>