<?php

class DataBase{

    const HOST = 'localhost';
    const DB_NAME = 'gownermusic';
    const USERNAME = 'root';
    const PASSWORD = '';
    

    public function __construct(){
        $this->conection();
    }

    public function conection(){
        try {
            $this->conexion = new PDO(
                'mysql:host='.self::HOST.
                ';dbname='.self::DB_NAME,
                self::USERNAME,
                self::PASSWORD
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo 'Conexion a la base de datos fallida: '.$e->getMessage();
            exit();
        }
    }

    public function getConnection(){
        return $this->conexion;
    }

}

$d = new DataBase();
$d->conection();