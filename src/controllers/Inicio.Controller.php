<?php

require_once "Url.Controller.php";


class InicioController extends URLsControllers{

    public function __construct(){
        $this->URLInicio();
        $this->ModelInicio= new Inicio();
    }

    ### OBTENER PUBLICACION DE LA BASE DE DATOS

    public function getPosts_DB(){
        $this->ModelInicio->getPosts();
    }


}