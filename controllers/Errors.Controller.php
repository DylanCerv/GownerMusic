<?php


class ErrorsController{

    public function notFound(){
        require_once "views/errors/errors.php";
    }

}


$notFound = new ErrorsController();
$notFound->notFound();