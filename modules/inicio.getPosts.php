<?php

require_once "controllers/Inicio.Controller.php";


$controllerPosts = new InicioController();

$controllerPosts->getPosts_DB();
