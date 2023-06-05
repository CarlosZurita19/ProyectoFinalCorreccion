<?php
include('db.php');
$userName=$_POST['nombre'];
$emailAddres=$_POST['correo'];
$password=$_POST['password'];

$consulta="INSERT INTO usuarios (userName, emailAddres, passwordRegis) VALUES ('$userName','$emailAddres','$password')";;
mysqli_query($conexion,$consulta);
mysqli_close($conexion);

