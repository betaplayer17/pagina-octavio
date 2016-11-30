<!DOCTYPE html>
<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
	
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <title>Pagina Perrona Lince</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="principal.php">JuegosChidos.com</a> </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="principal.php">Inicio</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plataforma <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="genXbox360.html">Xbox 360</a></li>
                            <li><a href="platPC.html">PC</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Genero <b class="caret"></b>
        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">FPS</a></li>
                            <li><a href="#">RPG</a></li>
                            <li><a href="#">Acción</a></li>
                            <li><a href="#">Plataforma</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Descargas</a></li>
                    <li><a href="">Donaciones :v</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search" action="buscar.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar"> </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search k92"> Buscar</span></button>
                </form>
               <ul class="nav navbar-nav navbar-right">
                   
                    <li><a href="desconectar.php"><span class="glyphicon glyphicon-log-out">Salir</span></a></li>
                </ul>
            </div>
        </nav>
        <!--Contenedor debajo del navbar-->
        <div class="container cont">
            <center>
                <a href="#" title="Juegos Perrones Lince"><img src="imagenes/V_logo.png" class="img responsive" alt=""></a>
            </center>
        </div>
    </header>

    <div class="col-md-10 articulos biselado">
       <center><div class="tituloPagina"><h2>Noticias</h2></div></center>
        <div class="col-md-12">
            <center> <img src="imagenes/resident_evil_7.jpg" class="img-responsive img-rounded"></center>
            <h3 class="title">Resident Evil 7: Se filtra una edición para coleccionistas ¡que no incluye el juego!</h3>
            <p class="text-justify">La división italiana de GameStop ofrece la posibilidad de reservar una edición para coleccionistas del prometedor Resident Evil 7 cargada de grandes extras pero que, sorprendentemente, ¡no incluye el juego!
                <br> Siempre atendiendo a la información de la tienda, que no ha sido confirmada por la propia Capcom, esta edición especial para PC, Xbox One y PS4 se vendería por 99,98 euros y como gran atractivo, viene acompañada de una maqueta de la casa donde se desarrolla la acción de esta nueva aventura de terror con unas dimensiones de 25 x 23,7 x 17,1 centímetros.
                <br> Los fans de Resident Evil también tendrían acceso a un libro de arte en el que se repasarían los 20 años de historia de la franquicia, un pendrive de 16GB con forma de dedo, cinco litografías y contenido descargable exclusivo.
                <br> Esta edición especial parece exclusiva de GameStop. Sin anuncio oficial por parte de Capcom, no está claro si también se pondrá a la venta en España. El videojuego, os recordamos, se estrena el próximo 24 de enero.</p>
            <p class="text-success">Publicado por Kevin Valencia Cruz</p>
        </div>
        <div class="col-md-12">
            <center><img src="imagenes/the_elder_scrolls_v_skyrim__special_edition-3566447.jpg" class="img-responsive img-rounded"></center>
            <h3 class="title">Skyrim: Special Edition recibe la actualización 1.2 en PC y PS4</h3>
            <p class="text-justify">Los problemas generados por la última actualización de The Elder Scrolls V: Skyrim - Special Edition deberían ser resueltos con el nuevo parche que Bethesda acaba de estrenar en PC y PS4, y planea hacer también en Xbox One a finales de esta misma semana.
                <br> Con esta versión 1.2, que durante los últimos días ha estado en fase de pruebas beta en compatibles, se mejora el rendimiento de esta aventura de rol y se resuelven también los diversos errores que afectaban al juego hasta la fecha. Gracias a esta actualización se ha mejorado además el navegador para visualizar mods dentro del juego.
                <br> Prácticamente desde su lanzamiento el pasado 28 de octubre, la remasterización del fantástico Skyrim se ha visto afectada por problemas de rendimiento y errores que han dificultado el pleno disfrute de los aficionados.
                <br> </p>
            <p class="text-success">Publicado por Kevin Valencia Cruz</p>
        </div>
    </div>
    <footer> </footer>
</body>

</html>