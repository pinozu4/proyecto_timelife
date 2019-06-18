<?php

$usuarioL = $_POST["usuarioL"];
$contrasenaL = $_POST["contrasenaL"];

//require ('php/conexion.php');
require 'php/conexion.php';


$sql = "SELECT * FROM login WHERE usuario = '$usuarioL' AND contrasena = '$contrasenaL'";

$result = mysqli_query($conexion,$sql);

$count = mysqli_num_rows($result);

if($count == 1){
	session_start();
	 $_SESSION["usuario"] = $usuario;
	 echo "<script> location.href='ListaUsuarios.php' </script>";
}
else{
	echo "<script> location.href='login.php?error=dato' </script>";
}

//mysqli_close($conexion);
?>



?>
