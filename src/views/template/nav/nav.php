<header class="header-inicio">
        <div class="contenedor-menu">
            <div class="logo-nav">
                <img src="assets\img\icons\logo.svg" alt="">
            </div>
            <div class="buscador">
                <input type="search" name="buscador" id="" placeholder="Buscador">
                <img src="assets/img/icons/lupa.png" alt="lupa del buscador">
            </div>
            <div class="menu">
                <nav>
                    <a href="?cm=pagei&m=home" id="Inicio">Inicio</a>
                    <a href="?cm=pagei&m=perfil&i=<?= $_SESSION['id_user'] ?>" id="Perfil">Perfil</a>
                    <a href="#" id="Contactos">Contactos</a>
                    <a href="#" id="Mensajes">Mensajes</a>
                    <a href="#" id="Notificaciones">Notificaciones</a>
                    <a href="?cm=sesion&m=cerrar" id="Cerrar">Cerrar Session</a>
                </nav>
            </div>
        </div>
</header>