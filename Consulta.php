<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("Conexión.php");
    ?>
    <table>
        <?php
        $sql = "SELECT * FROM juguete";
        //$result = mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Artículo</th>";
        echo "<th>Marca</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Precio local</th>";
        echo "<th>Precio ML</th>";
        echo "<th>Precio MS</th>";
        echo "<th>Línea / Serie</th>";
        echo "<th>Modelo</th>";
        echo "<th>Descripción</th>";
        echo "<th>Barras</th>";
        echo "<th>SKU</th>";
        echo "</tr>";

        while ($columna = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $columna['ID'] . "</td>";
            echo "<td>" . $columna['Artículo'] . "</td>";
            echo "<td>" . $columna['Marca'] . "</td>";
            echo "<td>" . $columna['Cantidad'] . "</td>";
            echo "<td>" . $columna['Precio L'] . "</td>";
            echo "<td>" . $columna['Precio ML'] . "</td>";
            echo "<td>" . $columna['Precio MS'] . "</td>";
            echo "<td>" . $columna['Línea / Serie'] . "</td>";
            echo "<td>" . $columna['Modelo'] . "</td>";
            echo "<td>" . $columna['Descripción'] . "</td>";
            echo "<td>" . $columna['Barras'] . "</td>";
            echo "<td>" . $columna['SKU'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>