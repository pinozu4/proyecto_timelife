<?php 

$nombre = $_POST["titulo"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];

require "php/conexion.php";

$sql = "SELECT * FROM registro WHERE correo = '$correo'";
$result = mysqli_query($conect,$sql);
$count = mysqli_num_rows($result);

if($count == 1){
	echo "<h3 class = 'animated bounceIn'>La dirección de correo electrónico ya existe, ingresa otra</h3>";
}else{
	$sql2 = "INSERT INTO registro(nombre, edad, correo) VALUES ('$nombre','$edad','$correo')";
	$result2 = mysqli_query($conect,$sql2);
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	 
	<!-- animacion -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

     <!-- iconos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

	<!-- estilo -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
	<style>
			body{display: flex;
			align-items: center; 
			justify-content: center;
			flex-flow: column wrap;
			font-size: 2em;
			font-family: Montserrat;
			}</style>
</head>
<body>

<button class='btn btn-danger' style="margin: 1%;"><a href='index.php' style="font-size: 1em; color: white; text-decoration: none !important; list-style: none !important;">Regresar</a></button>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
