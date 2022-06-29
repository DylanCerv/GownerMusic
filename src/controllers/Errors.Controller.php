<?php


class ErrorsController{

    public function notFound(){
        require_once "src/views/errors/errors.php";
    }

}


$notFound = new ErrorsController();
$notFound->notFound();