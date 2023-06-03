<?php

if(!empty($_POST["buttonReg"]))
{
    if(empty($_POST["nameReg"]) or empty($_POST["emailReg"]) or empty($_POST["passwordReg"])){
        echo 'Uno de los campos está vacio';  
}
else{
    $NombreRegistro=$_post['nameReg'];
    $EmailRegistro=$_post['emailReg'];
    $ContraseñaRegistro=$_post['passwordReg'];
    $sql=$conexion->query("INSERT INTO usuarios(userName,emailAddres,password) values('$NombreRegistro','$EmailRegistro','$ContraseñaRegistro')");
    if($sql==1){
        echo 'Usuario registrado correctamente';
    }
    else{
        echo 'Error al registrar, verifica los campos';
    }
        
}}