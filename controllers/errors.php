<?php


class Errors extends Controllers{

    public function __construct(){
        parent::__construct();
    }

    public function notFound(){
        $this->view->getViews($this, 'errors');
    }

}


$notFound = new Errors();
$notFound->notFound();