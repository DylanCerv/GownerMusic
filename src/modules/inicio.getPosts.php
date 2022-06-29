<?php

require_once "src/controllers/Inicio.Controller.php";


$controllerPosts = new InicioController();

$controllerPosts->getPosts_DB();
