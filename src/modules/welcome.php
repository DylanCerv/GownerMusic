<?php

session_start();

if (!isset($_SESSION['id_user'])){
    header("Location:index.php?cm=login&m=log");
}