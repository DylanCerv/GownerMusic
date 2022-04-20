<?php

require_once "dataBase.php";

class Login{



    public function __construct(){
        $this->connection = new DataBase();
        $this->PDO = $this->connection->getConnection();
    }



    public function validateUsername_or_Email($username_or_email){
        $query = "SELECT id FROM users WHERE username = ? OR email = ?";

        $this->result = $this->PDO->prepare($query);
        $this->result->execute(array($username_or_email, $username_or_email));
        $this->numRows = $this->result->rowCount();
        //Hacemos la ejecucion de la query y a la misma vez comprobamos si se realizo correctamente
        if ($this->numRows !== 0){
            //Usuario registrado
            return TRUE;
        }else{
            //Usuario no encontrado en la DB
            return FALSE;
        }
    }


    public function validatePassword($username_or_email, $password){
        session_start();
        $query = "SELECT * FROM users WHERE username = ? OR email = ?";

        $this->result = $this->PDO->prepare($query);
        $this->result->execute(array($username_or_email, $username_or_email));

        $userDAta = $this->result->fetchAll(PDO::FETCH_ASSOC);

        if (isset($userDAta[0]['passwords'])){
            $_SESSION["hashPassword"] = $userDAta[0]['passwords'];
            if (password_verify($password, $_SESSION["hashPassword"])){
                //Contraseña Correcta
                $this->updateLast_session($userDAta[0]['id']);
                $_SESSION['id_user'] = $userDAta[0]['id'];
                $_SESSION['username_user'] = $userDAta[0]['username'];
                $_SESSION['email_user'] = $userDAta[0]['email'];
                $_SESSION['password_user'] = $userDAta[0]['passwords'];
                $_SESSION['last_session_user'] = $userDAta[0]['last_session'];
                $_SESSION['token_user'] = $userDAta[0]['token'];
                $_SESSION['phone_user'] = $userDAta[0]['phone'];

                return TRUE;
            }else{
                //Contraseña Incorrecta
                return FALSE;
            }
        }
    }


    public function updateLast_session($idUser){
        $query = "UPDATE users SET last_session = NOW(), token = '' WHERE id = ?";
        
        $this->result = $this->PDO->prepare($query);
        $this->result->execute(array($idUser));
    }


}
