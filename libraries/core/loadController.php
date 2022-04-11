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
        echo "El metodo no existe";
    }
}else{
    echo "Lo sentimos pero el controlador no existe, cree el controlador";
}