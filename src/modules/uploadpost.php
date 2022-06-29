<?php

require_once "../controllers/Posts.Controller.php";


$controllerPost = new PostsController();


if (empty($_POST['mensaje-post']) &&
    empty($_FILES['archivo'])){

    //Todos los campos se encuentran vacios
    header("Location: ../?cm=pagei&m=home");

}else{

    if (!empty($_FILES['archivo'])){
        if (!$_FILES['archivo']['name'] == "" ||
            !$_FILES['archivo']['tmp_name'] == "" ||
            !$_FILES['archivo']['type'] == ""){

            $ruteTmp = $_FILES['archivo']['tmp_name'];
            $nameFile = $_FILES['archivo']['name'];
            $typeFile = $_FILES['archivo']['type'];
            
            $controllerPost->uniqueFileName($ruteTmp, $nameFile, $typeFile);

            if (!empty($_POST['mensaje-post'])){
                //LLeno la description y el archivo
                $descriptionText = $_POST['mensaje-post'];
                $controllerPost->uploadFileAll_DB($descriptionText, $_POST['ruteFile_DB']);
            }else{
                //Lleno solo el archivo
                $controllerPost->uploadFile_DB($_POST['ruteFile_DB']);
            }
        }else{
            //Archivo Vacio
            if (!empty($_POST['mensaje-post'])){
                //Lleno solo la description
                $descriptionText = $_POST['mensaje-post'];
                $controllerPost->uploadText_DB($descriptionText);
            }else{
                //Todos los campos se encuentran vacios
                header("Location: ../?cm=pagei&m=home");
            }
        }
    }

    header("Location: ../?cm=pagei&m=home");

}
