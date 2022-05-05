

<?php
    #HEAD
    require_once "views/template/head/head.php";
?>

<body>
    

    <main class="main-registro">
        <div class="formulario-registro">
            <div class="cabecera">
                <img src="img/logo.png" alt="Logo">
                <h1>Unete a GownerMusic</h1>
            </div>
            <div class="cambio">
                <a href="?cm=login&m=log" class="login">Iniciar Sesion</a>
                <!-- <a href="" class="registro">Resgistrarse</a> -->
                <hr>
            </div>
        </div>
        <form action="modules/singup.php" method="post">
            <input type="text" class="usuario" name="username" id="usuario" placeholder="Nombre de Usuario">
            <input type="email" class="correo" name="email" id="email" placeholder="Correo electronico">
            <input type="email" class="correo" name="v_email" id="v_email" placeholder="Confirmar correo electronico">
            <input type="password" name="password" id="password" placeholder="Confirmar contraseña">
            <input type="password" name="v_password" id="v_password" placeholder="Confirmar contraseña">
            <hr>
            <p>GownerMusic puede usar tu número de teléfono para llamarte o enviarte mensajes de texto con información sobre tu cuenta.</p>
            <p>Al hacer clic en Registrarse, indicas que has leído y aceptas los <a href="">Términos del servicio</a> y la <a href="">Pólitica de privacidad</a>, inluyendo la politica de <a href="">Uso de Cookies</a>.</p>
            <button>Registrarse</button>
        </form>
    </main>

    <footer>
        <div class="enlaces">
            <p>
                <a href="">Informacion</a>
                <a href="">Ayuda</a>
                <a href="">Privacidad</a>
                <a href="">Condiciones</a>
                <a href="">Cunetas destacadas</a>
                <a href="">Hashtags</a>
            </p>
            <p>Español &copy; 2022 from Gowner</p>
        </div>
    </footer>

</body>
</html>

