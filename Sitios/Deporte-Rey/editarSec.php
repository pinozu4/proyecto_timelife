<?php 
$IdSec = $_GET['idSection'];
require "php/conexion.php";
$Sql ="SELECT * FROM 	secciones WHERE id ='$IdSec'";
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
	<title>Editar <?php echo $Row['titulo']?></title>
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
		<form action="actualizar.php" method="post">
		<h2 class="TituloLog">EDITAR <?php echo $Row['titulo'];?></h2>
		<hr><br>
			<div class="form-group">
			<input class="Formu" type="hidden" name ="identidad" value="<?php echo $Row['id']; ?>">
				<p class="Titulo2Log">Titulo</p>
				<input type="text" class="FormInputLog form-control" aria-describedby="emailHelp" value="<?php echo $Row['titulo'];?>" name='titulo'>
			</div>
			<div class="form-group">
				<p class="Titulo2Log">Contenido</p>
					<textarea class="form-control" name="texto"><?php echo $Row['texto'];?></textarea>
			</div>
			<button type="submit" class="btn btn-danger">Enviar</button>
			<a class="btn btn-danger" href="Secciones.php">Volver</a>
		</form>
	</div>

	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/codigo.js"></script>
</body>
</html>

