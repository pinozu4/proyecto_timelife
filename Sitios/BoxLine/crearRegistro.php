<?php

$nombre = $_POST["nombre"];
$usuarioR = $_POST["usuarioR"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];

require ('php/conexion.php');

$sql = "INSERT INTO usuarios (id, nombre, usuario, correo, fecha) VALUES (NULL,'$nombre','$usuarioR','$correo','$fecha')";

$result = mysqli_query($conexion, $sql);

echo "<script> location.href='listaUsuarios.php' </script>";

?>
