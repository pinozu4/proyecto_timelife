<?php 
$Name = $_POST["nombre"];
$Old = $_POST["edad"];
$Mail = $_POST["correo"];

require "php/conexion.php";
$Sql = "SELECT * FROM usuarios WHERE nombre = '$Name' OR correo = '$Mail'";
$Result = mysqli_query($conect,$Sql);
$Contador = mysqli_num_rows($Result);

if ($Contador >= 1) {
	echo "El Usuario ya existe, selecione otro nombre de usuario";
}
else{
	$Sql2 ="INSERT INTO usuarios(nombre, correo, edad) VALUES('$Name','$Mail','$Old')";
	$Result2 = mysqli_query($conect,$Sql2);
	header("Location: Index.php");
}
?>