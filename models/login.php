<?php

require_once "dataBase.php";

class Login extends DataBase{


    public function __construct(){
        $this->conection();
    }
    
    public function verify($username, $password){
        
    }

}
$q = new Login();
