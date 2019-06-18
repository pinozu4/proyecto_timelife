<?php
$Tit = $_POST["titulo"];
$Cont = $_POST["texto"];
$id = $_POST["identidad"];

require "php/conexion.php";
$Sql = "UPDATE secciones SET  titulo='$Tit',texto='$Cont' WHERE id = '$id' ";

$Result = mysqli_query($conect,$Sql);

header("location:Secciones.php");

?>