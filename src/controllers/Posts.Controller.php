<?php

require_once "Url.Controller.php";

class PostsController extends URLsControllers{

    public function __construct(){
        $this->URLPosts();
        $this->ModelPosts = new Post();
    }


    public function new(){
        require_once "src/views/post/post.php";
    }



    ### CARGAR PUBLICACION EN LA BASE DE DATOS

    public function uniqueFileName($ruteTmp, $nameFile, $typeFile){
        $md5 = substr(md5(rand(0, PHP_INT_MAX)), 5);
        $nameFileUnique = $md5.'.'.$nameFile;

        $typeFileArray = explode('/', $typeFile);
        $destinationFolder = '../../public/x.files/'.$typeFileArray [0].'/'.$nameFileUnique; //Aplication, image, mp4

        $_POST['ruteFile_DB'] = 'x.files/'.$typeFileArray [0].'/'.$nameFileUnique;

        move_uploaded_file($ruteTmp, $destinationFolder);
    }

    public function uploadFileAll_DB($descriptionText, $ruteFile_DB){
        $this->ModelPosts->uploadAll($descriptionText, $ruteFile_DB);
    }

    public function uploadFile_DB($ruteFile_DB){
        $this->ModelPosts->uploadFile($ruteFile_DB);
    }

    public function uploadText_DB($descriptionText){
        $this->ModelPosts->uploadText($descriptionText);
    }
}