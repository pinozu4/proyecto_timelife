<?php 
$IdUser =$_GET['idperson'];
require "php/conexion.php";
$Sql ="DELETE FROM usuarios WHERE id='$IdUser'";
$Result= mysqli_query($conect,$Sql);
header("Location:usuarios.php");
?>