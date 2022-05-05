<?php

require_once "Url.Controller.php";

class LoginController extends URLsControllers{


    public function __construct(){
        $this->URLLogin();
        $this->ModelLogin = new Login();
    }

    public function login(){
        require_once "views/login/login.php";
    }

    public function log(){
        require_once "views/login/login.php";
    }


    public function validateData($username_or_email, $password){
        //Pasamos todo a minuscula y quitamos los espacios
        $username_or_email = strlen(trim($username_or_email));

        if ($username_or_email < 1 ||
            $password < 1){
            //No hay datos enviados
            return TRUE;
        }else{
            //Si hay datos enviados
            return FALSE;
        }
    }


    public function validateUsername_or_Email_DB($username_or_email){
        if (!empty($username_or_email)){
            return $this->ModelLogin->validateUsername_or_Email($username_or_email);
        }else{
            echo "Campo Vacio";
        }
    }


    public function validatePassword_DB($username_or_email, $password){
        
        if (!empty($username_or_email) && !empty($password)){
            return $this->ModelLogin->validatePassword($username_or_email, $password);
        }
    
    }
    



}