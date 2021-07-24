<?php

    $nombre = $_POST['nombre'];
    $apellidoA = $_POST['apellidoA'];
    $apellidoM = $_POST['apellidoM'];
    $sexo = $_POST['sexo'];
    $fecha = $_POST['fecha'];

    include "../clase/conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_lista (nombre, apellidoPaterno, apellidoMaterno, sexo, fechaNacimiento) 
            VALUES ('$nombre', '$apellidoA', '$apellidoM', '$sexo', '$fecha')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar";
    }

?>