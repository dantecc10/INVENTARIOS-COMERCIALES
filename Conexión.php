<?php
$servername = "localhost";
$database = $dbname = "life";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conexión exitosa a la base de datos";
?>