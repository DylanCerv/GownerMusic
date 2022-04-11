<?php


class Views{

    public function getViews($controller, $view){

        $controller = strtolower(get_class($controller)); //obtenemos la clase del controlador y colocamos el string que nos devuelve a minuscula todo
        if ($controller == "inicio"){
            $viewFile = "views/$controller/$view.php";
        }else{
            $viewFile = "views/$controller/$view.php";
        }
        require_once $viewFile;
        
    }

}