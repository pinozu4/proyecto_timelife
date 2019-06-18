<?php
require 'php/conexion.php';

$idEdit = $_GET["idEdit"];

$sql = "SELECT * FROM usuarios WHERE id='$idEdit'";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);
?>
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
	
	<title>Actualizar</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<section class="padreRegistro">
		<div class="jumbotron registro alert alert-light">
			<h2>Actualizar usuario</h2>
			<hr>
			<form action="update.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Ingrese nombre completo :</label>
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="<?php echo $row['nombre']?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese nombre de usuario :</label>
					<input type="text" class="form-control" name="usuarioR" placeholder="Usuario" required value="<?php echo $row['usuario']?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese correo electronico :</label>
					<input type="mail" class="form-control" name="correo" placeholder="Correo electronico" required value="<?php echo $row['correo']?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese fecha de nacimiento :</label>
					<input type="date" class="form-control" name="fecha" placeholder="Fecha de nacimiento" required value="<?php echo $row['fecha']?>">
				</div>
				<div class="DatosRepetidos">
					<?php
					if(isset($_GET["error"])){
						echo "* Los datos no son correctos *";
					}
					?>
				</div>
				<input type="submit" class="btn btn-outline-light w-100 registrarse" value="Actualizar"></input>
				<input type="hidden" value="<?php echo $row['id'] ?>" name="id">
				<a href="listaUsuarios.php" class="btn btn-outline-light w-100 cancelar">Cancelar</a>
			</form>
			</div>
		</div>
	</section>
</body>
</html>
