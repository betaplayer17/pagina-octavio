<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Administrador</title>
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
               <li><a href="insertarJuegos.php">Insertar Juegos</a></li>
                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                <li><a href="desconectar.php"> Cerrar Cesión </a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="col-md-12 col-sm-12 col-xs-12">
  <h2 class="text-info">Administración de juegos</h2>
  <hr class="soften"/>
   <div class="well">
    <?php
				require("connect_db2.php");
				$sql=("SELECT * FROM juegos");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
                echo "<div class='table-responsive''>";
				echo "<table class='table table-hover table-bordered';>";
					echo "<tr class='warning text-center'>";
						echo "<td>Id</td>";
						echo "<td>Titulo</td>";
						echo "<td>Año</td>";
						echo "<td>Genero</td>";
						echo "<td>Tamaño</td>";
                        echo "<td>Editor</td>";
                        echo "<td>Plataforma</td>";
                        echo "<td>Imagen</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
			?>
        <?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success text-center'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
                        echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        echo "<td>$arreglo[7]</td>";
				    	echo "<td class='text-center'><a href='actualizar.php?id=$arreglo[0]'><span class='glyphicon glyphicon-refresh'></span></td>";
						echo "<td class='text-center'><a href='admin.php?id=$arreglo[0]&idborrar=2'><span class='glyphicon glyphicon-trash'></span></a></td>";						
					echo "</tr>";
				}
				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM juegos WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("VIDEOJUEGO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='mostrarJuegos.php'</script>";
					}

			?>
    </div>
</div>
<hr class="soften"/>

<footer class="footer">
<p class="cop">&copy; Brian, Esteban, Josue, Kevin</p>
</footer>

</body>
</html>