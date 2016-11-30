<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <title>Administrador</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        body {
            background: url(imagenes/log.jpg)no-repeat center fixed;
            background-size: cover;
        }
        
        .padd{
            margin-top: 2.5%;
            margin-bottom: 2%;
            border: 2px solid black;
            border-radius: 10px;
        }
        
        #form{
            background-color: #ffffff;
            opacity: 1.5;
            padding-top: 10px;
        }
        
        .cop{
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="admin.php">Administrador</a> </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                <li><a href="desconectar.php"> Cerrar Cesión </a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="col-md-12 col-sm-12 col-xs-12">
<h2 class="text-info">Edicion de usuarios</h2>
     <hr class="soften"/>
              		<?php
		extract($_GET);
		require("connect_db2.php");

		$sql="SELECT * FROM login WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
}
?>
<form action="ejecutaactualizar.php">
    <div class="form-horizontal  col-md-12 col-sm-12 col-xs-12 padd" role="form" id="form">
       <div class="form-group">
            <label class="col-md-2 control-label">ID:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">usuario:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="user" value="<?php echo $user?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Password:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="pass" value="<?php echo $pass?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Correo:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="email" value="<?php echo $email?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Password Admin:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="pasadmin" value="<?php echo $pasadmin?>">
                </div>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-success col-md-3 col-md-offset-5 pad" name="submit" value="guardar"> <span class="glyphicon glyphicon-check"> Actualizar</span></button>
            </div>
        </div>
</form>
</div>
<hr class="soften"/>
<footer class="footer">
<hr class="soften"/>
<p class="cop">&copy; Kevin Valencia, Brian Rubio</p>
 </footer>
  </body>
</html>


