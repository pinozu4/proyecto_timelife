



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<style>

body{
	overflow: hidden;
}
		
		.fondo{

			margin: 0 auto;
	color: white;
	width: 100%;
	height: 100vh;
	background-image: url(../img/admin_fondo.png);
	background-repeat: no-repeat;

		}


		.login{
	opacity: 0.9;
	padding: 40px;
	margin-left: 10%;
	margin-top: 20px;
	width: 80%;
	height: 80vh;
	color: gray;
}




.logo{
		

		margin: 0 auto;
		width: 200px;
    	height: 80px;
		background-image: url(../img/logo_pequeño.png);
		z-index: 3;
	}

.enviar{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	}


	.enviar:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}


	.btnaDMIN{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	float: right;
	margin-top: 20px !important;
	}


	.btnaDMIN:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}

	
	</style>


  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/codigoJuego.json", {onProgress: UnityProgress});
    </script>


</head>
<body class="fondo" >


	<div class="ContenedorLogo">
		<a href="../../index.php" class="btn btnaDMIN animated slideInRight delay-0s">
			Volver
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>



	
	
		
		<div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">prj_GuerraDePeriodicos</div>
      </div>
    </div>
		


	



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
