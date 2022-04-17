<?php

class URLs{


    public function URLRegister(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'singup' && $_GET['m'] == 'register'){
                require_once "models/singup.php";
            }
        }else{
            return require_once "../models/singup.php";
        }
    }

}