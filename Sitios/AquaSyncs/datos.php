<?php 
$nombre = $_POST['nom'];
$contra = $_POST['pass'];

// $link = mysqli_connect("localhost", "id9167294_aquasyncs", "aquasyncs2018","id9167294_aquasyncs") or die('Error en la Conexion');
$link = mysqli_connect("localhost", "root", "","aquasyncs") or die('Error en la Conexion');

$sql = "SELECT * FROM login WHERE usuario ='$nombre' AND contra = '$contra'";

$result = mysqli_query($link, $sql);

$count=mysqli_num_rows($result); //busca en la BD cuantos datos cumple con los ingresados 



if ($count == 1) {
	session_start();
	$_SESSION["usuario"] = $nombre;
	echo "<script> location.href='admin.php' </script>";
}else{
	echo "<script> location.href='login.php?error=dato' </script>"; 
}

mysqli_close($link);


?>