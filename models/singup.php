<?php

require_once "dataBase.php";

class Singup{



    public function __construct(){
        $this->connection = new DataBase();
        $this->DB = $this->connection->getConnection();
    }



    public function validateUsernameExist($username){
        $queryPDO = "SELECT id FROM users WHERE username = ?";

        $this->result = $this->DB->prepare($queryPDO);
        $this->result->execute(array($username));
        $this->numRows = $this->result->rowCount();
        // var_dump($this->numRows);
        
        if ($this->numRows !== 0){
            //Usuario ya registrado
            return TRUE;
        }else{
            //Usuario no registrado
            return FALSE;
        }
    }


    public function validateEmailExist($email){
        $queryPDO = "SELECT id FROM users WHERE email = ?";

        $this->result = $this->DB->prepare($queryPDO);
        $this->result->execute(array($email));
        $this->numRows = $this->result->rowCount();
        // var_dump($this->numRows);

        if ($this->numRows !== 0){
            //Email ya registrado
            return TRUE;
        }else{
            //Email no registrado
            return FALSE;
        }
    }


    public function addUser($username, $email, $hashPassword, $phone = NULL){
        $queryPDO = "INSERT INTO users(username,email,passwords,phone) values(?,?,?,?);";

        $this->result = $this->DB->prepare($queryPDO);
        // $this->result->execute(array($username, $email, $hashPassword, $phone));
        if ($this->result->execute(array($username, $email, $hashPassword, $phone)) == TRUE){
            //Se agrego a la base de datos
            return TRUE;
        }else{
            //No se agrego a la base de datos
            return FALSE;
        }
    }


}