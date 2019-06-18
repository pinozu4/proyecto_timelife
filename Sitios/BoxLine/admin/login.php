<!DOCTYPE html>
<html>
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

	<title>Box Line</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body id="login">
	<section class="padreLogin">
		<div class="jumbotron login alert alert-light">
			<h2>Login</h2>
			<hr>
			<form action="chechkLogin.php" method="post" class="formulario">
				<div class="form-group">
					<label for="exampleInputEmail1">Ingrese su nombre de usuario :</label>
					<input type="text" class="form-control" name="usuarioL" placeholder="Usuario" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese su contraseña :</label>
					<input type="password" class="form-control" name="contrasenaL" placeholder="Contraseña" required>
				</div>
				<div class="DatosIncorrectos">
					<?php
					if(isset($_GET["error"])){
						echo "* Los datos no son correctos *";
					}
					?>
				</div>
				<input type="submit" class="btn btn-outline-light w-100 enviar" name="" value="Enviar">
				<a href="index.php" class="btn btn-outline-light w-100 cancelar">Cancelar</a>
			</form>
		</div>
	</section>
</body>
</html>
