<?php
    session_start();
    require 'configdb.php';
    function conectar() 
    {
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8"); 
        return $conexion;
    }

    $conexion = conectar();
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["password"];
    $sql = "SELECT * FROM alumnos WHERE usuario = '$usuario' AND password = '$contrasenia'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_array();
        $_SESSION['usuario'] = $fila['usuario']; 
        $_SESSION['equipo'] = $fila['equipo']; 
        $_SESSION['nombre'] = $fila['nombre'];
        header("Location: agradecimiento.php");
        exit(); 
    } else {
        $conexion->close();  
        header("Location: iniciosesion.html");
        exit();
    }
    
?>




<!--
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>INICIA SESIÓN</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <header>
        <h2 class="titulo">AGRADECE <span>EN</span> COMPAÑIA</h2>
        <div>
        <p>Comparte gratitud y fortalece la comunidad</p>
        </div>
    </header>
    <div class="main">
        <form action="#" method="post">
            <label class="ispc" for="#">Inicia sesión para continuar</label>
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id=""placeholder="tu@email.com">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="" placeholder="Ingresa una contraseña">
            <div class="opciones">
                <label>
                    <input type="checkbox" name="recordar" id="recordar">
                    Recordarme
                </label> 
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <input type="submit" value="ENVIAR">
        </form>
    </div>
</body>
</html>
-->