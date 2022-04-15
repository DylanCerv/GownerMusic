<?php


//Ruta del archivo del controlador
$controllerFile = "controllers/$controller.php";
//Comprobar si el archivo existe
if (file_exists($controllerFile)){
    require_once $controllerFile;
    $controller = new $controller();

    if (method_exists($controller, $method)){
        $controller->{$method}($params);
    }else{
        require_once "controllers/errors.php";
    }
}else{
    require_once "controllers/errors.php";
}