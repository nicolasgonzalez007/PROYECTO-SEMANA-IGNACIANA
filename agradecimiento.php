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

                //Aqui iria un while de 1 hasta el nº de Alumnos registrados
                <option value="1">Nombre 1</option>// El valor del value seria el idAlumno , y lo que va dentro del option seria el nombre del alumno o el pseudonimo de jesuita
                

                ?>

                <!--<option value="0" disabled selected>Selecciona un nombre</option>-->
                <!--<option value="2">Nombre 2</option>
                <option value="3">Nombre 3</option>-->
            </select>
            <label for="mensaje">QUIERO AGRADECERTE</label>
            <textarea id="mensaje"name="mensaje" placeholder="Escribe aqui tu mensaje..."></textarea>
            <input type="submit" value="AGRADECER">
        </form>
        
    </div>
</body>
</html> quiero poner una imagen al lado del titulo