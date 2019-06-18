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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
		<h2 class="TituloLog">ENVIAR CORREO A: <?php echo "<br>" . $Row['correo']?></h2>
		<hr>
		<form action="contactarUser.php" method="post">

			<div class="form-group">
				<input class="Formu" type="hidden" name ="Ident" value="<?php echo $Row['id']; ?>">
			</div>
			<div class="form-group">
				<p class="Titulo2Log">Asunto</p>
				<input type="text" class="FormInputLog form-control" aria-describedby="emailHelp" placeholder="Asunto" name='asunt'>
			</div>
			<div class="form-group">
				<p class="Titulo2Log">Mensaje</p>
				<textarea class="form-control" name="mensaje">
				</textarea>
			</div>
			<button type="submit" class="btn btn-danger">Enviar</button>
			<a class="btn btn-danger" href="usuarios.php">Volver</a>
		</form>
	</div>

	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
	<script src="js/codigo.js"></script>
</body>
</html>

