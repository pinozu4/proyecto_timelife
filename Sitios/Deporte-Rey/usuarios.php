<?php 
require "php/conexion.php";
$Sql = "SELECT * FROM usuarios";
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Loguito.ico" />
	<title>Usuarios</title>
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
		<h2 class="TitulosUser">USUARIOS</h2>
		<hr>

		<div class="justify-content-center row">
			<table class="table table-striped table-dark w-75">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Edad</th>
						<th scope="col">Correo</th>
						<th scope="col">Editar</th>
						<th scope="col">Eliminar</th>
						<th scope="col">Contactar</th>
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
						echo $Row['nombre'];
						echo "</td>";	
						echo "<td>";	
						echo $Row['edad'];
						echo "</td>";	
						echo "<td>";	
						echo $Row['correo'];
						echo "</td>";	
						echo "<td><a class='btn btn-info'";
						echo "href='editarUser.php?idperson=";

						echo $Row['id'];
						echo "'>";
						echo "Editar</a></td>";	
						echo "<td><a class='btn btn-danger'";
						echo "href='eliminarUser.php?idperson=";
						echo $Row['id'];
						echo "'>";
						echo "Eliminar</a></td>";	
						echo "<td><a class='btn btn-info'";
						echo "href='EnviarUser.php?idperson=";
						echo $Row['id'];
						echo "'>";
						echo "Enviar Correo</a></td>";	
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






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
	<script src="js/codigo.js"></script>
</body>
</html>

