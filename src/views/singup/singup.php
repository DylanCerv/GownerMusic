<?php
    #HEAD
    require_once "src/views/template/head/head.php";
?>

<body>
    <main class="main-page-registro">
        <div class="main-registro">

            <div class="formulario-registro">
                <div class="cabecera">
                    <img src="assets\img\icons\logo.svg" alt="Logo">
                    <h1>Unete a GownerMusic</h1>
                </div>
                <div class="cambio">
                    <a href="?cm=login&m=log" class="login">Iniciar Sesion</a>
                    <!-- <a href="" class="registro">Resgistrarse</a> -->
                    <hr>
                </div>
            </div>
            <form class="inputs-registro" action="src/modules/singup.php" method="post">
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" class="usuario" name="username" id="usuario" placeholder="Nombre de Usuario">
    
                <label for="email">Correo electronico</label>
                <input type="email" class="correo" name="email" id="email" placeholder="Correo electronico">
    
                <label for="v_email">Confirmar correo electronico</label>
                <input type="email" class="correo" name="v_email" id="v_email" placeholder="Confirmar correo electronico">
    
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña">
    
                <label for="v_password">Confirmar contraseña</label>
                <input type="password" name="v_password" id="v_password" placeholder="Confirmar contraseña">
                <hr>
                <div class="teminos-registro">
                    <p>GownerMusic puede usar tu número de teléfono para llamarte o enviarte mensajes de texto con información sobre tu cuenta.</p>
                    <p>Al hacer clic en Registrarse, indicas que has leído y aceptas los <a href="">Términos del servicio</a> y la <a href="">Pólitica de privacidad</a>, inluyendo la politica de <a href="">Uso de Cookies</a>.</p>
                </div>
                <button>Registrarse</button>
            </form>
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

