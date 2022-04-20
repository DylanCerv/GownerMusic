<?php

class URLs{


    public function URLRegister(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'singup' && $_GET['m'] == 'register'){
                require_once "models/singup.php";
            }
        }else{
            require_once "../models/singup.php";
        }
    }

    public function URLLogin(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'login' && $_GET['m'] == 'log'){
                require_once "models/login.php";
            }
        }else{
            require_once "../models/login.php";
        }
    }

}