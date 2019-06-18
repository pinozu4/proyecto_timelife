<?php 

require "php/conexion.php";

$sql = "SELECT * FROM secciones";
$result = mysqli_query($conect,$sql);

// file_get_contents( "https://juegonado.000webhostapp.com/conexion2.php");

require "php/conexion2.php";

?>



<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preload" href="css/estilos.css" as="style">
    <link rel="preload" href="css/bootstrap.min.css" as="style">
    <link rel="preload" href="css/animate.css" as="style">
    <link rel="preload" href="js/codigo.js" as="script">
    <link rel="preload" href="js/jquery.js" as="script">
    <link rel="preload" href="js/parallax.js" as="script">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico.ico.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>AquaSyncs</title>
</head>

<body class="scroll">
      <div class="wait"><img class="logowait animated pulse flip infinite" src="img/logo2.png"></div>

    <div class="lightbox">
        <div class="cuadrolight">
            <div class="cerrar1 animated pulse infinite"><h3 class="equix">X</h3>
            </div>
            <div class="cajalight1"><h6 class="quetitle">¿Qué es el nado sincronizado?</h6><p class="quetext">Es un deporte que se practica en una piscina combinando natación, gimnasia y danza. Un nadador o equipo de nadadores realiza una coreografía acompañada de música y unos jueces puntúan una serie de parámetros: dificultad y originalidad de los movimientos, sincronía entre movimientos y música, en definitiva la calidad técnica y artística.
            Se podría afirmar que esta disciplina es un baile con movimientos gimnásticos realizados en el medio acuático. Se compite en categorías distintas y en modalidad individual, de dúo o por equipos.</p></div>
        </div>
    </div>

<header class="cabecera animated bounceOut">
    <img class="logo" src="img/logo2.png"></header>
    <div class="nosotroslight animated bounceInDown"><h3 class="nosoli">¿Qué<br>somos?</h3></div>
    <div class="nostig"><div class="firstnos"><h3 class="nostigtext">AquaSyncs</h3><p class="nostigpar">AquaSyncs es un proyecto sobre el nado sincronizado con el objetivo de informar al usuario acerca de la historia de este deporte. Esta página se presenta en forma de Timeline en la que se muestra la cronología del nado sincronizado.
    Nosotros queremos lograr que los usuarios que naveguen por nuestra página, aprendan y se animen a conocer más sobre este deporte.</p><h3 class="advertext">(Presiona en cualquier parte para cerrar)</h3></div><div class="imgnos1"><img src="img/noslight_1.jpg" width="1280px" height="740px"></div></div>
    <div class="us">
        <i class="flecha fas fa-arrow-right"></i>
        <i style="display: none" class="flecha fas fa-arrow-left"></i>
    </div>
    <div class="us2">
        <div class="mail1" data-toggle="modal" data-target="#exampleModal1" tooltip="Slide to the left"><i class="fas fa-envelope"></i></div>
        <h3 class="nous">Desarrolladores</h3><a class="nosS" href="#aNosotros"><div class="nous1"><i class="fas fa-angle-down"></i></div></a></div>
        <div class="años">
            <ul>
                <li class="uno"><a href="#a1891"><h3 class="uno1">1891</h3></a><hr class="loco"></li>
                <li class="dos"><a href="#a1907"><h3 class="dos1">1907</h3></a><hr class="loco"></li>
                <li class="tres"><a href="#a1924"><h3 class="tres1">1924</h3></a><hr class="loco"></li>
                <li class="cuatro"><a href="#a1934"><h3 class="cuatro1">1934</h3></a><hr class="loco"></li>
                <li class="cinco"><a href="#a1950"><h3 class="cinco1">1950</h3></a><hr class="loco"></li>
                <li class="seis"><a href="#a1955"><h3 class="seis1">1955</h3></a><hr class="loco"></li>
                <li class="siete"><a href="#a1984"><h3 class="siete1">1984</h3></a><hr class="loco"></li>

            </ul>
        </div>

<ul class="SeccionesDesplazadas">
    <li class="light2"><div class="gamebox d-flex justify-content-center align-items-center">
        <!-- ------------------------Aquí va click de juego----------------- -->
        <img src="img/UI.png" width="350px" height="250px" class="animated pulse infinite">
        <a href="juego.html" target="blank" class="btn btn-danger animated pulse infinite">Click Aquí para Jugar</a>
    </div>
    <div class="infoR">
    <div class="container pt-2 pb-2" style="text-align: center; color: #ff2c2c; font-weight: 600;">Tabla de Marcadores</div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="container pt-2 pb-2" style="text-align: center; background-color: #ff2c2c; color: white; font-weight: 600;">Nivel 1</div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" style="color: #ff2c2c;">Nombre</th>
                    <th scope="col" style="color: #ff2c2c;">Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row2 = mysqli_fetch_array($result2)){
                        echo "<tr><td>".$row2['nombre']."</td><td>".$row2['score']."</td></tr>";}
                    ?>
                </tbody>
            </table>
            </div>
            <div class="carousel-item">
            <div class="container pt-2 pb-2" style="text-align: center; background-color: #ff2c2c; color: white; font-weight: 600;">Nivel 2</div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" style="color: #ff2c2c;">Nombre</th>
                    <th scope="col" style="color: #ff2c2c;">Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row3 = mysqli_fetch_array($result3)){
                        echo "<tr><td>".$row3['nombre']."</td><td>".$row3['score']."</td></tr>";}
                    ?>
                </tbody>
            </table>
            </div>
            <div class="carousel-item">
            <div class="container pt-2 pb-2" style="text-align: center; background-color: #ff2c2c; color: white; font-weight: 600;">Nivel 3</div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" style="color: #ff2c2c;">Nombre</th>
                    <th scope="col" style="color: #ff2c2c;">Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row4 = mysqli_fetch_array($result4)){
                        echo "<tr><td>".$row4['nombre']."</td><td>".$row4['score']."</td></tr>";}
                    ?>
                </tbody>
            </table>
            </div>
            <div class="carousel-item">
            <div class="container pt-2 pb-2" style="text-align: center; background-color: #ff2c2c; color: white; font-weight: 600;">Nivel 4</div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" style="color: #ff2c2c;">Nombre</th>
                    <th scope="col" style="color: #ff2c2c;">Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row5 = mysqli_fetch_array($result5)){
                        echo "<tr><td>".$row5['nombre']."</td><td>".$row5['score']."</td></tr>";}
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="align-items: flex-start !important; margin-top:6px !important;">
            <i class="fas fa-angle-left" style="font-size: 30px;"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="align-items: flex-start !important; margin-top:6px !important;">
            <i class="fas fa-angle-right" style="font-size: 30px;"></i>
        </a>
    </div>
        <!-- <h3 class="infotext1">"En busca del Nado"</h3><h6 class="infotext2">Adalia es una chica de 19 años, obediente, perseverante, perspicaz, inteligente y apasionada en lo que hace, es amigable, alegre, sociable, y decisiva.
            <br>Resulta que alguien le tenía envidia y le hurtó
            sus implementos del Baile Acuático.<br>Tu misión es ayudar a Adalia a encontrarlos para que pueda prácticar de nuevo sus hermosas rutinas.</h6> -->
    </div>
        </li>
        <li class="light2_1">
            <div class="gamebox_1">
                <div id="carouselExampleControls" class="carousel slide annS" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <h1 style="text-align: center; color: #005a6d;">"Pasos para la Realidad Aumentada"</h1><h3 style="text-align: center; color: #ee5253">Paso 1:</h3><p style="text-align: center;" class="w-75">Descarga el siguiente archivo e instálalo en tu móvil</p>
                        <div style= "display: flex; justify-content: space-around; align-items: center; flex-direction: column;"><img src ="img/cell.png" width ="250px" height = "250px"><br>
                        <a href="js/AnnetteAR.apk" download="AnnetteAR" class="btn btn-success"><i class="fab fa-android" style="font-size: 15px;"></i> Descargar APK</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <h1 style="text-align: center; color: #005a6d;">"Pasos para la Realidad Aumentada"</h1><h3 style="text-align: center; color: #ee5253">Paso 2:</h3><p style="text-align: center;" class="w-75">Abre la aplicación desde tu móvil</p>
                        <div style= "display: flex; justify-content: space-around; align-items: center; flex-direction: column;"><img src ="img/cell2.png" width ="215px" height = "315px">
                        </div>
                    </div>
                    <div class="carousel-item">
                      <h1 style="text-align: center; color: #005a6d;">"Pasos para la Realidad Aumentada"</h1><h3 style="text-align: center; color: #ee5253">Paso 3:</h3><p style="text-align: center;" class="w-75">Con la cámara enfoca la siguiente imagen:</p>
                        <div style= "display: flex; justify-content: space-around; align-items: center; flex-direction: column;"><img src ="img/logo2.png" width ="315px" height = "315px">
                        </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fas fa-angle-left" style="font-size: 30px; color: black;"></i>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-angle-right" style="font-size: 30px; color: black;"></i>
                  </a>
                </div>
            </div>
            <div class="infoR_1">
                <h3 class="infotext1_1">"Annette Kellerman"</h3>
                <h6 class="infotext2_1">En 1907 Anette queria popularizar el nado sincronizado ya que
                    aún no era tan trascendente en la sociedad
                    entonces creó un grupo con varias chicas y pensaron que hacer para poder popularizarlo.<br>Después de pensar varios días se les vino la gran idea de bailar en un tanque de vidrio en new york, pues seria fuera de lo común y su presentación fue un éxito. 
                    </h6>
                </div>
                </li>
                <li class="light2_2">
                    <div class="gamebox_2">
                        <video controls width="100%">
                            <source src="videos/peg.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                </div>
                <div class="infoR_2">
                    <h3 class="infotext1_2">"Un sueño cumplido"</h3><h6 class="infotext2_2">Peg a la edad de 14 años era muy ágil para el nado, es más
                        era de las mejores en la clase ya que podía hacer muchas series de movimientos complicados que llevaban mucho tiempo de práctica, todo esto era posible por el amor que sentía al
                    practicar este deporte, nada la limitaba para nada y dia a dia se esforzaba para ser la mejor.</h6></div>
                </li>
                <li class="light2_3">
                    <div class="gamebox_3">
                        <video controls width="100%">
                        <source src="videos/katherine.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>    
                    </div>
                </div>
                <div class="infoR_3">
                    <h3 class="infotext1_3">"Las Sirenas Modernas"</h3><h6 class="infotext2_3">Katherine, Gaby y Bonnie son un grupo de amigas aficionadas a la natación, muy buenas, veloces, ágiles y flexibles.
                    Katherine aparte de ser buena en la natación, era buena en el baile. Querían hacer algo muy diferente y de Repente a Gaby se le ocurre desarrollar una coreografía con algunos movimientos de baile y fueron llamadas "Las Sirenas Modernas".</h6></div>
                </li>
                <li class="light2_4">
                    <div class="gamebox_4">
                        <video controls width="100%">
                        <source src="videos/esther.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video> 
                    </div>
                </div>
                <div class="infoR_4">
                    <h3 class="infotext1_4">"Esther Williams"</h3><h6 class="infotext2_4">En el año 1942, intervine en mi primera película que se llamó “Andy Hardy's Double Life”, donde interpretó el papel de Sheila Brooks, junto a Mickey Rooney y Cecilia Parker.
                    George Sidney me ofreció, en el año 1944, una gran oportunidad en la película Escuela de sirenas, un musical distinto hasta la fecha, ya que tiene como escenario el agua, y es la película con que me comencé a conocer mundialmente.</h6></div>
                </li>



            <li class="light2_5">
                <div class="gamebox_5">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="false">
                          <img src="img/infografia_1.jpg" class="d-block w-100" alt="infografia_1.jpg">
                      </div>
                      <div class="carousel-item" data-interval="2000">
                          <img src="img/infografia_2.jpg" class="d-block w-100" alt="infografia_2.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_3.jpg" class="d-block w-100" alt="infografia_3.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_4.jpg" class="d-block w-100" alt="infografia_4.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_5.jpg" class="d-block w-100" alt="infografia_5.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_6.jpg" class="d-block w-100" alt="infografia_6.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_7.jpg" class="d-block w-100" alt="infografia_7.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_8.jpg" class="d-block w-100" alt="infografia_8.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_9.jpg" class="d-block w-100" alt="infografia_9.jpg">
                      </div>
                      <div class="carousel-item">
                          <img src="img/infografia_10.jpg" class="d-block w-100" alt="infografia_10.jpg">
                      </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                       
                </div>
                <div class="infoR_5">
                    <h3 class="infotext1_5">"Reglamento"</h3><h6 class="infotext2_5">Finalmente en el año 1955 por un invento que realizó un señor empezó a darle orden a esta disciplina y a exigir muchas cosas porque al ver presentaciones sabía que le hacía falta algo para que tuviera un éxito rotundo en su historia.</h6>
                </div>
             </li>



                <li class="light2_6">
                    <div class="gamebox_6">
                    <video controls width="100%">
                        <source src="videos/olimpicos.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    </div>
                </div>
                <div class="infoR_6">
                    <h3 class="infotext1_6">"Introducción a los Juegos Olímpicos"</h3><h6 class="infotext2_6"> Soy Tracie Ruiz, y mi pasión siempre fue la natación...Desde niña he perseverado hasta llegar aquí, y gracias a la oportunidad de entrar con mi equipo, por el trabajo árduo, y el entrenamiento constante, pude cumplir mi sueño, fue gracias a Annette Kellerman que me inspiré para realizar este deporte, mi mamá me decía de niña que tenía gran talento para la danza y la natación.
                    </h6></div>
                </li>
            </ul>



                        <section class="contenedor2" id="a1891">
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="
                                    border-radius: 50px !important; 
                                    border:0px solid !important; 
                                    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
                                    background-image: url(img/texture.png);
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-attachment: fixed;">
                                  <div class="modal-header" style="color: black; border-bottom: 0px solid;">
                                    <h5 class="modal-title" style="color: #005a6d;">Registro</h5>
                              </div>
                              <div class="modal-body" style="color: black; font-size: 20px;">
                                <form action="registro.php" method="post">
                                  <div class="form-group">
                                    <label for="titulo">Nombre</label>
                                    <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Nombre">
                                    <label for="edad">Edad</label>
                                    <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo" name="correo">
                                </div>
                                <button type="submit" class="btn btn-primary">Registar</button>
                            </form>
                            <div class="cerrar1 animated pulse infinite" style="left:120% !important; top:-47px !important;" data-dismiss="modal"><h3 class="equix">X</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="
                    border-radius: 50px !important;
                    border:0px solid !important; 
                    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
                    background-image: url(img/texture.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;">
                  <div class="modal-header" style="color: black; font-size: 20px; border-bottom: 0px solid;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #005a6d;">Contacto</h5>
              </div>
              <div class="modal-body" style="color: black; font-size: 20px;">
              <p class="modal-text">Escríbenos tus sugerencias, dudas e inquietudes...</p>
                <form action="contact.php" method="post">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="correo">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="5" placeholder="Ingrese su mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <div class="cerrar1 animated pulse infinite" style="left:87% !important; top:-47px !important;" data-dismiss="modal"><h3 class="equix">X</h3></div>
        </div>
    </div>
</div>
</div>
<h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo'] ?></h3>
<div class="todoCon1">
    <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
    <div class="flotan2"><img src="<?php echo $row['img2']?>" width="300px" height="250px"></div>
    <div class="cont1">
        <div class="boton1"></div></div>
        <div class="textone"><h3 class="enter1"><?php echo $row['texto1'] ?></h3></div>
        <div class="open1"><div class="open1box"><h3 class="open1boxtext">Nacimiento</h3><p class="open1boxpar" >El primer registro de competición fue en 1891 en Berlín, Alemania. Muchos clubes se crearon en esa época y el deporte se fue desarrollando en varios países.</p><div class="open1img"><img src ="img/open1.jpg" width = "310px" height = "230px"></div></div></div>
        <div class="textree"><h3 class="enter3"><?php echo $row['texto2'] ?></h3></div>
        <div class="open2"><div class="open2box"><h3 class="open2boxtext">Ballet Acuático</h3><p class="open2boxpar">Unos grupos de nadadores comenzaron
        a realizar figuras en piscinas utilizando técnicas de natación, dando pie al nombre de “ballet acuático”.</p><div class="open2img"><img src ="img/open1_6.jpg" width = "310px" height = "230px"></div></div></div>
    </div>
    <div class="circlelight">
        <h3 class="textlight"><i class="fas fa-arrow-right"></i></h3>
        <h3 class="textlight2"><i class="fas fa-arrow-left"></i></h3></div>

    </section>
    <section class="contenedor3" id="a1907"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?> </h3>
        <div class="todoCon1">
            <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
            <div class="flotan2"><img src="<?php echo $row['img2']?>" width="250px" height="250px" style="margin-left: -50px;"></div>
            <div class="cont1_1">
                <div class="boton1"></div></div>
                <div class="textone_1"><h3 class="enter1_1"><?php echo $row['texto1'] ?></h3></div>
                <div class="open1_1"> <div class="open1box_1"><h3 class="open1boxtext_1">Popularización</h3><p class="open1boxpar_1">Durante la escuela Mentone Girls Grammar School,  Kellermann realizó un acto de sirenas y dos shows nadando con peces en un tanque de vidrio en Exhibition Aquarium.</p><div class="open1img_1"><img src ="img/open1_1.jpg" width = "320px" height = "330px"></div></div></div>
                <div class="textree_1"><h3 class="enter3_1"><?php echo $row['texto2'] ?></h3></div>
                <div class="open2_1"><div class="open2box_1"><h3 class="open2boxtext_1">Defensora de mujeres</h3><p class="open2boxpar_1">Annette esperaba que las mujeres usaran pesadas prendas cuando nadaban. Kellerman fue arrestada en Revere Beach, Massachusetts, por indecencia. </p><div class="open2img_1"><img src ="img/open1_5.jpg" width = "310px" height = "420px"></div></div></div>
            </div>
        </section>

<section class="contenedor4" id="a1924"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?> </h3>
    <div class="todoCon1">
        <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px" style="margin-top: 0px;"></div>
        <div class="flotan2"><img src="<?php echo $row['img2']?>" width="300px" height="250px" style="margin-left: -40px;"></div>
        <div class="cont1_2">
            <div class="boton1"></div></div>
            <div class="textone_2"><h3 class="enter1_2"> 
                <?php echo $row['texto1'] ?></h3></div>
                <div class="open1_2"><div class="open1box_2"><h3 class="open1boxtext_2">¡Campeona!</h3><p class="open1boxpar_2">En 1924, la primera competición en Norte América fue en Montreal, Canadá, con Peg Seller como primera campeona. Muchas de las competiciones se desarrollaban en lagos y ríos.
                </p><div class="open1img_2"><img src ="img/open1_2.jpg" width = "310px" height = "350px"></div></div></div>


                <div class="textree_2"><h3 class="enter3_2"><?php echo $row['texto2'] ?></h3></div>
                <div class="open2_2"><div class="open2box_2"><h3 class="open2boxtext_2">Inicia la competencia</h3><p class="open2boxpar_2">Peg se lanza al agua y en ese preciso momento comienza a realizar movimientos nunca antes vistos, tanto que el jurado quedo impresionado y le dieron
                una muy buena calificación.</p><div class="open2img_2"><img src ="img/open1_4.jpg" width = "310px" height = "220px"></div></div></div></div></section>


<section class="contenedor5" id="a1934"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?></h3>
    <div class="todoCon1">
        <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
        <div class="flotan2"><img src="<?php echo $row['img2']?>" width="350px" height="250px" style="margin-left: -65px;"></div>
        <div class="cont1_3">
            <div class="boton1"></div></div>

            <div class="textone_3"><h3 class="enter1_3"><?php echo $row['texto1'] ?>

        </h3></div>
        <div class="open1_3"><div class="open1box_3"><h3 class="
            open1boxtext_3">Un gran espectáculo</h3><p class="open1boxpar_3">En 1933-1934 Katherine Curtis, organizó un espectáculo, "The Modern Mermaids", para la Feria Mundial en Chicago. El presentador lo anunció como "Natación Sincronizada".</p><div class="open1img_3"><img src ="img/open1_3.jpg" width = "310px" height = "320px"></div></div></div>

            <div class="textree_3"><h3 class="enter3_3"><?php echo $row['texto2'] ?></h3></div>
            <div class="open2_3"><div class="open2box_3"><h3 class="open2boxtext_3">Sirenas modernas</h3><p class="open2boxpar_3">Su nombre se le debe a la submarinista y gimnasta Katherine Curtis, quien se encargó de entrenar y crear la serie de movimientos que hizo famosas a las 60 “Sirenas Modernas”. </p><div class="open2img_3"><img src ="img/open1_7.jpg" width = "310px" height = "210px"></div></div></div>
        </div></section>








<section class="contenedor6" id="a1950"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?></h3>
    <div class="todoCon1">
        <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
        <div class="flotan2"><img src="<?php echo $row['img2']?>" width="300px" height="250px" style="margin-left: -40px;"></div>
        <div class="cont1_4">
            <div class="boton1"></div></div>

            <div class="textone_4"><h3 class="enter1_4">
               <?php echo $row['texto1'] ?>
           </h3></div>
           <div class="open1_4"><div class="open1box_4"><h3 class="open1boxtext_4">El espectáculo</h3><p class="open1boxpar_4">Famosa por sus musicales con espectáculos acuáticos. Fue una de las estrellas de la era dorada del cine.</p>
            <div class="open1img_4"><img src ="img/open1_8.jpg" width = "310px" height = "320px"></div></div></div>

            <div class="textree_4"><h3 class="enter3_4"> <?php echo $row['texto2'] ?>
        </h3></div>
        <div class="open2_4"><div class="open2box_4"><h3 class="open2boxtext_4">Nadadora</h3><p class="open2boxpar_4">Fue especialista en natación sincronizada, y habría participado en los Juegos Olímpicos de 1940.
        </p>
        <div class="open2img_4"><img src ="img/open1-9.jpg" width = "310px" height = "220px"></div></div></div></div></section>

<section class="contenedor7" id="a1955"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?></h3>

    <div class="todoCon1">
        <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
        <div class="flotan2"><img src="<?php echo $row['img2']?>" width="350px" height="250px"></div>
        <div class="cont1_5"><img class="rules" src ="img/reglas.png" width="300px" height="300px">
            <div class="boton1"></div></div>

            <div class="textone_5"><h3 class="enter1_5"> <?php echo $row['texto1'] ?></h3></div>

            <div class="open1_5"><div class="open1box_5"><h3 class="open1boxtext_5">Deporte</h3><p class="open1boxpar_5">Los nadadores deben formar una rutina al ritmo de la música. El deporte cuenta con modalidades: solo, dúo o grupo.</p><div class="open1img_5"><img src ="img/open1_10.jpg" width = "310px" height = "230px"></div></div></div>
            <div class="textree_5"><h3 class="enter3_5"><?php echo $row['texto2'] ?></h3></div>
            <div class="open2_5"><div class="open2box_5"><h3 class="open2boxtext_5">Reglas</h3><p class="open2boxpar_5">- No deben pasar más de 10 segundos fuera del agua.<br> - Los competidores no deben tocar el suelo de la piscina.</p><div class="open2img_5"><img src ="img/open1-11.jpg" width = "310px" height = "230px"></div></div></div>
        </div></section>

<section class="contenedor8" id="a1984"><h3 class = "mil1"><?php $row = mysqli_fetch_array($result); echo $row['titulo']?></h3>

    <div class="todoCon1">
        <div class="Pflotan"><img src="<?php echo $row['img1']?>" width="350px" height="250px"></div>
        <div class="flotan2"><img src="<?php echo $row['img2']?>" width="300px" height="250px" style="margin-left: -35px;"></div>

        <div class="cont1_6">
            <div class="boton1"></div></div>

            <div class="textone_6"><h3 class="enter1_6"><?php echo $row['texto1'] ?></h3></div>
            <div class="open1_6"><div class="open1box_6"><h3 class="open1boxtext_6">Personaje</h3><p class="open1boxpar_6">Tracie Ruiz se distingue porque no es egoísta y siempre trata bien a los demás.<br>Candy Costie es una joven extrovertida y no le gusta ser aburrida. </p><div class="open1img_6"><img src ="img/open_12.jpg" width = "310px" height = "220px"></div></div></div>

            <div class="textree_6"><h3 class="enter3_6"><?php echo $row['texto2'] ?></h3></div>
            <div class="open2_6"><div class="open2box_6"><h3 class="open2boxtext_6">Campeonato</h3><p class="open2boxpar_6"> en los juegos olímpicos de los Angeles-California, estoy en 1984, soy Tracie Ruiz, y mi pasión siempre fue la natación.</p><div class="open2img_6"><img src ="img/open_13.jpg" width = "330px" height = "170px"></div></div></div></div></section>









<section class="contenedor9" id="aNosotros"><h3 class="sectimg">DESARROLLADORES</h3>
    <!-- <ul class="cajaFotos">
        <li>
            <div><img class="F1" src="img/foto1.jpg" width="350px" height="200px"></div>
            <div><img class="F2" src="img/foto3.jpg" width="250px" height="270px"></div>
        </li>
        <li>
            <div><img class="F3" src="img/foto2.jpg" width="350px" height="270px"></div>
            <div><img class="F4" src="img/foto4.jpg" width="250px" height="270px"></div>
        </li>
    </ul> -->
    <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <div class="card m-4" style="width: 18rem;">
          <div style="overflow: hidden; height: 250px;"><img class="card-img-top" src="img/manuela.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h5 class="card-title" style="color: black;">Manuela Alzate</h5>
            <p class="card-text" style="font-size: 20px; color: black;">Soy una chica decidida y creativa</p>
          </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
           <div style="overflow: hidden; height: 250px;"><img class="card-img-top" src="img/dani.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h5 class="card-title" style="color: black;">Daniel Ramírez</h5>
            <p class="card-text" style="font-size: 20px; color: black;">Me encanta la producción audiovisual!</p>
          </div>
        </div>
    </div>
    <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <div class="card m-4" style="width: 18rem;">
           <div style="overflow: hidden; height: 250px;"><img class="card-img-top" src="img/cristian.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h5 class="card-title" style="color: black;">Cristian Marín</h5>
            <p class="card-text" style="font-size: 20px; color: black;">Si se puede imaginar, se puede programar</p>
          </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
           <div style="overflow: hidden; height: 250px;"><img class="card-img-top" src="img/alejo.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h5 class="card-title" style="color: black;">Alejandro Gómez</h5>
            <p class="card-text" style="font-size: 20px; color: black;">El diseño es mi pasión</p>
          </div>
        </div>
    </div>
</section>
<footer id="footer" id="aFooter"><a class="subirS" href="#a1891"><div class="logored"></div></a>
    <div class="datosF">
        <p class="correo1">Correo: aquasyncsweb@gmail.com<br><br><br>Cel: 301 - 245 - 17 - 02<br><br><br>©AquaSyncs - Todos los derechos reservados.
        </p>
    </div>
</footer>
<script defer src="js/jquery-3.3.1.min.js"></script> 
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/jquery.easing.min.js"></script> 
<script defer src="js/codigo.js"></script>
<script defer src="js/jquery.js"></script>
<script defer src="js/parallax.js"></script>

</body>
</html>

<!--<h3 class="manu1">Manuela Alzate</h3><p class="manutext1">Bailarina apasionada</p>
<h3 class="dani1">Daniel Ramírez</h3><p class="danitext1">Artista perseverante</p>
<h3 class="cristian1">Cristian Marín</h3><p class="cristiantext1">Diseñador con estilo</p>
<h3 class="alejo1">Alejandro Gómez</h3><p class="alejotext1">Productor dedicado</p>-->
