<?php
    session_start();
    require 'configdb.php';
    function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
  }
  function mostrar_alumnos(){ 
    $conexion = conectar();  
    $sql = "SELECT equipo, nombre FROM alumnos";
    $resultado = $conexion->query($sql);	
    while($fila=$resultado->fetch_array())
    {
        echo '<option value="' . $fila["equipo"] . '">';
        echo $fila["nombre"];
        echo '</option>';
    }
    $conexion->close();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>AGRADECIMIENTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="agradecimiento">
    <div class="titulo_pag2">
        <h2>AGRADECE <span class="agra2">EN</span> COMPAÑIA</h2>
    </div>
    <nav>
        <a href="agradecimiento.php">Agradecer</a>
        <a href="recibidos.php">Recibir</a>
        <a href="cerrar_sesion.php">Cerrar sesión</a>
    </nav>   
    <div class="agradecer">
        <form action="enviar_mensaje.php" method="post">
            <label for="alumnos">PARA</label>
            <select id="alumnos" name="alumnos">
                    <option value="0" disabled selected>Selecciona un nombre</option>
                    <?php mostrar_alumnos(); ?>
            </select>
            <label for="mensaje">QUIERO AGRADECERTE</label>
            <textarea id="mensaje"name="mensaje" placeholder="Escribe aqui tu mensaje..."></textarea>
            <input type="submit" value="AGRADECER">
        </form>
    </div>
</body>
</html>