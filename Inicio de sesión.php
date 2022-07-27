<?php
$servernameS = "localhost";
$databaseS = $dbnameS = "seguridad";
$usernameS = "root";
$passwordS = "";
// Create connection
$connS = mysqli_connect($servernameS, $usernameS, $passwordS, $databaseS);
// Check connection
if (!$connS) {
    die("<p>Error al conectar con la base de datos de usuarios: " . mysqli_connect_error() . "</p><p>Pruebe a verificar la conexión del servidor...</p>");
}
echo "<p>Conexión a base de datos: Exitosa</p>";


$sqlS = "SELECT * FROM usuarios WHERE `Correo electrónico` = '" . $_POST["userEmail"] . "') AND (`Contraseña` = '" . $_POST["userPassword"] . "')";
//$result = mysqli_query($conn, $sql);
$result = mysqli_query($connS, $sqlS) or die("Error en la consulta a la base de datos");

if ($columna = mysqli_fetch_array($result)) {
    if ($_POST["userEmail"] == $columna['Correo electrónico'] && $_POST["userPassword"] == $columna['Contraseña']) {
        echo ("Bienvenido, " . $columna["Nombre"] . " " . $columna["Apellido paterno"] . " " . $columna["Apellido materno"] . ", has iniciado sesión correctamente.");
    }
}
?>