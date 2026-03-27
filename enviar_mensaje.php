<?php
session_start();
require 'configdb.php';

function conectar() {
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}

$conexion = conectar();

$emisor = $_SESSION['equipo'];
$receptor = $_POST['alumnos'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO agradecimientos (idEmisor, idReceptor, mensaje)
        VALUES ('$emisor', '$receptor', '$mensaje')";
if ($conexion->query($sql)) {
    $conexion->close();
    header("Location: agradecimiento.php?envio=exito");
} else {
    $conexion->close();
    header("Location: agradecimiento.php?envio=error");
}
exit();

header("Location: agradecimiento.php");
exit;
?>