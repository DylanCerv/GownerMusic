
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GownerMusic</title>
    <link rel="stylesheet" href="<?= media()?>/style.css">
</head>
<body>
    

    <main class="main-registro">
        <div class="formulario-registro">
            <div class="cabecera">
                <img src="" alt="Logo">
                <h1>Unete a GownerMusic</h1>
            </div>
            <div class="cambio">
                <a href="?account=login" class="login">Iniciar Sesion</a>
                <!-- <a href="" class="registro">Resgistrarse</a> -->
                <hr>
            </div>
        </div>
        <form action="" method="post">
            <input type="text" class="usuario" name="usuario" id="usuario" placeholder="Nombre de Usuario" required>
            <input type="email" class="correo" name="email" id="email" placeholder="Correo electronico" required>
            <input type="email" class="correo" name="confirmar-correo" id="confirmar-correo" placeholder="Confirmar correo electronico" required>
            <input type="password" name="confirmar-password" id="confirmar-password" placeholder="Confirmar contraseña" required>
            <input type="password" name="confirmar-password" id="confirmar-password" placeholder="Confirmar contraseña" required>
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