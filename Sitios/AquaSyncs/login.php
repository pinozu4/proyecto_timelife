<?php 

require 'php/conexion.php';










?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!-- para que se adapte a varios dispositivos-->
	<title>Ingresar</title>

	<!-- fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	 
	<!-- animacion -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

     <!-- iconos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

	<!-- estilo -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos_admin.css">



</head>
<body class="bodyLogin animated " >

		


	<form action="datos.php" method="post" class="form-box animated fadeInUp">
        <h1 class="form-title">Bienvenido</h1>
        <input type="text" placeholder="Usuario" name="nom">
        <input type="password" placeholder="Contraseña" name="pass">
        <button type="submit">
            ¡Ingresar!
        </button>

	 <p class="mensaje" style="color: #f71a1a;">
		<?php  

			if (isset($_GET['error'])){
				//comprobar que la variable que coloque alli Existe

				echo "*Los datos NO son correctos";
			} 
		?>

		</p> 

    </form>	

	

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

	
</body>
</html>