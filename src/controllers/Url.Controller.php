<?php

class URLsControllers{


    public function URLRegister(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'singup' && $_GET['m'] == 'register'){
                require_once "src/models/singup.php";
            }
        }else{
            require_once "../src/models/singup.php";
        }
    }

    public function URLLogin(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'login' && $_GET['m'] == 'log'){
                require_once "src/models/login.php";
            }
        }else{
            $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $urlArray = explode('/',$url);
            foreach ($urlArray as $valores) {
                if ($valores == 'modules') {
                    $modules = $valores;
                }
                if ($valores == 'login.php') {
                    $login_php = $valores;
                }
            }
            if(isset($modules) && isset($login_php)){
                require_once "../models/login.php";
            }else{
                require_once "src/models/login.php";
            }
        }
    }

    public function URLPerfil(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'pagei' && $_GET['m'] == 'perfil'){
                require_once "src/models/perfil.php";
            }
        }else{
            require_once "../src/models/login.php";
        }
    }


    public function URLPosts(){
        if (empty($_GET)){
            require_once "../src/models/posts.php";
        }else{
            if ($_GET['cm'] == 'posts' && $_GET['m'] == 'new'){
                require_once "src/models/posts.php";
            }
            if ($_GET['cm'] == 'pagei' && $_GET['m'] == 'home'){
                require_once "src/models/posts.php";
            }
        }
    }

    public function URLInicio(){
        if (empty($_GET)){
            require_once "../src/models/inicio.php";
        }else{
            if ($_GET['cm'] == 'pagei' && $_GET['m'] == 'home'){
                require_once "src/models/inicio.php";
            }
        }
    }

}