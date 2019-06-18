<?php 
$NameUser = $_POST['Nombre'];
$OldUser = $_POST['Edad'];
$MailUser = $_POST['Correo'];
$Identidad = $_POST["Ident"];
require "php/conexion.php";
$Sql = "UPDATE usuarios SET nombre='$NameUser', correo='$MailUser',edad='$OldUser' WHERE id='$Identidad' ";
$Result = mysqli_query($conect,$Sql);
header("Location:usuarios.php");

?>