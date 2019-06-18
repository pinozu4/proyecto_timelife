<?php 

$ident = $_POST["ident"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];

require "php/conexion.php";
$sql = "SELECT * FROM registro WHERE id = '$ident'";
$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result);

$correo = $row["correo"];

$asunto = $titulo;

$mensajef = "<b>Asunto: </b>".$titulo."<br>";
$mensajef .= "<b>Mensaje: </b>".$mensaje;

$tipomensaje = "Content-type:text/html;charset=UTF-8";

mail($correo, $asunto, $mensajef, $tipomensaje);

header("location: admin.php");



?>