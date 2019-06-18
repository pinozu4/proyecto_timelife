<?php 
require "php/conexion.php";
$Sql ="SELECT * FROM 	secciones";
$Result = mysqli_query($conect,$Sql);
$Row = mysqli_fetch_array($Result);
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
	<title>Deporte Rey</title>
</head>
<body>
<!-- 	<div id="cargando">
		<img class="cargandoin" src="videos/carga.gif">
</div> -->
	<!-- Modeles de Registro y Contactenos -->
	<div class="modal fade" id="Registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registrarse</h5>
					<button class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="RegistrarUser.php" method="post">
						<div class="form-group">
							<h3>Nombre</h3>
							<input type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<h3>Edad</h3>
							<input type="number" class="form-control" name="edad">
						</div>
						<div class="form-group">
							<h3>Correo</h3>
							<input type="email" class="form-control" name="correo">
						</div>
						<button type="submit" class="btn btn-dark">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="Contactar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Contactanos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="contactar.php" method="post">
						<div class="form-group">
							<h3>Asunto</h3>
							<input type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<h3>Nombre</h3>
							<input type="text" class="form-control" name="edad">
						</div>
						<div class="form-group">
							<h3>Mensaje</h3>
							<textarea class="form-control" name="mensaje"></textarea>
						</div>
						<button type="submit" class="btn btn-dark">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="Menu">
		<ul>
			<li><a href="#In">Inicio</a></li>
			<li><a href="#Or">Origen</a></li>
			<li><a href="#Evo">Evolución</a></li>
			<li><a href="#JO">Juegos Olímpicos</a></li>
			<li><a href="#Act">Actualidad</a></li>
			<li><a href="#RA">Realidad Aumentada</a></li>
			<li><a href="Juego/index.html" target="_blank">Juego</a></li>
			
		</ul>
	</div>
	<!-- Maquetación general -->
	<div class="contGeneral">
		<nav>
			<div class="IconMenu">
				<img src="img/Menu.png">
			</div>
			<div class="logo_esquina">
				<a href="#In"><img src="img/Loguito.png"></a>
			</div>
		</nav>
		<!-- Inicio -->
		<section id="In" class="Inicio flex-nowrap">
			<div class="logo row">
				<img src="img/Logo.png">
			</div>
			<div class="boton">
				<a href="#Or">Empezar</a>
			</div>
			<div class="Iconos">
				<i data-target="#Registro" data-toggle="modal" data-whatever="@mdo"class="fas fa-sign-in-alt"></i>
				<i data-target="#Contactar" data-toggle="modal" data-whatever="@mdo" class="far fa-envelope"></i>
			</div> 
		</section>
		<!-- Origen -->
		
		<section id="Or" class="Origen flex-nowrap" data-vide-bg="videos/Origen" data-vide-options="position: 0% 0%">
			<div class="Info row">
				<div class="Carlos">
					<img src="img/Carlos.png">
				</div>
				<div class="Intro">
					<h2>
						<?php echo $Row['titulo']; ?>
					</h2>
					<p>
						<?php echo $Row['texto'];?>
					</p>
				</div>
			</div>
		</section>
	<!-- Mayas -->
	<section id="May" class="mayas flex-nowrap" data-vide-bg="videos/Mayas" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">MAYAS</h2>
		<div class="contSubsec row">
			<button data-target="#infoMayas" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
<!-- 	<video id="animacion">
				<source src="videos/AnMayas.mp4">
			</video> -->
			<div class="yunuen">
				<img src="img/yunuen.png" class="img-fluid">
			</div>
			<div class="zazil">
				<img src="img/zazil.png" class="img-fluid">
			</div>
		</div>
		<div class="modal fade" id="infoMayas" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Mayas</h3>
					</div>
					<div class="modal-body">
						Los mayas concebían al juego de pelota como un ritual, representa los orígenes del universo, este juego tuvo diversas variantes según la época y el lugar, por general se utilizaba una pelota hecha de caucho que se golpeaba con la cintura, las rodillas, los hombros y los codos con el objetivo de pasarla por un aro, en el juego, se enfrentaban dos equipos, aquel equipo perdedor era sacrificado como parte del ritual para rendirle honor a los Dioses.
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Primeras Reglas -->
	<section id="Reg" class="Section1 flex-nowrap" data-vide-bg="videos/JO" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">PRIMERAS REGLAS</h2>
		<div class="contSubsec2 row">
			<button data-target="#infoReglas" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<div class="Richard">
				<img src="videos/reglas.gif" class="img-fluid">
			</div>
		</div>
		<div class="modal fade" id="infoReglas" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">PRIMERAS REGLAS</h3>
					</div>
					<div class="modal-body">
						A mediados del siglo XIX, en los suburbios de la ciudad de Londres, un grupo de jóvenes empezaron a jugar a la pelota, un pasatiempo de las clases medias bajas que poco a poco se fue convirtiendo en un deporte para chicos y adultos, debido a la violencia de sus primeros encuentros, tuvo que ser sometido a normas, y así es como en el año 1863 se instauraron las primeras reglas del Fútbol como lo conocemos hoy en dia. En este año se reunió por primera vez  The Football Association, formada por doce escuelas londinenses, dispuestas a crear un código de fútbol universal y definitivo, llamado el código Cambridge. Se instauraron 14 reglas, entre las cuales se destacan las medidas del campo de fútbol, los arcos, el no uso de las manos por parte de los jugadores y los tiros libres en caso de que el balón saliera del campo.

					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Primer Torneo -->
	<section id="Pt" class="Section1 flex-nowrap" data-vide-bg="videos/FA" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">PRIMER TORNEO</h2>
		<div class="contSubsec row">
			<button data-target="#infoTorneo" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<div class="Gary">
				<img src="img/Gary.png" class="img-fluid">
			</div>
			<div class="portero">
				<img src="img/portero.png" class="img-fluid">
			</div>
		</div>
		<div class="modal fade" id="infoTorneo" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">PRIMER TORNEO</h3>
					</div>
					<div class="modal-body">
						La Fa cup es el torneo de fútbol más antiguo del mundo y el más prestigioso de inglaterra, nació en el año 1871 como una necesidad de realizar encuentros de fútbol de forma profesional y organizada. El primer equipo campeón fue el Wanderers, siendo ganador del trofeo 5 veces de sus primeras 7 ediciones. El torneo impuso una estructura base para los torneos que se crearán en un futuro, ya que la competición es de eliminación directa a partido único y el emparejamiento de los encuentros se realiza por sorteo.
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Evolución -->
	<?php $Row = mysqli_fetch_array($Result); ?>
	<section id="Evo" class="Evolucion flex-nowrap" data-vide-bg="videos/Evolucion" data-vide-options="position: 0% 0%">
		<div class="Info row">
			<div class="carlos">
				<img src="img/comogary.png">
			</div>
			<div class="Intro2">
				<h2><?php echo $Row['titulo']; ?></h2>
				<p><?php echo $Row['texto']; ?></p>
			</div>
		</div>	
	</section>
	<!-- FIFA -->
	<section id="Fi" class="Section2 flex-nowrap" data-vide-bg="videos/FIFA" data-vide-options="position: 0% 0%">
		<h2 class="Titulo tltFif">FUNDACIÓN DE LA FIFA</h2>
		<div class="contSubsec2 row">
			<button data-target="#infoFifa" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<div class="imagenFIFA">
				<img src="img/elegante1.png" class="img-fluid">
			</div>
		</div>
		<div class="modal fade" id="infoFifa" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">FIFA</h3>
					</div>
					<div class="modal-body">
						El aumento en la popularidad del fútbol y la expansión del mismo, hizo necesario la creación de un organismo regulador del deporte a nivel mundial, así nace la Fédération Internationale de Football Association (FIFA), institución que gobierna las federaciones de fútbol en todo el mundo. Se fundó el 21 de mayo de 1904 y el primer encuentro oficial entre seleccionados nacionales fue entre  Francia y Bélgica,  2 - 1 a favor de los galos, marcando así el inicio de una nueva era, en la cual el fútbol seguiría expandiéndose alrededor del planeta. La institución evolucionó al pasar de los años, y con ella el deporte, constituyéndose como la entidad deportiva más importante en el mundo.
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Torneo de Navidad -->
	<section id="Tn" class="flex-nowrap" data-vide-bg="videos/Guerra" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">FÚTBOL EN LA GUERRA</h2>
		<div class="contSubsec row">
			<button data-target="#infoTn" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<div class="Wolfgang">
				<img src="img/Wolfgang.png" class="img-fuid">
			</div>
			<div class="Baldwin">
				<img src="img/Baldwin.png" class="img-fuid">
			</div>
		</div>
		<div class="modal fade" id="infoTn" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">TREGUA DE NAVIDAD</h3>
					</div>
					<div class="modal-body">
						El fútbol se ha jugado aunque alrededor estallara el mundo. Un pellejo de cuero lleno de aire ha transformado muchos conflictos bélicos en batallas deportivas. Entre el barro de las trincheras, la sangre reseca y el eco de las ráfagas de metralla, durante la primera Gran Guerra, en la víspera navideña de 1914, tras seis meses agazapados en las trincheras, soldados alemanes e ingleses agotados por la guerra fueron actores de un hecho único. Se produjo un destello de tranquila humanidad, la conocida como “Tregua de Navidad”.  Aquella gélida Nochebuena, los soldados de ambos ejércitos firmaron una paz momentánea, fumaron, bebieron y cantaron juntos. Al día siguiente, los británicos aparecieron con un balón y retaron a los alemanes a disputar otra batalla., un partido de fútbol.
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Copa Mundo -->
	<section id="Cm" class="copa flex-nowrap">
		<div class="contcm row">
			<video id="Video">
				<source src="videos/videocm.mp4">
				</video>
				<button class="rep btn btn-info" onclick="playPause()">
					Play / Pause
				</button>
			</div>
		</section>
	<!-- Juegos Olímpicos Introducción -->
	<?php $Row = mysqli_fetch_array($Result); ?>
	<section id="JO" class="JuegosOlimpicos flex-nowrap" data-vide-bg="videos/JO" data-vide-options="position: 0% 0%">
		<div class="Info row">
			<div class="carlos">
				<img src="img/elegante2.png">
			</div>
			<div class="Intro2">
				<h2><?php echo $Row['titulo']; ?></h2>
				<p><?php echo $Row['texto']; ?></p>
			</div>
		</div>
	</section>
	<!-- Juegos Olímpicos -->
	<section id="Jo1" class="Section3 flex-nowrap" data-vide-bg="videos/JO3" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">FÚTBOL EN LOS JUEGOS OLÍMPICOS</h2>
		<div class="contSubsec row">
			<button data-target="#infoJo" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<div class="USA">
				<img src="img/Alex.png" class="img-fluid">
			</div>
		</div>
		<div class="modal fade" id="infoJo" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">JUEGOS OLÍMPICOS</h3>
					</div>
					<div class="modal-body">
						El fútbol no estaba en el programa moderno original de los juegos olímpicos; debido a que, el fútbol internacional todavía estaba en su desarrollo  en 1896. Sin embargo un torneo fútbol fue organizado durante la primera competición de los Juegos Olímpicos. Los torneos de demostración también fueron jugados en 1900 y 1904, también como en los "Juegos Intecaló" de 1906, pero éstos fueron disputados por equipos, y no se consideran para ser acontecimientos olímpicos oficiales. No fue sino hasta los juegos de Londres de 1908 que un torneo internacional apropiado fue organizado, participando a penas seis equipos e incrementándose a 11 en 1912.
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Medeallería -->
	<section id="Md" class="Section3 flex-nowrap" data-vide-bg="videos/JO2" data-vide-options="position: 0% 0%">
		<h2 class="Titulo">MEDALLERÍA</h2>
		<div class="contSubsec row">
			<button data-target="#infoMd" data-toggle="modal" class="btnModal btn-outline-info btn-primary"></button>
			<!-- <div>
				<img src="img/Medalleria.png">
			</div> -->
			<!-- <div class="Ing">
				<img src="img/Inglaterra.png" class="img-fluid">
			</div>
			<div class="Hun">
				<img src="img/Hungria.png" class="img-fluid">
			</div>
			<div class="Arg">
				<img src="img/Argentina.png" class="img-fluid">
			</div> -->
		</div>
		<div class="modal fade" id="infoMd" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">MEDALLERÍA</h3>
					</div>
					<div class="modal-body">
						Inicialmente lo disputaban equipos amateurs representando cada uno a su respectivo país, pero a partir del año 1984 se permite la participación de equipos profesionales y en 1992 se decretó que los miembros del equipo no podian superar los 23 años, para promover el fútbol juvenil y potenciar a las futuras estrellas del deporte, por esta misma razón en 1996 se incluyó el fútbol femenino en los juegos olímpicos. Las selecciones más ganadoras son: Hungría y Reino Unido con 3 medallas de oro cada uno, para completar el podio se encuentra argentina con 2 preseas doradas.
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- Actualidad -->
	<?php $Row = mysqli_fetch_array($Result); ?>
	<section id="Act" class="Actualidad flex-nowrap" data-vide-bg="videos/Actualidad" data-vide-options="position: 0% 0%">
		<div class="Info row">
			<div class="carlos">
				<img src="img/Carlos.png">
			</div>
			<div class="Intro">
				<h2><?php echo $Row['titulo']; ?></h2>
				<p><?php echo $Row['texto']; ?></p>
			</div>
		</div>
	</section>
	
	<!-- Realidad Aumentada -->
	<section id="RA" class="RAu flex-nowrap">
		<div class="Info row">
			<div class="carlos">
				<img src="img/Carlos.png">
			</div>
			<div class="Intro">
				<h2>REALIDAD AUMENTADA</h2>
				<p><b>1.</b> Descarga la aplicación y pasa la a tu movil. <br>
				<b>2.</b> Abre la aplicación en el movil. <br>
				<b>3.</b> Seleciona el botón del balón que quieres ver en realidad aumentada. <br>
				<b>4.</b> Escanealo con el movil. Cuando desees puedes escanear el siguiente balón, solo debes selecionar el botón que deseas. <br>
				<b>5.</b>Recuerda no dejar de enfocar la imagen para que puedas usar correctamente la realidad aumentada. <br> 
				</p>
				<button data-target="#infoRA1" data-toggle="modal" class="btn btn-info">Balón 1</button>
				<button data-target="#infoRA2" data-toggle="modal" class="btn btn-info">Balón 2</button>
				<a href="" download="DeporteRey.apk"><button class="btn btn-info">Descargar App</button></a>
			</div>
			<div class="modal fade" id="infoRA1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/Balon1.jpg" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="infoRA2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/Balon2.jpg" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</section>	

	<!-- Barra línea de tiempo -->
	<div class="barra">
		<div class="cuadro">
			<div class="carga"></div>
		</div>
		<a href="#Or"><button class="secciones btn1" data-placement="top" data-toggle="popover" data-content="Origen"></button></a>
		<a href="#May"><button class="btn2 Subsecciones" data-placement="top" data-toggle="popover" data-content="Mayas"></button></a>
		<a href="#Reg"><button class="btn3 Subsecciones" data-placement="top" data-toggle="popover" data-content="Primeras Reglas"></button></a>
		<a href="#Pt"><button class="btn4 Subsecciones" data-placement="top" data-toggle="popover" data-content="Primer Torneo"></button></a>

		<a href="#Evo"><button class="secciones btn5" data-placement="top" data-toggle="popover" data-content="Evolución"></button></a>
		<a href="#Fi"><button class="btn6 Subsecciones" data-placement="top" data-toggle="popover" data-content="FIFA"></button></a>
		<a href="#Tn"><button class="btn7 Subsecciones" data-placement="top" data-toggle="popover" data-content="Torneo de Navidad"></button></a>
		<a href="#Cm"><button class="btn8 Subsecciones" data-placement="top" data-toggle="popover" data-content="Copa Mundo"></button></a>

		<a href="#JO"><button class="secciones btn9" data-placement="top" data-toggle="popover" data-content="Introducción Juegos Olímpicos"></button></a>
		<a href="#Jo1"><button class="btn10 Subsecciones" data-placement="top" data-toggle="popover" data-content="Juegos Olímpicos"></button></a>
		<a href="#Md"><button class="btn11 Subsecciones" data-placement="top" data-toggle="popover" data-content="Medallería"></button></a>

		<a href="#Act"><button class="secciones btn12" data-placement="top" data-toggle="popover" data-content="Actualidad"></button></a>
	</div>

	<!-- Botón para jugar y RA -->
	<a href="Juego/index.html" target="_blank"><button  class="jugar btn btn-light">¡JUGAR!</button></a>
	<a href="#RA"><button class="ra btn btn-light">¡Realidad Aumentada!</button></a>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/codigo.js"></script>
<script src="js/jquery.vide.js"></script>
</body>
</html>