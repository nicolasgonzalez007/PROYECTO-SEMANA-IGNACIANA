<?php
session_start();
require 'configdb.php';

function conectar() {
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");
    return $conexion;
}

$conexion = conectar();

$puesto = $_SESSION['equipo'];


$sql = "SELECT idAgradecimiento, idEmisor FROM agradecimientos WHERE idReceptor = '$puesto'";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RECIBIDOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="agradecimiento">

<div class="titulo_pag2">
    <h2>AGRADECE <span class="agra3">EN</span> COMPAÑIA</h2>
</div>

<nav>
    <a href="agradecimiento.php">Agradecer</a>
    <a href="recibidos.php">Recibir</a>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</nav>

<div class="contenedor">

    <div class="jesuita">
        <img class="eusebio" src="./Imagenes/eusebio.jpg">
        <p class="frase">"Damos gracias por los caminos abiertos y los corazones compartidos en esta tierra que Dios nos bendijo"</p>
    </div>

    <div class="recibimiento">
        <h3>Bandeja de entrada</h3>
        
        <?php
        
        while ($fila = $resultado->fetch_array()) {
            echo "<p class='item-mensaje'>";
            echo "<a href='ObtenerDatosAgradecimiento.php?id=" . $fila['idAgradecimiento'] . "'>";
            echo "Ver agradecimiento del Equipo " . $fila['idEmisor'];
            echo "</a></p>";
        }
        ?>

    </div>

</div>

</body>
</html>