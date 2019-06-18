<?php

	require "php/conexion.php";
	$sql = "SELECT * FROM `secciones`";
	$resultado = mysqli_query($conexion, $sql);
	$resultado1= mysqli_query($conexion, $sql);
	$resultado2= mysqli_query($conexion, $sql);
	$resultado3= mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/codigo.min.js"></script>

	<title>Historia</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<?php 
		while ($fila = mysqli_fetch_array($resultado1)) {
	?>
	<!-- Modal infografia -->
	<div class="modal fade" id="infografia<?= $fila['idSec']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Infografia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?= $fila['infografia']?>" width="100%">
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	<!-- Modal personaje  -->
	<?php 
		while ($fila2 = mysqli_fetch_array($resultado2)) {
	?>
	<div class="modal fade" id="personaje<?= $fila2['idSec']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Personaje</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<video class="d-block w-100" controls>
						<source src="<?= $fila2['personaje']?>" type="video/mp4">
					</video>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	<!-- Modal Reglas-->
	<?php 
		while ($fila3 = mysqli_fetch_array($resultado3)) {
	?>
	<div class="modal fade" id="reglas<?= $fila3['idSec']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Reglas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<video class="d-block w-100" controls ="false">
						<source src="<?= $fila3['reglas']?>" type="video/mp4">
					</video>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	<!-- Menu -->
	<header>
		<div class="menuHamburgesa">
			<i id="menuH" class="fas fa-bars"></i>
		</div>
			<nav class="menu justify-content-center">
				<a href="index.php">
					<img src="img/icono/btnInicioMenu.png" width="50px">
					<h2>Inicio</h2>
				</a>
				<a href="secciones.php">
					<img src="img/icono/btnHistoriaMenu.png" width="50px">
					<h2>Historia</h2>
				</a>
				<a href="juego/index.html" target="blank">
					<img src="img/icono/btnJuegoMenu.png" width="50px">
					<h2>Juego</h2>
				</a>
				<a href="contacto.html">
					<img src="img/icono/btnContactoMenu.png" width="50px">
					<h2>Contacto</h2>
				</a>	
			</nav>
	</header>
 	<!-- Fin Menu -->
 	<!-- Boton subir -->
 	<i class="fas fa-chevron-circle-up"></i>
 	<!-- Fin Boton subir -->
	<!-- Afica -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="africa" class="container-fluid">
		<!--Carteles-->
		<div class="carteles">
			<ul class="imgCartelesA">
				<li><img src="img/Carteles/A1.png"></li>
				<li><img src="img/Carteles/A2.png"></li>
				<li><img src="img/Carteles/A3.png"></li>
				<li><img src="img/Carteles/A4.png"></li>
				<li><img src="img/Carteles/A5.png"></li>
			</ul>
			<div class="flechas">
				<div class="FizquierdaA">
					<i class="fas fa-chevron-circle-left"></i>
				</div>
				<div class="FderechaA">
					<i class="fas fa-chevron-circle-right"></i>
				</div>
			</div>
		</div>
		<!--Fin Carteles-->
		<div class="titulo"><img class="animacionTitulo" src="img/pais/Africa.png"></div>
		<div class="menuMultimediaA">
			<!--Africa Infografia-->
			<button type="button" class="btnInfografia" data-toggle="modal" data-target="#infografia1"></button>
			<!--Africa Galeria-->
			<button type="button" class="btnImplementos" data-toggle="modal" data-target="#implementoAfrica"></button>
			<div class="modal fade" id="implementoAfrica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/implementos/img/mano_dambe.png" class="imgIA" width="99%">
							<div class="contenedorA">
								<img src="img/implementos/Carteles/karaA.png" class="textoA" width="99%">
								<div class="contenedor2">
									<img src="img/implementos/marcadores/manoDambe.jpg" class="marcadorA" width="99%">
									<i class="fas fa-volume-down">
										<audio id="" src="img/implementos/audios/kara.mp3"></audio>
									</i>
								</div>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
			</div>
				<!--Africa Video Reglas-->
				<button type="button" class="btnReglas" data-toggle="modal" data-target="#reglas1"></button>
			</div>
			<div class="nubes">
				<img class="animacionNube1" src="img/icono/nube.png" width="200px">
				<img class="animacionNube2" src="img/icono/nube.png" width="300px">
				<img class="animacionNube3" src="img/icono/nube.png" width="250px">
				<img class="animacionNube4" src="img/icono/nube.png" width="200px">
			</div>
		</section>
	<!--Fin Africa -->
	<!--Grecia -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="grecia" class="container-fluid">
		<!--Carteles-->
		<div class="carteles">
			<ul class="imgCartelesG">
				<li><img src="img/Carteles/G1.png"></li>
				<li><img src="img/Carteles/G2.png"></li>
				<li><img src="img/Carteles/G3.png"></li>
				<li><img src="img/Carteles/G4.png"></li>
				<li><img src="img/Carteles/G5.png"></li>
			</ul>
			<div class="flechas">
				<div class="FizquierdaG">
					<i class="fas fa-chevron-circle-left"></i>
				</div>
				<div class="FderechaG">
					<i class="fas fa-chevron-circle-right"></i>
				</div>
			</div>
		</div>
		<div class="titulo">
			<img class="animacionTitulo" src="img/pais/Grecia.png">
		</div>
		<div class="menuMultimediaA">
			<!--Grecia Galeria-->
			<button type="button" class="btnImplementos" data-toggle="modal" data-target="#implementoGrecia"></button>
			<div class="modal fade" id="implementoGrecia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/implementos/img/mano_grecia.png" class="imgIA" width="99%">
							<div class="contenedorA">
								<img src="img/implementos/Carteles/caestusG.png" class="textoA" width="99%">
								<div class="contenedor2">
									<img src="img/implementos/marcadores/manoGrecia.jpg" class="marcadorA" width="99%">
									<i class="fas fa-volume-down">
										<audio id="" src="img/implementos/audios/caestus.mp3"></audio>
									</i>
								</div>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
			</div>
			<!--Grecia Video Reglas-->
			<button type="button" class="btnReglas" data-toggle="modal" data-target="#reglas2">
			</button>
		</div>
		<div class="nubes">
			<img class="animacionNube1" src="img/icono/nube.png" width="200px">
			<img class="animacionNube2" src="img/icono/nube.png" width="300px">
			<img class="animacionNube3" src="img/icono/nube.png" width="250px">
			<img class="animacionNube4" src="img/icono/nube.png" width="200px">
		</div>
		</section>
	<!--Fin Grecia -->
	<!--Inglaterra -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="inglaterra" class="container-fluid">
		<!--Carteles-->
		<div class="carteles">
			<ul class="imgCartelesI">
				<li><img src="img/Carteles/I1.png"></li>
				<li><img src="img/Carteles/I2.png"></li>
				<li><img src="img/Carteles/I3.png"></li>
				<li><img src="img/Carteles/I4.png"></li>
				<li><img src="img/Carteles/I5.png"></li>
			</ul>
			<div class="flechas">
				<div class="FizquierdaI">
					<i class="fas fa-chevron-circle-left"></i>
				</div>
				<div class="FderechaI">
					<i class="fas fa-chevron-circle-right"></i>
				</div>
			</div>
		</div>
		<div class="titulo"><img class="animacionTitulo" src="img/pais/Inglaterra.png"></div>
		<div class="menuMultimediaA">
			<!--Inglaterra Animacion Personajes-->
			<button type="button" class="btnPersonajes" data-toggle="modal" data-target="#personaje3"></button>
			<!--Inglaterra Galeria Implementos-->
			<button type="button" class="btnImplementos" data-toggle="modal" data-target="#implementoInglaterra"></button>
			<div class="modal fade" id="implementoInglaterra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="img/implementos/img/guante.png" class="imgIA" width="99%">
							<div class="contenedorA">
								<img src="img/implementos/Carteles/guanteEIC.png" class="textoA" width="99%">
								<div class="contenedor2">
									<img src="img/implementos/marcadores/guante.jpg" class="marcadorA" width="99%">
									<i class="fas fa-volume-down">
										<audio id="" src="img/implementos/audios/guantes.mp3"></audio>
									</i>
								</div>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
			</div>
			<!--Inglaterra Video Reglas-->
			<button type="button" class="btnReglas" data-toggle="modal" data-target="#reglas3">
			</button>
		</div>
		<div class="nubes">
			<img class="animacionNube1" src="img/icono/nube.png" width="200px">
			<img class="animacionNube2" src="img/icono/nube.png" width="300px">
			<img class="animacionNube3" src="img/icono/nube.png" width="250px">
			<img class="animacionNube4" src="img/icono/nube.png" width="200px">
		</div>
	</section>
	<!--Fin Inglaterra -->
	<!--Estados Unidos -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="estadosUnidos" class="container-fluid">
		<!--Carteles-->
		<div class="carteles">
			<ul class="imgCartelesEU">
				<li><img src="img/Carteles/EU1.png"></li>
				<li><img src="img/Carteles/EU2.png"></li>
				<li><img src="img/Carteles/EU3.png"></li>
				<li><img src="img/Carteles/EU4.png"></li>
				<li><img src="img/Carteles/EU5.png"></li>
			</ul>
			<div class="flechas">
				<div class="FizquierdaEU">
					<i class="fas fa-chevron-circle-left"></i>
				</div>
				<div class="FderechaEU">
					<i class="fas fa-chevron-circle-right"></i>
				</div>
			</div>
		</div>
		<div class="titulo"><img class="animacionTitulo" src="img/pais/EEUU.png"></div>
		<div class="menuMultimediaA">
			<!--Estados Unidos Personajes-->
			<button type="button" class="btnPersonajes" data-toggle="modal" data-target="#personaje4"></button>
			<!--Estados Unidos Infografia-->
			<button type="button" class="btnInfografia" data-toggle="modal" data-target="#infografia4">
			</button>
			<!--Estados Unidos Implementos-->
			<button type="button" class="btnImplementos" data-toggle="modal" data-target="#implementosE"></button>
			<div class="modal fade" id="implementosE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/implementos/img/guante.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/guanteEIC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/guante.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/guantes.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/casco.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/cascoEC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/casco.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/casco.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
			</div>
			<!--Video Reglas-->
			<button type="button" class="btnReglas" data-toggle="modal" data-target="#reglas4"></button>
		</div>
		<div class="nubes">
			<img class="animacionNube1" src="img/icono/nube.png" width="200px">
			<img class="animacionNube2" src="img/icono/nube.png" width="300px">
			<img class="animacionNube3" src="img/icono/nube.png" width="250px">
			<img class="animacionNube4" src="img/icono/nube.png" width="200px">
		</div>
	</section>
	<!--Fin Estados Unidos -->
	<!--Colombia -->
	<?php $row = mysqli_fetch_array($resultado); ?>
	<section id="colombia" class="container-fluid">
		<!--Carteles-->
		<div class="carteles">
			<ul class="imgCartelesC">
				<li><img src="img/Carteles/C1.png"></li>
				<li><img src="img/Carteles/C2.png"></li>
				<li><img src="img/Carteles/C3.png"></li>
				<li><img src="img/Carteles/C4.png"></li>
				<li><img src="img/Carteles/C5.png"></li>
			</ul>
			<div class="flechas">
				<div class="FizquierdaC">
					<i class="fas fa-chevron-circle-left"></i>
				</div>
				<div class="FderechaC">
					<i class="fas fa-chevron-circle-right"></i>
				</div>
			</div>
		</div>
		<div class="titulo"><img class="animacionTitulo" src="img/pais/Colombia.png"></div>
		<div class="menuMultimediaA">
			<!--Animacion Personajes-->
			<button type="button" class="btnPersonajes" data-toggle="modal" data-target="#personaje5"></button>
			<!--Infografia-->
			<button type="button" class="btnInfografia" data-toggle="modal" data-target="#infografia5"></button>
			<!--Galeria Implementos-->
			<button type="button" class="btnImplementos" data-toggle="modal" data-target="#implementosC"></button>
			<div class="modal fade" id="implementosC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Implementos</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/implementos/img/guante.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/guanteEIC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/guante.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/guantes.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/casco.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/cascoEC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/casco.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/casco.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/coquilla.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/coquillaC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/coquilla.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/coquilla.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/bucal.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/bucalC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/bucal.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/bucal.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/pera.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/peraC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/pera.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/pera.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/implementos/img/saco_pesado.png" class="imgIA" width="99%">
										<div class="contenedorA">
											<img src="img/implementos/Carteles/saco_pesadoC.png" class="textoA" width="99%">
											<div class="contenedor2">
												<img src="img/implementos/marcadores/sacoPesado.jpg" class="marcadorA" width="99%">
												<i class="fas fa-volume-down">
													<audio id="" src="img/implementos/audios/saco.mp3"></audio>
												</i>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
			</div>

			<!--Video Reglas-->
			<button type="button" class="btnReglas" data-toggle="modal" data-target="#reglas5"></button>
		</div>
		<div class="extrellasColombia">
			<img class="animacionExtrella1C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella2C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella3C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella4C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella5C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella6C" src="img/colombia/estrella.png" width="5%">
			<img class="animacionExtrella7C" src="img/colombia/estrella.png" width="5%">
		</div>
	</section>
	<!--Fin Colombia -->

</body>
</html>
