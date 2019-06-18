<?php

$eliminar = $_GET["idEliminar"];

require 'php/conexion.php';

$sql = "DELETE FROM usuarios WHERE id='$eliminar'";
$result = mysqli_query($conexion, $sql);

echo "<script> location.href='listaUsuarios.php' </script>";

?>
