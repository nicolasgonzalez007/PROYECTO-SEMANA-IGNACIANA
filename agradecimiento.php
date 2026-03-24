<?php
    define('SERVIDOR', 'localhost');
    define('USUARIO', 'root');
    define('PASSWORD', ''); 
    define('BBDD', 'prueba_sql');
    function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
  }
  function mostrar_alumnos(){ 
    $conexion = conectar();  
    $sql = "SELECT idAlumno, nombre FROM Alumno ";
    $resultado = $conexion->query($sql);	
    // Obtenemos el número total de filas
    $total_filas = $resultado->num_rows;
   while($fila=$resultado->fetch_array())
    {
        echo '<option value="' . $fila["idAlumno"] . '">';
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
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="agradecimiento">
    <div class="titulo_pag2">
        <h2>AGRADECE <span>EN</span> COMPAÑIA</h2>
        <img src="jesuitas.png">
    </div>
    <nav>
        <a href="#">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="#">Cerrar sesión</a>
    </nav>   
    <div class="agradecer">
        <form action="#" method="post">
            <label for="nombres">PARA</label>
            <select id="nombres" name="nombres">
                <?php
                   mostrar_alumnos();   
                ?>
            </select>
            <label for="mensaje">QUIERO AGRADECERTE</label>
            <textarea id="mensaje"name="mensaje" placeholder="Escribe aqui tu mensaje..."></textarea>
            <input type="submit" value="AGRADECER">
        </form>
    </div>
</body>
</html>
