<?php

require_once "../controllers/Singup.Controller.php";

if(empty($_POST)){
    $username = NULL;
    $email = NULL;
    $v_email = NULL;
    $password = NULL;
    $v_password = NULL;
    $phone = NULL;
}else{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $v_email = $_POST['v_email'];
    $password = $_POST['password'];
    $v_password = $_POST['v_password'];
    $phone = "";
}


$register = new SingupController();

//Validar que todos los campos esten llenos
if ($register->validateData($username, $email, $v_email, $password, $v_password) || $username == NULL){
    echo "<script>alert('ERROR: Llene todos los campos porfavor');window.location='../'</script>";
}else{
    //Comprobar si el usuario ya se encuentra registrado
    if ($register->validateUsernameExist_DB($username) === TRUE) {
        echo "<script>alert('ERROR: Usuario ya registrado');window.location='../'</script>";
    }else{
        //Comprobar que el email sea valido
        if ($register->validateEmailRigth($email, $v_email) !== TRUE){
            echo "<script>alert('ERROR: Email invalido, porfavor ingrese un email valido');window.location='../'</script>";
        }else{
            //Comprobar que los emails sean iguales
            if ($register->validateSameEmail($email, $v_email) !== TRUE){
                echo "<script>alert('ERROR: Emails diferentes, porfavor ingrese los mismos emails para poder verificarlos');window.location='../'</script>";
            }else{
                //Comprobar si el email ya se encuentra registrado
                if ($register->validateEmailExist_DB($email) === TRUE){
                    echo "<script>alert('ERROR: El email ya se encuentra registrado');window.location='../'</script>";
                }else{
                    //Comprobar si las contraseñas son iguales
                    if ($register->validateSamePassword($password, $v_password) !== TRUE){
                        echo "<script>alert('ERROR: Contraseñas diferentes, porfavor ingrese las mismas contraseñas para poder verificarlas');window.location='../'</script>";
                    }else{
                        //Encriptamos la contraseña y agregamos el usuario a la base de datos
                        if ($register->hashPassword($username, $email, $password, $phone) !== TRUE){
                            echo "<script>alert('SUCCESS: Usuario registrado con exito');window.location='../'</script>";
                        }
                    }
                }
            }
        }
    }
}

