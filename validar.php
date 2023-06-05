<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="SELECT*FROM usuarios where emailAddres='$usuario' and passwordRegis='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if((empty($_POST['usuario'])) && (empty($_POST['password']))){
    echo'<script type="text/javascript">
    alert("Llene los campos");
    window.location.href="index.html";
    </script>';
}
else if(!$filas){
    echo'<script type="text/javascript">
    alert("No existe el usuario");
    window.location.href="index.html";
    </script>';
}
else{
    header("location:indexMain.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
