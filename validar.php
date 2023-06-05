<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="SELECT*FROM usuarios where emailAddres='$usuario' and passwordRegis='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:indexMain.php");

}else{
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);
