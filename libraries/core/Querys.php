<?php


class Querys extends Conection{

    public $conexionBD;

    public function __construct(){
        $this->conexionBD = new Conection();
        $this->conexionBD->conection();
    }

    public function insert(){

    }

    public function update(){

    }

    public function show(){

    }

    public function delete(){

    }
}