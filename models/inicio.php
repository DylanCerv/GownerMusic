<?php

require_once "dataBase.php";

class Inicio{

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

    ### OBTENER PUBLICACION DE LA BASE DE DATOS
    public function getPosts(){
        $query = "SELECT * FROM posts INNER JOIN perfil ON posts.id_user = perfil.id_user;"; //Llamada de multiples tablas que estan relacionadas

        $this->result = $this->DB->prepare($query);
        $this->result->execute();
        $_SESSION['postsDATA'] = $this->result->fetchAll(PDO::FETCH_ASSOC);
        // print_r('<pre>');
        // print_r($_SESSION['postsDATA']);
        // print_r('</pre>');
    }

}