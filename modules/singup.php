<?php

require_once "../controllers/Singup.Controller.php";

if(isset($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $v_email = $_POST['v_email'];
    $password = $_POST['password'];
    $v_password = $_POST['v_password'];

    echo "username: ".$username."<br>";
    echo "email: ".$email."<br>";
    echo "v_email: ".$v_email."<br>";
    echo "password: ".$password."<br>";
    echo "v_password: ".$v_password."<br>";
}

echo "<br><br><br>";

$register = new SingupController();

if ($register->validateData($username, $email, $v_email, $password, $v_password)){
    echo "LLene todos los campos porfavor".'<br>';
}else {
    echo "Listo campos llenos".'<br>';
}

if ($register->validateUsernameExist_DB($username) === TRUE) {
    echo "El usuario ya existe".'<br>';
}else {
    echo "Usuario libre".'<br>';
}

if ($register->validateEmailRigth($email, $v_email) === TRUE){
    echo "Email valido".'<br>';
    if ($register->validateSameEmail($email, $v_email) === TRUE){
        echo "Emails identicos".'<br>';
        if ($register->validateEmailExist_DB($email) === TRUE){
            echo "El email ya existe".'<br>';
        }else {
            echo "Email libre".'<br>';
        }
    }else{
        echo "Emails diferentes".'<br>';
    }
}else{
    echo "Ingrese un email valdido";
}




