<?php 
$conexion = mysqli_connect('localhost','root','','pelismedia') or die($msqli);

diferencia($conexion);

function diferencia($conexion){
	if(isset($_POST['buttonReg'])){
		insertar($conexion);
	}
	if(isset($_POST['buttonLog'])){
		validar($conexion);
	}
}

function insertar($conexion){
	$userName = $_POST['nameReg'];
	$emailAddres = $_POST['emailReg'];
	$password = $_POST['passwordReg'];

	$consulta = "INSERT INTO usuarios (userName, emailAddres, password)
	VALUES ('$userName','$emailAddres','$password')";
	mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
}
function validar(){
$consulta = "SELECT * FROM usuarios where userName = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

 if($filas){
	 header("location:index.html");

		   }
 else{
	   echo 'Verifique los datos';
		  
}
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
}
?>