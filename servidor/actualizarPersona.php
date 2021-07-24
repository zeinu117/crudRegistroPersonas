<?php 
$idPersona = $_POST['idPersona'];
$nombre = $_POST['nombre'];
$apellidoA = $_POST['apellidoA'];
$apellidoM = $_POST['apellidoM'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];

    include "../clase/conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_lista 
            SET nombre = '$nombre',
                    apellidoPaterno = '$apellidoA',
                    apellidoMaterno = '$apellidoM',
                    sexo = '$sexo',
                    fechaNacimiento = '$fecha'
            WHERE id_persona = '$idPersona'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else { 
        echo "No se pudo actualizar :(";
    }