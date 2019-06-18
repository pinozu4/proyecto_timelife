<?php 
$Nom = $_POST['Usuario'];
$Cont = $_POST['Contra'];

//Conexion
require "php/conexion.php";
$Sql= "SELECT * FROM admin WHERE usuario_log='$Nom' AND contra_log = '$Cont' ";
$Result= mysqli_query($conect,$Sql) ;

$Contador= mysqli_num_rows($Result);


if ($Contador == 1) {
	session_start();
	$_SESSION['User'] = $Nom;
	header("Location:admin.php");
	//echo"<script>location.href='Editar.php'</script>";
}
else{
	header("Location:Login.php?error=dato");
	//echo"<script>location.href='Index.php?error=dato'</script>";
}
mysqli_close($conect);

?>