<?php 

require "datos.php";
$conect = mysqli_connect($servidorBD,$UsuarioBD,$ContraBD,$NombreBD);
$idioma = mysqli_set_charset($conect,"utf8");
?>