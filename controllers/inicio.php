<?php


class Inicio extends Controllers{

    public function __construct(){
        parent::__construct();
    }

    public function inicio($params){
        // echo "mensaje desde el controlador inicio, clase inicio, y metodo inicio";
        $this->view->getViews($this, 'inicio');
    }

    public function dolares($params){
        // echo "estos es mi dinero $params jsjsjs";
        $dolares = $this->instanciaModel->dinero($params);
    }



}