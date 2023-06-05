<?php
include('db.php');
$userName=$_POST['nombre'];
$emailAddres=$_POST['correo'];
$password=$_POST['password'];

$consulta="INSERT INTO usuarios (userName, emailAddres, passwordRegis) VALUES ('$userName','$emailAddres','$password')";;
mysqli_query($conexion,$consulta);
mysqli_close($conexion);

if((empty($_POST['nombre'])) || (empty($_POST['correo'])) || (empty($_POST['password']))){
    echo'<script type="text/javascript">
    alert("Llene los campos");
    window.location.href="indexRegistrar.php";
    </script>';
}
else{
echo'<script type="text/javascript">
alert("Registro exitoso");
window.location.href="index.php";
</script>';
}

?>
