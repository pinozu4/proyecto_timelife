<?php 
session_start();
if (isset($_SESSION['User'])) {
}
else{
	header("Location:Login.php");
	//echo"<script>location.href='Index.php'</script>";
}


?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Loguito.ico" />

	<title>Administrador</title>
</head>
<body>

	<div class="ContGeneralUser">

		<nav class="navUser">
			<div class="logo_esquinaUser">
				<img src="img/Loguito.png">
			</div>
			<div class="CerrarUser">
				<a href="Logout.php" class="btn btn-danger">Cerrar Sesión</a>
			</div>
		</nav>

		<section class="row justify-content-center ContAdmin">

			<div class="card col-3 seleccionar" style="width: 18rem;">
				<a class="text-white" href="Secciones.php">
					<i class="fas fa-clipboard-list IconosAdmin"></i>
					<div class="card-body">
						<p class="card-text text-center PAdmin">Secciones</p>
					</div>
				</a>
			</div>


			<div class="card col-3 seleccionar" style="width: 18rem;">
				<a class="text-white" href="usuarios.php">
					<i class="far fa-address-card IconosAdmin"></i>
					<div class="card-body">
						<p class="card-text text-center PAdmin">Usuarios</p>
					</div>
				</a>
			</div>
		

		</section>



	</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/codigo.js"></script>
</body>
</html>