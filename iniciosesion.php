<?php

    define('SERVIDOR', 'localhost');
    define('USUARIO', 'root');
    define('PASSWORD', ''); 
    define('BBDD', 'prueba_sql');
    function conectar()
    {
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8"); 
        return $conexion;
    }
    //Para guardar el email y contraseña en unas variables
    $correo=$_POST["email"];
    $contrasenia=$_POST["password"];


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