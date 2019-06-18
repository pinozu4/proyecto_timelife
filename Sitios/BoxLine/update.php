<?php

$id  =$_POST["id"];

$nombre = $_POST["nombre"];
$usuarioR = $_POST["usuarioR"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];

require 'php/conexion.php';

$sql = "UPDATE `usuarios` SET `nombre`='$nombre',`usuario`='$usuarioR',`correo`='$correo',`fecha`='$fecha' WHERE id='$id'";

 $result = mysqli_query($conexion, $sql);

echo "<script> location.href='listaUsuarios.php' </script>";
?>
