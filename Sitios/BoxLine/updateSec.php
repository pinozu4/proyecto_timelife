<?php

$perso = $_FILES["personajes"];
$inf = $_FILES["info"];
$imp = $_POST["casco"];
$reg = $_FILES["reglas"];
$id = $_POST["identidad"];
$sec = $_POST["seccion"];
$his = $_POST["historia"];
$error = $_FILES["personajes"]["error"];

require "php/conexion.php";


if ($perso["error"] == "0") {
  if (($perso["type"] == "image/jpeg" || $perso["type"] == "image/png") && ($inf["type"] == "image/jpeg" || $inf["type"] == "image/png") && ($reg["type"] == "image/jpeg" || $reg["type"] == "image/png")){
    if (($perso["size"] <= 2100000) && ($inf["size"] <= 2100000) && ($reg["size"] <= 2100000)){
      move_uploaded_file($perso["tmp_name"], "img/" . $perso["name"]);
      move_uploaded_file($inf["tmp_name"], "img/" . $inf["name"]);
      move_uploaded_file($reg["tmp_name"], "img/" . $reg["name"]);
      $ruta = "img/" . $perso["name"];
      $ruta2 = "img/" . $inf["name"];
      $ruta3 = "img/" . $reg["name"];
      $sql= "UPDATE secciones SET seccion='$sec', historia='$his', personaje='$ruta',infografia='$ruta2',implementos='$imp',reglas='$ruta3' WHERE idSec='$id'";
      //header("Location: editor.php");
      echo  "<script> location.href='listaUsuarios.php' </script>";

      $resultado = mysqli_query($conexion, $sql);
    }else {
      //header("Location: editar.php?error3=dato&idEditar= $id");
      echo  "<script> location.href='editar.php?error3=dato&idEditar= $id' </script>";
    }
  }else {
    //header("Location: editar.php?error2=dato&idEditar= $id");
    echo  "<script> location.href='editar.php?error2=dato&idEditar= $id' </script>";
  }
}else if ($error != "1") {
  $sql= "UPDATE secciones SET seccion='$sec', historia='$his',  infografia='$ruta2',implementos='$imp',reglas='$ruta3' WHERE idSec='$id'";
  $resultado = mysqli_query($conexion, $sql);
}else {
  echo "no3";
  //header("Location: editar.php?error=dato&idEditar= $id");
  echo  "<script> location.href='editar.php?error=dato&idEditar= $id' </script>";
}

?>
