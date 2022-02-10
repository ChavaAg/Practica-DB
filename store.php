<?php
    include('conexion.php');

    if(count($_POST)>0){
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
        $genero = $_POST['genero'];

        $sql = "INSERT INTO peliculas (nombre,duracion,genero) VALUES ('$nombre',$duracion,'$genero')";
        
        $conn->exec($sql);
    }
    header('Location: index.php');
?>