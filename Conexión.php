<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script></script>
</head>

<body>
    <h1>El Mundo del Regalo</h1>

    <?php
    $servername = "localhost";
    $database = $dbname = "life";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("<p>Error al conectar con la base de datos: " . mysqli_connect_error() . "</p><p>Pruebe a verificar la conexión del servidor...</p>");
    }
    echo "<p>Conexión a la base de datos: Exitosa</p>";
    ?>

    <p>¿Qué desea realizar?</p>
    <ul>
        <li><a href="Consulta.php">Consulta de productos</a></li>
        <li><a href="Registro.php">Registro de productos</a></li>
        <li><a href="Actualización.php">Actualización de información</a></li>
        <li><a href="Punto de venta.php">Ventas</a></li>
    </ul>


    <a>Consultar productos</a>

</body>

</html>