<?php

  $idSeccion = $_GET['idEditar'];
  require "php/conexion.php";
  $sql = "SELECT * FROM secciones WHERE idSec='$idSeccion'";
  $resultado = mysqli_query($conexion, $sql);
  $row = mysqli_fetch_array($resultado);

  session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosEditar.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/codigo.min.js"></script>

    <title><?php echo "Edicion de " . $row["seccion"] ?></title>
    <link rel="icon" href="img/icono/logo.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <div class="menu fondo">
      <a href="logout.php" class="btn btnCU btn-outline-light float-right w-10">Cerrar sesión</a>
    </div>

        <div class="jum jumbotron jumbotron-fluid">
          <div class="container">
            <form action="updateSec.php" method="post" enctype="multipart/form-data">
              <h3>Personajes</h3>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="personajes" accept="image/*" value="<?php echo $row['personaje'] ?>">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                <p class="text-center alert-danger" role="alert">
                  <?php
                    if (isset($_GET["error"])) {
                      echo "seleccione una imagen de menor peso y tamaño";
                    }else if (isset($_GET["error2"])) {
                      echo "seleccione una imagen";
                    }else if (isset($_GET["error3"])) {
                      echo "seleccione una de menor peso";
                    }
                  ?>
                </p>
              </div>
              <h3>Infografia</h3>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="info" accept="image/*" value="<?php echo $row['infografia'] ?>">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                <p class="text-center alert-danger" role="alert">
                  <?php
                    if (isset($_GET["error"])) {
                      echo "seleccione una imagen de menor peso y tamaño";
                    }else if (isset($_GET["error2"])) {
                      echo "seleccione una imagen";
                    }else if (isset($_GET["error3"])) {
                      echo "seleccione una de menor peso";
                    }
                  ?>
                </p>
              </div>
              <h3>Implementos</h3>
              <div class="form-group">
                <label for="exampleFormControlTextarea5">Casco</label>
                <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="casco" style="max-height: 101px; min-height: 101px;"><?php echo $row['implementos'] ?></textarea>
              </div>
              <h3>Reglas</h3>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="reglas" accept="image/*"value="<?php echo $row['reglas'] ?>">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                <p class="text-center alert-danger" role="alert">
                  <?php
                    if (isset($_GET["error"])) {
                      echo "seleccione una imagen de menor peso y tamaño";
                    }else if (isset($_GET["error2"])) {
                      echo "seleccione una imagen";
                    }else if (isset($_GET["error3"])) {
                      echo "seleccione una de menor peso";
                    }
                  ?>
                </p>
              </div>
              <div class="form-row justify-content-center">
                <div class="col">
                  <input class="btn btn-outline-light w-100" style="margin-top: 5%;" type="submit">
                </div>
                <div class="col">
                  <a href="listaUsuarios.php" class="btn btn-outline-light w-100" style="margin-top: 5%;"> Cancelar </a>
                </div>
                <input type="hidden" name="identidad" value="<?php echo $row['idSec'] ?>">
                <input type="hidden" name="seccion" value="<?php echo $row['seccion'] ?>">
                <input type="hidden" name="historia" value="<?php echo $row['historia'] ?>">
              </div>
            </form>
          </div>
        </div>
  </body>
</html>
