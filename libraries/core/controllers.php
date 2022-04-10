<?php


class Controllers{

    public $instanciaModel;




    public function __construct(){
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