<?php
require "datos.php";

$conect =  mysqli_connect  ($servidorBD, $usuarioBD, $ContraBD, $nombreBD);
$idioma= mysqli_set_charset($conect,"utf8");


?>