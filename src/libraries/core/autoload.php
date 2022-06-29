<?php

//Comprueba el archivo de la clase y lo requiere si existe
function autoload($class){
    $classFile = "libraries/core/$class.php";
    if (file_exists($classFile)){
        require_once $classFile;
    }
}
//Auto carga la funcion 'autoload'
spl_autoload_register('autoload');

