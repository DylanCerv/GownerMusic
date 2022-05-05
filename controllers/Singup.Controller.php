<?php

require_once "Url.Controller.php";

class SingupController extends URLsControllers{


    public function __construct(){
        $this->URLRegister();
        $this->ModelSingup = new Singup();
    }



    public function register(){
        require_once "views/singup/singup.php";
    }


    public function validateData($username, $email, $v_email, $password, $v_password){
        //Eliminamos los espacios en blanco y pasamos todo a minuscula
        $username = strlen(trim($username));
        $email = strlen(trim($email));
        $v_email = strlen(trim($v_email));
        
        if ($username < 1 ||
            $email < 1 ||
            $v_email < 1 ||
            $password < 1 ||
            $v_password < 1 ||
            $username == NULL ||
            $email == NULL ||
            $v_email == NULL ||
            $password == NULL ||
            $v_password == NULL){
                //No hay datos enviados
                return TRUE;
            }else{
                //Si hay datos enviados
                return FALSE;
            }
    }


    public function validateUsernameExist_DB($username){
        $username = trim($username);
        
        if (!empty($username)){
            return $this->ModelSingup->validateUsernameExist($username);
        }else{
            echo "Campo Vacio";
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


    public function validateSameEmail($email, $v_email){
        if ($email == $v_email){
            //Emails identicos
            return TRUE;
        }else{
            //Emails diferentes
            return FALSE;
        }
    }


    public function validateEmailExist_DB($email){
        $email = trim($email);
        if (!empty($email)){
            return $this->ModelSingup->validateEmailExist($email);
        }else{
            echo "Campo Vacio";
        }
    }


    public function validateSamePassword($password, $v_password){
        if ($password == $v_password){
            //Son iguales
            return TRUE;
        }else{
            //No son iguales
            return FALSE;
        }
    }


    public function hashPassword($username, $email, $password, $phone){
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->ModelSingup->addUser($username, $email, $hashPassword, $phone);
        $this->ModelSingup->addPerfil($username, $email, $hashPassword);

    }


}

$a = new SingupController();
$a->validateData('da', 'dasda', 'das', 'jhfgj', '');