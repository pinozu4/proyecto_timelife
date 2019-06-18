<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Loguito.ico" />
	<title>Login</title>
</head>
<body>
	<div class="ContGeneralLog">
		
		<div class="Login jumbotron">		

			<h2 class="TituloLog">LOGIN</h2>
			<hr><br>
			<form action="DatosLog.php" method="post">
				<div class="form-group">
					<p class="Titulo2Log">Usuario</p>
					<input type="text" class="FormInputLog form-control" aria-describedby="emailHelp" placeholder="User" name="Usuario">
				</div>
				<div class="form-group">
					<p class="Titulo2Log">Contraseña</p>
					<input type="password" class="FormInputLog form-control" placeholder="Contraseña" name="Contra">
				</div>
				<button type="submit" class="btn btn-danger">Enviar</button>	
				<div class="Mensaje">
					<?php
					if (isset($_GET['error'])) {
						echo "Los datos no son correctos";
					}
					?>
				</div>
			</form>
		</div>

	</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/codigo.js"></script>
</body>
</html>