<?php

#AMBIENTE
require_once 'libraries/core/environment.php';
#AUTOLOAD
require_once 'libraries/core/autoload.php';
#LOAD PARA CARGAR LOS CONTROLADORES




//Ruta del archivo del controlador
$controllerFile = "controllers/$controller.php";
//Comprobar si el archivo existe
if (file_exists($controllerFile)){
    require_once $controllerFile;
    $controller = new $controller();
    // echo "el controlador si existe";
    if (method_exists($controller, $method)){
        $controller->{$method}($params);
    }
}else{
    echo "Lo sentimos pero el controlador no existe, cree el controlador";
}





