<?php 

$idUser = $_GET["idUser"];
require "php/conexion.php";
$sql = "SELECT * FROM secciones WHERE id ='$idUser'";
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


		<section>
			<form action="update.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $row["titulo"]; ?>">
				</div>

				<div class="form-group">
					<label for="File1">Imagen #1</label>
					<input type="file" class="form-control-file" id="File1" accept="image/*" name="img1">
				</div>

				<div class="form-group">
					<label for="File2">Imagen #2</label>
					<input type="file" class="form-control-file" id="File2" accept="image/*" name="img2">
				</div>

				<div class="form-group">
					<label for="Texto 1" class="titulo">Texto 1</label>
					<textarea class="form-control" name="texto1" id="Texto 1" rows="4"  name="Txt1"><?php echo $row["texto1"]; ?></textarea>
				</div>

				<div class="form-group">
					<label for="Texto 2" class="titulo">Texto 2</label>
					<textarea class="form-control" name="texto2" id="Texto 2" rows="4"  name="Txt2"><?php echo $row["texto2"]; ?></textarea>
				</div>
				<input type="hidden" name="ident" value="<?php echo $row['id']?>">

				<input type="submit" value="Actualizar">
			</form>

		</section>

	</div>	

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>
</html>