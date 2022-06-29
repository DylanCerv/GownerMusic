<?php

require_once "../controllers/Login.Controller.php";


if (empty($_POST)){
    $username_or_email = NULL;
    $password = NULL;
}else{
    $username_or_email = $_POST['usernameLogin'];
    $password = $_POST['passwordLogin'];
}

$login = new LoginController();

if ($login->validateData($username_or_email, $password) === TRUE){
    echo "<script>alert('ERROR: Llene todos los campos porfavor');window.location='../../'</script>";
}else{
    if ($login->validateUsername_or_Email_DB($username_or_email) !== TRUE){
        echo "<script>alert('ERROR: Usuario no registrado');window.location='../../'</script>";
    }else{
        if ($login->validatePassword_DB($username_or_email, $password) !== TRUE){
            echo "<script>alert('ERROR: Contraseña incorrecta');window.location='../../'</script>";
        }else{
            echo "<script>alert('SUCCESS: Bienvenido');window.location='../../?cm=pagei&m=home'</script>";
        }
    }
}
