<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Juegos Chidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot">
    <style>
        body {
            background: url(imagenes/log.jpg)no-repeat center fixed;
            background-size: cover;
        }
        
        .pad{
            margin-top: 2%;
        }
        
        .padd{
            margin-top: 2.5%;
            margin-bottom: 2%;
            border: 2px solid black;
            border-radius: 10px;
        }
        
        .legend{
            font-size: 25px;
            color: black;
        }
        
        #form{
            background-color: #ffffff;
            opacity: 1.5;
        }
    </style>
    <title>Registro</title>
</head>
<body>
<!--Form de sesion-->
<form action="validar.php" method="post">
<div class="form-horizontal col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-md-4 col-sm-4 col-xs-4 padd " role="form" id="form">
   <legend class="text-center legend" id="legend">Iniciar Sesion</legend>
    <div class="form-group">
        <label class="col-md-2 control-label">Correo:</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="mail" placeholder="Ingrese su E-Mail">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Password:</label>
        <div class="col-md-10">
            <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña">
    </div>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-success col-md-3 col-md-offset-5 pad"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
    </div>
</div>
</form>
<!--Aquí termina form de sesion-->
<!-- formulario registro -->
<form method="post">
<div class="form-horizontal col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-md-4 col-sm-4 col-xs-4 padd" role="form" id="form">
   <legend class="text-center legend">Registro</legend>
    <div class="form-group">
        <label class="col-md-2 control-label">Nombre:</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="realname">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">E-Mail:</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="nick">
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Password:</label>
        <div class="col-md-10">
            <input type="password" class="form-control" name="pass">
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Confirmar password:</label>
        <div class="col-md-10">
            <input type="password" class="form-control" name="rpass">
    </div>
    </div>
    <div class="form-group">
       <button type="submit" type="submit" class="btn btn-success col-md-3 col-md-offset-5 pad" name="submit"> <span class="glyphicon glyphicon-check"> Registrarse</span></button>
    </div>
</div>
</form>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
?>
<!--Fin formulario registro -->
	
</body>
</html>