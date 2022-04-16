<?php

require_once 'models/dataBase.php';

#CONFIG
require_once 'config/config.php';
#HELPERS
require_once 'config/helps.php';
#AUTOLOAD
require_once 'libraries/core/autoload.php';
#AMBIENTE
// require_once 'libraries/core/environment.php';
#LOAD PARA CARGAR LOS CONTROLADORES
// require_once 'libraries/core/loadController.php';


if (!isset($_GET['cm'])){
    if (file_exists("controllers/Inicio.Controller.php")) {
        require_once "controllers/Inicio.Controller.php";
        $controller = new InicioController();
        call_user_func(array($controller, 'login'));//Llamamos un metodo del controlador
    }else {
        require_once "controllers/Errors.Controller.php";
        $errors = new ErrorsController();
        $errors->notFound();
    }
}else{
    $controller = $_GET['cm'];
    if (file_exists("controllers/$controller.Controller.php")){
        // $controller = ucwords($controller);
        require_once "controllers/$controller.Controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller();
        $action = isset($_GET['m']) ? $_GET['m'] : "Inicio";
        call_user_func(array($controller, $action));
    }else {
        require_once "controllers/Errors.Controller.php";
        $errors = new ErrorsController();
        $errors->notFound();
    }

}








