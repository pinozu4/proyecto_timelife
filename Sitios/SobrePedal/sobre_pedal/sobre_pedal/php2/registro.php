<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];


require "conexion.php";

$sql2= "SELECT * FROM registrados WHERE correo_registrados ='$correo'";

$result2 =mysqli_query($conect, $sql2);


$count = mysqli_num_rows($result2);


if($count==1){
	session_start();
	$_SESSION["correo"] = $correo;
	echo "<script> location.href='../php/registrate.php?error=dato' </script>";
}else{
	echo "<script> location.href='../php/registrate.php?registrado=' </script>";
}


$sql = "INSERT INTO `registrados`(`ID_registrados`, `nombre_registrados`, `correo_registrados`) VALUES (NULL, '$nombre', '$correo')";

$result = mysqli_query($conect, $sql);


/*echo "<script> location.href='../php/registrate.php?registrado='</script>";



//header("location: ../php/registrate.php?registrado=");

*/
echo $count;


?>