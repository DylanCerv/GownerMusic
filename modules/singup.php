<?php

require_once "../controllers/Singup.Controller.php";

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
    echo "Listo campos llenos";
}

if ($register->validateEmailRigth($email, $v_email) == TRUE){

}
if ($register->validateUsernameExist_DB($username) == TRUE) {
    echo "El usuario ya existe";
}else {
    echo "Usuario libre";
}

if ($register->validateEmailExist_DB($email) == TRUE) {
    echo "";
}else {
    echo "";
}
die;

$usernamem="";
var_dump(empty($usernamem));

$email = "adas@gmail.com";
$v_email = "adas@gmail.com";


if (filter_var($email, FILTER_VALIDATE_EMAIL) &&
    filter_var($v_email, FILTER_VALIDATE_EMAIL)){
    //Es un email valido
    var_dump( TRUE);
}else{
    //No es un email valido
    var_dump( FALSE);
    
}