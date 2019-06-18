<?php 

$correoUsuario = $_POST["correoUsuario"];
$comentario = $_POST["comentario"];
$correo = "$correoUsuario";
$asunto = "Mensaje enviado por Boxline";
$mensaje .= " Asunto : " . $comentario;
$tipoContenido = "Content-type:text/html;charset=UTF-8"; 


mail($correo, $asunto, $mensaje, $tipoContenido);

echo "mensaje enviado <br>";
echo $mensaje;


//mail(to, subject, message)

//subir a un servidor, nunca va a funcionar en local host//

?>