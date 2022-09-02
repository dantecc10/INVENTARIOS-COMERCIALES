<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/El Mundo del Regalo - LOGO.png">
    <title>Document</title>
    <script></script>
</head>

<body>
    <?php
    $servername = "localhost";
    $database = $dbname = "juguete";
    $username = "dantecc10";
    $password = "@dantecc10!";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("<p>Error al conectar con la base de datos: " . mysqli_connect_error() . "</p><p>Pruebe a verificar la conexión del servidor...</p>");
    }
    echo "<script>console.log('Conexión a la base de datos: Exitosa')</script>";
    ?>
    <!-- 
        <p>¿Qué desea realizar? Se requiere inicio de sesión previo.</p>
        <form action="Revisión.php" method="post">
            <select name="Acción" class="BotónEstándar">
                <option value="Registro">Registro</option>
                <option value="Actualización">Actualización</option>
                <option value="Venta">Venta</option>
            </select>
            <input type="submit" class="BotónEstándar">
        </form>
    !-->
</body>

</html>