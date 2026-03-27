<?php
session_start();
require 'configdb.php';

function conectar() {
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");
    return $conexion;
}

$conexion = conectar();
$idVer = $_GET["id"];

//Obtener mensaje y IDs
$sql = "SELECT mensaje, idEmisor, idReceptor FROM agradecimientos WHERE idAgradecimiento = $idVer";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_array();

$mensaje = $fila["mensaje"];
$emisor = $fila["idEmisor"];
$receptorID = $fila["idReceptor"];

//Obtener datos del Jesuita (del que envía)
$sql2 = "SELECT nombreJesuita, infoJesuita FROM alumnos WHERE equipo = $emisor";
$resultado2 = $conexion->query($sql2);
$fila2 = $resultado2->fetch_array();

$jesuita = $fila2["nombreJesuita"];
$infoJesuita = $fila2["infoJesuita"];

//Obtener nombre del que recibe
$sql3 = "SELECT nombre FROM alumnos WHERE equipo = $receptorID";
$resultado3 = $conexion->query($sql3);
$fila3 = $resultado3->fetch_array();
$receptor = $fila3["nombre"]; 
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Detalle Agradecimiento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="agradecimiento">

<div class="titulo_pag2">
    <h2>PARA: <?php echo $receptor; ?></h2>
</div>

<nav>
    <a href="agradecimiento.php">Agradecer</a>
    <a href="recibidos.php">Recibir</a>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</nav>

<div class="contenedor postal">

    <div class="jesuita">
        <img class="eusebio" src="./Imagenes/eusebio.jpg">
        <p class="nombre-j"><strong><?php echo $jesuita; ?></strong></p>
        <p class="frase"><?php echo $infoJesuita; ?></p>
    </div>

    <div class="recibimiento">
        <p><?php echo $mensaje; ?></p>
        <br><br>
        <a href="recibidos.php" style="color:#00566B;font-size:12px;">← Volver</a>
    </div>

</div>

</body>
</html>