<?php 

$ident = $_POST["ident"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$correo = $_POST["email"];



require "php/conexion.php";

	$sql = "UPDATE registro SET nombre = '$nombre', edad = '$edad', correo = '$correo' WHERE id='$ident'";




$result = mysqli_query($conect,$sql);
header("location: admin.php?");

?>