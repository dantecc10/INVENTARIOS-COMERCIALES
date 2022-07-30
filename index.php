<!DOCTYPE html>
<html lang="es">

<head>
    <!--<link rel="shortcut icon" href="" type="image/x-icon">!-->
    <link rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA CLARO.css" Type="text/css" MEDIA="screen">

    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Mundo del Regalo</title>
</head>

<body>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>El Mundo del Regalo</h1>
                <a href="index.php">
                    <img id="Logo" src="IMG/El Mundo del Regalo - LOGO.png" alt="El Mundo del Regalo Zacatlán">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="Consulta.php">Consultar productos</a>
                        <a href="Registro.php">Registro</a>
                        <a href="Actualización.php">Actualización</a>
                        <a href="Venta.php">Venta</a>
                        <a id="CambiaTema" onclick="javascript:CambiarTemaPrincipal()">Cambiar tema</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>
    <p>Bienvenido, si tiene una cuenta, inicie sesión, de lo contrario, puede consultar el catálogo en el siguiente enlace:
    </p>
    <form action="Inicio de sesión.php" method="POST">
        <label for="userEmail">Correo electrónico:</label><br>
        <input name="userEmail" type="email" required="" placeholder="Dirección de correo electrónico:*"><br><br>

        <label for="userPassword">Contraseña:</label><br>
        <input name="userPassword" type="password" required="" placeholder="Contraseña*"><br><br>

        <input type="submit">
    </form>
    <?php
    echo "<script lang='JavaScript'>console.log('Esto fue escrito con PHP...')<script>";
    ?>
</body>

</html>