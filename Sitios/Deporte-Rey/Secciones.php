
<?php 
require "php/conexion.php";
$Sql = "SELECT * FROM secciones";
$Result = mysqli_query($conect,$Sql);
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
	<title>Secciones</title>
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
	<h2 class="TitulosUser">SECCIONES</h2>
	<hr>

	<div class="justify-content-center row">
		<table class="table table-striped table-dark w-50">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Sección</th>
					<th scope="col">Editar</th>

				</tr>
			</thead>

			<tbody>
				<?php 
				while($Row = mysqli_fetch_array($Result))
				{
					echo "<tr>";
					echo "<th scope='row'>";	
					echo $Row['id'];
					echo "</th>";	
					echo "<td>";
					echo $Row['titulo'];
					echo "</td>";	
					echo "<td><a class='btn btn-info'";
					echo "href='editarSec.php?idSection=";
					echo $Row['id'];
					echo "'>";
					echo "Editar</a></td>";		
				}

				?>
			</tbody>
		</table>
	</div>

	<div class="ContCenter">
		<button type="submit" class="btn btn-danger">Enviar</button>
		<a class="btn btn-danger" href="admin.php">Volver</a>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/codigo.js"></script>
</body>
</html>