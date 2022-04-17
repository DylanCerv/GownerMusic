<?php

require_once "Url.Controller.php";

class SingupController extends URLs{

    
    public function __construct(){
        $this->URLRegister();
        $this->validate = new Singup();
    }


    public function register(){
        require_once "views/singup/singup.php";
    }

    public function validateData($username, $email, $v_email, $password, $v_password){
        //Eliminamos los espacios en blanco y pasamos todo a minuscula
        $username = strlen(trim($username));
        $email = strlen(trim($email));
        $v_email = strlen(trim($v_email));
        // $password = strlen(trim($password));
        // $v_password = strlen(trim($v_password));

        if ($username < 1 ||
            $email < 1 ||
            $v_email < 1 ||
            $password < 1 ||
            $v_password < 1){
                //No hay datos enviados
                return TRUE;
            }else{
                //Si hay datos enviados
                return FALSE;
            }
    }

    public function validateEmailRigth($email, $v_email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL) &&
            filter_var($v_email, FILTER_VALIDATE_EMAIL)) {
            //Es un email valido
            return TRUE;
        }else{
            //No es un email valido
            return FALSE;
        }
    }

    public function validatePassword($password, $v_password){
        if (strcmp($password, $v_password) !== 0){
            //Son iguales
            return TRUE;
        }else{
            //No son iguales
            return FALSE;
        }
    }

    public function validateUsernameExist_DB($username){
        if (!empty($username)){
            $this->validate->validateUsernameExist($username);
        }
    }

    public function validateEmailExist_DB($email){
        if (!empty($email)){
            $this->validate->validateEmailExist($email);
        }
    }

}

