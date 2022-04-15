<?php


class Iniciosingup extends Controllers{

    public function __construct(){
        parent::__construct();
    }

    public function iniciosingup($params){
        $this->view->getViews($this, 'iniciosingup');
    }

    

}