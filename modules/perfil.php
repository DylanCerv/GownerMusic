<?php


require_once "controllers/Perfil.Controller.php";


$controller = new PerfilController();


$idUser = $_GET['i'];

if ($controller->validate_id_URL_DB($idUser) === FALSE){
    header( "LOCATION: ?cm=pagei&m=home");
}





