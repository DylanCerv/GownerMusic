<?php

require_once "Url.Controller.php";

class PerfilController extends URLsControllers{


    public function __construct(){
        $this->URLPerfil();
        $this->ModelPerfil = new Perfil();
    }


    public function validate_id_URL_DB($idUser){
        return $this->ModelPerfil->validate_id_URL($idUser);
    }

    public function getPostsPerfil_DB($idUser){
        return $this->ModelPerfil->getPostsPerfil($idUser);
    }
    

}