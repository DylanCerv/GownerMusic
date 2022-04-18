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


    public function validateUsernameExist_DB($username){
        trim($username);
        
        if (!empty($username)){
            return $this->validate->validateUsernameExist($username);
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
        trim($email);
        if (!empty($email)){
            return $this->validate->validateEmailExist($email);
        }else{
            echo "Campo Vacio";
        }
    }


    public function validatePassword($password, $v_password){
        if ($password == $v_password){
            //Son iguales
            return TRUE;
        }else{
            //No son iguales
            return FALSE;
        }
    }







}

$a = new SingupController();
echo"<br>";
$a->validateSameEmail('dylan@gmail.com','dylan@gmail.com');