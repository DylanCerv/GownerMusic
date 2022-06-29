<?php

require_once "dataBase.php";

class Perfil {

    public function __construct(){
        $this->connection = new DataBase();
        $this->DB = $this->connection->getConnection();
        session_start();
    }


    public function validate_id_URL($idUser){

        $query = "SELECT * FROM perfil WHERE id_user = ?";
        
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($idUser));
        $data = $this->result->fetchAll(PDO::FETCH_ASSOC);

        $this->numRows = $this->result->rowCount();
        if ($this->numRows != 0){
            $_SESSION['id_perfil'] = $data[0]['id'];
            $_SESSION['id_user_perfil'] = $data[0]['id_user'];
            $_SESSION['username_perfil'] = $data[0]['username_perfil'];
            $_SESSION['description_perfil'] = $data[0]['description'];
            $_SESSION['img_perfil_perfil'] = $data[0]['img_perfil'];
            $_SESSION['img_portada'] = $data[0]['img_portada'];

            return TRUE;
        }else{
            //No existe el perfil del usuario
            return FALSE;
        }
    }


    public function getPostsPerfil($idUser){

        $query = "SELECT * FROM posts INNER JOIN perfil ON posts.id_user = perfil.id_user WHERE perfil.id_user=?;";
        
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($idUser));
        $_SESSION['postsPerfilDATA'] = $this->result->fetchAll(PDO::FETCH_ASSOC);
        // print_r('<pre>');
        // print_r($_SESSION['postsPerfilDATA']);
        // print_r('</pre>');
    }


}
