<?php

// print_r($_GET['url']);


/**************************************************************/
#COMPROBAR SI LA VARIABLE GET NO ESA VACIA
/**************************************************************/

if(empty($_GET['url'])){
    $url = 'inicio/inicio';
    // var_dump($_GET['url']);
}else{
    $url = $_GET['url'];
    // var_dump($_GET['url']);
}

/**************************************************************/
#CAMBIAR EL STRING DE LA VARIABLE $url = $_GET['url'] A ARRAY
/**************************************************************/

$arrayUrl = explode('/', $url);
// var_dump($arrayUrl);
$controller = $arrayUrl[0];
$method = $arrayUrl[0];
$params = "";

if(!empty($arrayUrl[1])){
    $method = $arrayUrl[1];
}

/**************************************************************/
#OBTENEMOS DEL ARRAY LOS PARAMETROS 'params'
/**************************************************************/

if (!empty($arrayUrl[2])){
    for ($i=2; $i < count($arrayUrl) ; $i++) { 
        $params .= $arrayUrl[$i].",";
    }
    $params = trim($params, ",");
    // $params = substr($params, 0, -1);//eliminamos el ultimo caracter el string
}

// var_dump("controlador: ".$controller); echo '<br>';
// var_dump("metodo: ".$method); echo '<br>';
// var_dump("parametros: ".$params); echo '<br>';