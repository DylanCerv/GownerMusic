<?php

require_once "controllers/Posts.Controller.php";


$controllerPosts = new PostsController();

$controllerPosts->getPosts_DB();
