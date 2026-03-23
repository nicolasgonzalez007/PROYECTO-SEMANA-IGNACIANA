
<?php
  define('SERVIDOR', '13.1daw.esvirgua.com');
  define('USUARIO', '13@1daw.esvirgua.com');
  define('PASSWORD', 'OOhWU9g&C+dM8)vo'); 
  define('BBDD', 'user1daw_13');
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
    for ($i = 0; $i < $total_filas; $i++) 
    {
        $fila = $resultado->fetch_array();//Va guardando los datos de la BBDD en un array , los escribe , y lo va remplazando en la variable.Fetch_array devuelve el array y una variable que sea true(hay filas) o false(ya no hay filas)
        echo '<p>';
        echo 'ID: ' . $fila["idAlumno"] . '- Alumno: ' . $fila["nombre"]; 
        echo '</p>';
    }
    $conexion->close();
  }
  mostrar_alumnos();

  //Tarea hacer el bucle for de arriba pero con un while
  while($fila=$resultado->fetch_array())
    {
      echo <p>
      echo 'ID: ' . $fila["idAlumno"] . '- Alumno: ' . $fila["nombre"]; 
      echo '</p>';
    }
?>
