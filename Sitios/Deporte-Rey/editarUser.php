<?php 
$IdUser = $_GET['idperson'];
require "php/conexion.php";
$Sql ="SELECT * FROM 	usuarios WHERE id ='$IdUser'";
$Result = mysqli_query($conect,$Sql);
$Row = mysqli_fetch_array($Result);
session_start();
if (isset($_SESSION['User'])) {
}
else{
	header("Location:Login.php");
	//echo"<script>location.href='Index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Loguito.ico" />
	<title>Editar <?php echo $Row['nombre']?></title>
</head>
<body>
	<div class="ContGeneralEdit">

		<nav class="navUser">
			<div class="logo_esquinaUser">
				<img src="img/Loguito.png">
			</div>
			<div class="CerrarUser">
				<a href="Logout.php" class="btn btn-danger">Cerrar Sesión</a>
			</div>
		</nav>
		<div class="Edit jumbotron">	
			<h2 class="TituloLog">EDITAR <?php echo $Row['nombre']?></h2>
			<hr>
			<form action="Update.php" method="post">
				
				<div class="form-group">
					<input class="Formu" type="hidden" name ="Ident" value="<?php echo $Row['id']; ?>">
					<p class="Titulo2Log">Nombre</p>
					<input type="text" class="FormInputLog form-control" aria-describedby="emailHelp" placeholder="Nombre" name='Nombre' value="<?php echo $Row['nombre'];?>">
				</div>
				<div class="form-group">
					<p class="Titulo2Log">Edad</p>
					<input type="number" class="FormInputLog form-control" aria-describedby="emailHelp" placeholder="Edad" name='Edad' value="<?php echo $Row['edad'];?>">
				</div>
				<div class="form-group">
					<p class="Titulo2Log">Correo</p>
					<input type="email" class="FormInputLog form-control" aria-describedby="emailHelp" placeholder="Correo" name='Correo' value="<?php echo $Row['correo'];?>">
				</div>
				<button type="submit" class="btn btn-danger">Enviar</button>
				<a class="btn btn-danger" href="usuarios.php">Volver</a>
			</form>
		</div>

	</div>


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/codigo.js"></script>
</body>
</html>

