<?php
    session_start();//ES como una 'cookie' ,cuando se crea una sesion se crea un "id" que se guarda en el servidor y al inciar sesion busca ese id.Lo contrario seria el session_destroy() que borra
    require 'configdb.php';
    function conectar()
    {
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8"); 
        return $conexion;
    }
    $conexion = conectar();
    //Variables 
    $idAlumno_emisor=$_SESSION['idAlumno'];
    $idAlumno_receptor=$_POST['nombres'];
    $mensaje=$_POST['mensaje'];
    //Para mostrarlo
    echo "ID Emisor (Sesión): " . $idAlumno_emisor . "<br>";
    echo "ID Receptor (Formulario): " . $idAlumno_receptor . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
    //Inserta los datos en la tabla mensaje 
    $sql = "INSERT INTO tabla_mensajes (idAlumno_emisor, idAlumno_receptor, texto)
            VALUES ($idAlumno_emisor, $idAlumno_receptor, '$mensaje')";
    $conexion=query->$sql;
    $conexion=close();
    ?>
