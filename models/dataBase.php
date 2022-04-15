<?php

class DataBase{

    const HOST = 'localhost';
    const DB_NAME = 'gownermusic';
    const USERNAME = 'root';
    const PASSWORD = '';
    
    
    public static function conection(){
        try {
            $conexion = new PDO(
                'mysql:host='.self::HOST.
                ';dbname='.self::DB_NAME,
                self::USERNAME,
                self::PASSWORD
            );
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conexion a la base de datos fallida: '.$e->getMessage();
        }
    }

}

$d = new DataBase();
$d->conection();