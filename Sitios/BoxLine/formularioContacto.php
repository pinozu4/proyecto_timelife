<?php
require 'php/conexion.php';

$idContacto = $_GET["idContacto"];

$sql = "SELECT * FROM usuarios WHERE id='$idContacto'";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosFormulario.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/codigo.min.js"></script>
	
	<title>Enviar Correo</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
</head>
<body>
	<section class="padreLogin">
		<div class="jumbotron login alert alert-light">
			<h2>Enviar correo a:</h2>
			<hr>
			<form action="contactoUsuario.php" method="post" class="formulario">
				<div class="form-group">
					<p>Correo electronico</p>
					<input type="text" class="form-control w-100" name="correoUsuario" placeholder="Nombre" value="<?php echo $row['correo']?>"> <br>
				</div>
				<div class="form-group">
					<p>Comentario</p>
					<textarea type="text" class="form-control w-100" name="comentario" placeholder="Comentario"></textarea> <br>
				</div>
				<input type="submit" class="btn btn-outline-light w-100 enviar"></input>
				<a href="listaUsuarios.php" class="btn btn-outline-light w-100 cancelar">Cancelar</a>
			</form>
		</div>
	</section>
</body>
</html>