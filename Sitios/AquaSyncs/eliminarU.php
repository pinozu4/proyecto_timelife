<?php 

$idUser = $_GET["idUser"];

require "php/conexion.php";

$sql = "DELETE FROM registro WHERE id = '$idUser'";
$result = mysqli_query($conect,$sql);
header("location: admin.php");



?>