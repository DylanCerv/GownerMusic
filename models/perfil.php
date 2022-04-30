<?php

require_once "dataBase.php";

class Perfil {

    public function __construct(){
        $this->connection = new DataBase();
        $this->DB = $this->connection->getConnection();
    }


    public function validate_id_URL($idUser){
        session_start();

        $query = "SELECT * FROM perfil WHERE id_user = ?";
        
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($idUser));
        $data = $this->result->fetchAll(PDO::FETCH_ASSOC);

        $this->numRows = $this->result->rowCount();
        if ($this->numRows != 0){
            $_SESSION['id_perfil'] = $data[0]['id'];
            $_SESSION['id_user_perfil'] = $data[0]['id_user'];
            $_SESSION['description_perfil'] = $data[0]['description'];
            $_SESSION['img_perfil_perfil'] = $data[0]['img_perfil'];
            $_SESSION['img_portada'] = $data[0]['img_portada'];


            $query = "SELECT * FROM users WHERE id = ?";

            $this->result = $this->DB->prepare($query);
            $this->result->execute(array($idUser));
            $data = $this->result->fetchAll(PDO::FETCH_ASSOC);
            $this->numRows = $this->result->rowCount();
            if ($this->numRows != 0){
                $_SESSION['id_user_perfil'] = $data[0]['id'];
                $_SESSION['username_user_perfil'] = $data[0]['username'];
                $_SESSION['email_user_perfil'] = $data[0]['email'];
            }

        }else{
            //No existe el perfil del usuario
            return FALSE;
        }


    }

}

// $d = new Perfil();
// $d->validate_id_URL('43');