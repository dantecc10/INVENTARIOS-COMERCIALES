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
require_once("index.php");
// echo "<script><script>";

$sqlS = "SELECT * FROM usuarios WHERE `Correo electrónico` = '" . $_POST["userEmail"] . "' AND Contraseña = '" . $_POST["userPassword"] . "'";
//$result = mysqli_query($conn, $sql);
$result = mysqli_query($connS, $sqlS) or die("Error en la consulta a la base de datos");

if ($columna = mysqli_fetch_array($result)) {
    if ($_POST["userEmail"] == $columna['Correo electrónico'] && $_POST["userPassword"] == $columna['Contraseña']) {
        $resultadoSesión = ("Bienvenido, " . $columna["Nombre"] . " " . $columna["Apellido paterno"] . " " . $columna["Apellido materno"] . ", has iniciado sesión correctamente.");
        echo $resultadoSesión;
        $Acceso = True;
        header('Location: http://192.168.1.74/INVENTARIOS-COMERCIALES/Consulta.php');
    } else {
        $resultadoSesión = "Los datos que introduciste son erróneos.";
        $Acceso = False;
        echo $resultadoSesión;
    }
}
