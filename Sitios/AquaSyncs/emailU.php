<?php 

$idUser = $_GET["idUser"];

require "php/conexion.php";

$sql = "SELECT * FROM registro WHERE id = '$idUser'";
$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result);

session_start();

if (isset($_SESSION["usuario"])) {
	# code...
}else{
	echo "<script> location.href='login.php' </script>"; 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>

	<!-- Estilos CSS -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_admin.css">

	<!-- Funtes -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">

	<!-- animacion -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>




<body>
	<div class="contenedor">
		<header>
			<h1> <span style="color:  #d34242"> Administrador</span> </h1>

			<div class="imagenLogo animated bounceInDown" style="animation-delay: 0.30s"> <img src="img/logo2.png" width="100%"> </div>

			<h3>Bienvenido: <span style="color: #d34242"><?php echo $_SESSION["usuario"]; ?></span></h3>
		</header>

		<nav >
			<h1>Secciones</h1>
			<ul class="list-group list-group-flush">
				<li class="list-group-item lista" > <a href="admin_sesiones.php?idUser=1">Seccion 1</a> </li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=2">Sección 2</a></li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=3">Sección 3</a></li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=4">Sección 4</a></li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=5">Sección 5</a></li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=6">Sección 6</a></li>
				<li class="list-group-item lista"> <a href="admin_sesiones.php?idUser=7">Sección 7</a></li>


				<h2 style="margin: 5%;"> <a href="admin.php">Usuarios Registrados</a> </h2>
				<button class="btn btn-outline-danger salir"><a href="logout.php">Salir</a></button>
			</ul> 
		</nav>


		<section style="display: flex; justify-content: center; align-items: center; flex-flow: column wrap; text-align: center;">
			<h1>Enviar correo a <?php echo $row["nombre"] ?></h1>
			<form action="sendU.php" method="post" class="w-100">
				<div class="form-group">
					<label for="titulo">Título</label>
					<input type="text" class="form-control w-100" name="titulo" id="titulo" placeholder="Titulo">
				</div>
				<div class="form-group">
					<label for="comentario" class="titulo">Mensaje</label>
					<textarea class="form-control" name="mensaje" id="comentario" rows="4" placeholder="Escribe aquí..."></textarea>
				</div>

				<input type="hidden" name="ident" value="<?php echo $row['id']?>">

				<input type="submit" class='btn btn-primary' value="Enviar">
			</form><br>
			<a href="admin.php" class="btn btn-danger">Cancelar</a>


		</section>

	</div>	

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>
</html>