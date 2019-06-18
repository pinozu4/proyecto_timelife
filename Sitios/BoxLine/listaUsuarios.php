<?php

require 'php/conexion.php';

$sql = " SELECT * FROM usuarios";
$sql2= " SELECT * FROM secciones";
$result = mysqli_query($conexion,$sql);
$result2 = mysqli_query($conexion,$sql2);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilosFormulario.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/codigo.min.js"></script>

  <title>Usuarios Registrados</title>
  <link rel="icon" href="img/icono/logo.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
  <body>
    <section class="jumbotron w-75 justify-content-center ListaUsuarios">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo electronico</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Enviar correo</th>
    </tr>
  </thead>
  <?php
	while ($row = mysqli_fetch_array($result)){
		echo "<tbody>";

		echo "<tr>";

		echo "<td>" . $row['nombre'] . "</td>";

    echo "<td>" . $row['usuario'] . "</td>";

    echo "<td>" . $row['correo'] . "</td>";

    echo "<td>" . $row['fecha'] . "</td>";

		echo "<td><a href='editorUsuario.php?idEdit=" . $row['id'] . "' class='btn btn-warning'>Editar</a></td>";

		echo "<td><a href='eliminarUsuario.php?idEliminar=" . $row['id'] . "' class='btn btn-danger'>Eliminar</a></td>";

    echo "<td><a href='formularioContacto.php?idContacto=" . $row['id'] . "' class='btn btn-primary'>Enviar correo</a></td>";

		echo "</tr>";

		echo "</tbody>";
	}
	?>

</table>
</section>
<section class="jumbotron w-75 justify-content-center ListaUsuarios" style="margin-top: 5%;">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Editar</th>

      </tr>
    </thead>
    <?php
    while ($row1 = mysqli_fetch_array($result2)){
      echo "<tbody>";

      echo "<tr>";

      echo "<td>" . $row1['seccion'] . "</td>";

      echo "<td><a href='editar.php?idEditar=" . $row1['idSec'] . "' class='btn btn-warning'>Editar</a></td>";

      echo "</tr>";

      echo "</tbody>";
    }
    ?>
  </table>
  <a href="index.html" class="btn btn-light w-100"> Volver </a>
</section>

  </body>
</html>
