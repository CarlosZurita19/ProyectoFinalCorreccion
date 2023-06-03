<?php

include('db.php');

$USUARIO=$_POST['emailLog'];
$PASSWORD=$_POST['passwordLog'];

if(!empty($_POST["buttonLog"])){
   $consulta = "SELECT* FROM usuarios where userName = '$USUARIO' and password ='$PASSWORD' ";
   $resultado= mysqli_query($conexion, $consulta);

   $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:index.html");

              }
    else{

          echo '<div class = "Advertencia> "Verifique sus datos.</div>';
    
             }
mysqli_free_result($resultado);
mysqli_close($conexion);

}



?>