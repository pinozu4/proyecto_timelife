<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$comentario = $_POST["comentario"];
$email = $_POST["email"];

$to = "boxlineproyect@gmail.com";
$asunto = "Comentario página boxline";
$mensaje = "Mensaje de " . $nombre . " " . $apellido . "<br>" . "Correo: " . $email;
$mensaje .= "<br>" . "Comentario: " . $comentario;
$tipoContenido = "Content-type:text/html;charset=UTF-8";

mail($to, $asunto, $mensaje, $tipoContenido);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosContacto.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/codigo.min.js"></script>

	<title>Contacto</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
		body{
			background-color: #ecf0f1;
			font-family: 'Raleway light';
		}
		.text-center{
			margin-top: 10%;
		}
		h1{
			font-family: 'GROBOLD';
		}
	</style>
</head>
<body>
	<div class="text-center">
		<h1 class="display-2 "> ¡Gracias por tu comentario! </h1>
			<a href="index.php" class="btn w-50"><img src="img/icono/volver2.png"></a>
	</div>

</body>
</html>
