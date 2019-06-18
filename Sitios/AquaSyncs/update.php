<?php 

$ident = $_POST["ident"];
$titulo = $_POST["titulo"];
$texto1 = $_POST["texto1"];
$texto2 = $_POST["texto2"];

$foto = $_FILES["img1"];
$foto2 = $_FILES["img2"];

if($foto["error"] == 0){
    echo "No hay errores<br>";
    if($foto["type"] == "image/jpeg" || $foto["type"] == "image/png" || $foto["type"] == "image/jpg"){
        echo "La imagen es correcta<br>";
        if($foto["size"] <= 200000000){
            echo "El peso es correcto<br>";
            move_uploaded_file($foto["tmp_name"], "img/". $foto["name"]);/*coloca un archivo de una ruta temporal a la carpeta que se desea*/
        }else{
            echo "Excede el peso permitido";
        }
    }else{
        echo "El formato es incorrecto<br>";
    }
}else{
    echo "ERROR<br>";
}

if($foto2["error"] == 0){
    echo "No hay errores<br>";
    if($foto2["type"] == "image/jpeg" || $foto2["type"] == "image/png" || $foto2["type"] == "image/jpg"){
        echo "La imagen es correcta<br>";
        if($foto2["size"] <= 200000000){
            echo "El peso es correcto<br>";
            move_uploaded_file($foto2["tmp_name"], "img/". $foto2["name"]);/*coloca un archivo de una ruta temporal a la carpeta que se desea*/
        }else{
            echo "Excede el peso permitido";
        }
    }else{
        echo "El formato es incorrecto<br>";
    }
}else{
    echo "ERROR<br>";
}

$ruta1 = "img/" . $foto["name"];
$ruta2 = "img/" . $foto2["name"];

$fotoAgregar;

require "php/conexion.php";

//SI ADJUNTO LA PRIMERA FOTO
if( $foto["error"] == 0){
	$fotoAgregar = ", img1 = '$ruta1'";
}
if ($foto2["error"] == 0) {
	$fotoAgregar .= ", img2 = '$ruta2'";
}

//SI ADJUNTO LA FOTO

$sql = "UPDATE secciones SET titulo ='$titulo' $fotoAgregar, texto1 = '$texto1', texto2 = '$texto2' WHERE id='$ident'";


$result = mysqli_query($conect,$sql);
header("location: admin_sesiones.php?idUser=$ident");

?>