<?php 

$title = $_POST["titulo"];
$com = $_POST["mensaje"];

$correo = $_POST["correo"];

$asunto = $title;

$mensaje = "<b>Asunto: </b>".$title."<br>";
$mensaje .= "<b>Mensaje: </b>".$com;

$tipomensaje = "Content-type:text/html;charset=UTF-8";

mail($correo, $asunto, $mensaje, $tipomensaje);

echo "<h3 class = 'animated bounceIn'>Se envió el mensaje:<br><br>".$mensaje."</h3>";






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
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