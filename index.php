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








if (!isset($_GET['account'])){
    require_once "controllers/Account.Controller.php";
    $controller = new AccountController();
    call_user_func(array($controller, 'login'));//Llamamos un metodo del controlador
}else{
    $controller = $_GET['account'];
    require_once "$controller.Controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;
    $action = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controller, $action));
}








