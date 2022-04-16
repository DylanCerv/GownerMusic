<?php

require_once "../../controllers/Singup.Controller.php";

if(isset($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $v_email = $_POST['v_email'];
    $password = $_POST['password'];
    $v_password = $_POST['v_password'];
}


$register = new SingupController();
if ($register->validateData($username, $email, $v_email, $password, $v_password)){
    echo "LLene todos los campos porfavor";
}else {
    echo "listo campos llenos";
}

