<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Juegos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
   <header class="header">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="admin.php">Administrador</a> </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="insertarJuegos.php">Editar Juegos Juegos</a></li>
                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                <li><a href="desconectar.php"> Cerrar Cesión </a></li>
            </ul>
        </div>
    </nav>
</header>
   <form action="guardar_foto.php" method="post" enctype="multipart/form-data">
       <div class="col-md-12 col-sm-12 col-xs-12 form-horizontal">
           <legend class="text-center legend">Registro de Juegos</legend>
           <div class="form-group">
            <label class="col-md-2 control-label">Titulo:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="titulo" placeholder="Nombre del juego">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Año:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="año" placeholder="Año de salida">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Genero:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="genero" placeholder="Tipo de juego">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Tamaño:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="tamaño" placeholder="Peso del juego">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Editor:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="editor" placeholder="Desarrolador del juego">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Plataforma:</label>
            <div class="col-md-8">
            <input type="text" class="form-control" name="plataforma" placeholder="Consola o PC">
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Imagen del juego:</label>
            <div class="col-md-4">
            <input type="file" name="archivo">
            </div>
            </div>
            <div class="form-group">
            <button type="submit" type="submit" class="btn btn-success col-md-3 col-md-offset-5 pad" name="almacenar"> <span class="glyphicon glyphicon-check"> Insertar juego</span></button>
            </div>
       </div>
   </form>
</body>
</html>