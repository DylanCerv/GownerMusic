<?php

require_once "dataBase.php";

class Post{

    public function __construct(){
        $this->connection = new DataBase();
        $this->DB = $this->connection->getConnection();
        $this->session_start_ON();
    }

    public function session_start_ON(){
        if (empty($_GET)) {
            session_start();
        }
    }

    ### CARGAR PUBLICACION EN LA BASE DE DATOS

    public function uploadAll($descriptionText, $ruteFile_DB){
        $query = "INSERT INTO posts(id_user, content, media_dir) values(?,?,?);";
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($_SESSION['id_user'], $descriptionText, $ruteFile_DB));
    }


    public function uploadFile($ruteFile_DB){
        $query = "INSERT INTO posts(id_user, media_dir) values(?,?);";
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($_SESSION['id_user'], $ruteFile_DB));
    }

    public function uploadText($descriptionText){
        $query = "INSERT INTO posts(id_user, content) values(?,?);";
        $this->result = $this->DB->prepare($query);
        $this->result->execute(array($_SESSION['id_user'], $descriptionText));
    }
}