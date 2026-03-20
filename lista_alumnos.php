<?php
  define('SERVIDOR', 'localhost');
  define('USUARIO', 'root');
  define('PASSWORD', ''); 
  define('BBDD', 'prueba_sql');
  // Función para conectar (se mantiene igual)
  function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
  }
  
  function mostrar_alumnos(){ 
    $conexion = conectar();  
    
    $sql = "SELECT idAlumno, nombre FROM Alumnos ";
    $resultado = $conexion->query($sql);	
    
    // Obtenemos el número total de filas
    $total_filas = $resultado->num_rows;

    //Bucle 'for' para mostrar
    for ($i = 0; $i < $total_filas; $i++) {
        $fila = $resultado->fetch_array();
        echo '<p>';
        echo 'ID: ' . $fila["idAlumno"] . '- Alumno: ' . $fila["nombre"]; 
        echo '</p>';
    }
    $conexion->close();
  }
  mostrar_alumnos();
?>
