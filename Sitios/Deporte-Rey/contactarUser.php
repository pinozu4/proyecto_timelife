<?php 
$IdUser = $_POST['Ident'];
require "php/conexion.php";
$Sql="SELECT * FROM usuarios WHERE id ='$IdUser'";
$Result = mysqli_query($conect,$Sql);
$Row = mysqli_fetch_array($Result);


$Correo= $Row['correo'];
$Asunto =	$_POST['asunt'];
$Comentario = $_POST['mensaje'];
$Mensaje = $Comentario;
$TipoMensaje = "Content-type:text/html;charset=UTF-8";

/*mail($Correo, $Asunto, $Mensaje,$TipoMensaje);
echo $Correo . $Asunto . $Mensaje ;*/

header("Location:usuarios.php");

?>