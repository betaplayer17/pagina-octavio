<?php
$conexion = mysqli_connect('localhost', 'root', 'gogueta5', 'academ');

$titulo = $_POST['titulo'];
$ano = $_POST['año'];
$genero = $_POST['genero'];
$tamano = $_POST['tamaño'];
$editor = $_POST['editor'];
$plataforma = $_POST['plataforma'];

    $nombre_file = mktime() .'.jpg';
    $posicion = 0;

    $consulta = <<<SQL
INSERT INTO
    juegos
SET
    titulo='$titulo',
    ano='$ano',
    genero='$genero',
    tamano='$tamano',
    editor='$editor',
    plataforma='$plataforma',
    archivo='$nombre_file'
SQL;
    mysqli_query($conexion, $consulta);

        $origen = $_FILES['archivo']['tmp_name'];
        $destino = "imagenes/$nombre_file";
     
        move_uploaded_file ($origen, $destino);

        header("Location: mostrarJuegos.php");    
?>