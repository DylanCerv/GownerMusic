<?php


class Controllers{

    public function __construct(){
        $this->view = new Views();
        $this->loadModel();
    }

    public function loadModel(){
        $model = get_class($this)."Model";
        $modelFile = "models/$model.php";

        if (file_exists($modelFile)){
            require_once $modelFile;
            $this->instanciaModel = new $model();
        }
    }

}