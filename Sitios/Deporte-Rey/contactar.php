<?php 
$CorreoUser = $_POST["nombre"];
$Titulo = $_POST["asunto"];
$Comentario = $_POST["mensaje"];

$Correo= "deporterey2019@gmail.com";
$Asunto =	 $Titulo . "Por:" . $CorreoUser;
$Mensaje = "<b>Nombre:</b><br>" . $CorreoUser . "<br><b>Mensaje:</b><br>" . $Comentario;
$TipoMensaje = "Content-type:text/html;charset=UTF-8";

mail($Correo, $Asunto, $Mensaje,$TipoMensaje);
echo "Se envió el mensaje:<br>" . $Mensaje;

header("Location:Index.php");
?>