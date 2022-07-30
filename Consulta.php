<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/CSS Global - Claro.css" Type="text/css" MEDIA="screen">
    <title>Document</title>
</head>

<?php
require_once("Conexión.php");
?>
<table>
    <?php
    $sql = "SELECT * FROM juguete";
    //$result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

    echo "<tr>";
    echo "<th .AnchoTablaID>ID</th>";
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
    echo "<tr>";
    echo "<form action='Registro.php' method='post'>";
    echo "<td><input id='InputID' name='ID' type='number' required='' placeholder='ID*'></td>";
    echo "<td><input id='InputArtículo' name='Artículo' type='text' required='' placeholder='Artículo*'></th>";
    echo "<td><input id='InputMarca' name='Marca' type='text' required='' placeholder='Marca del artículo*'></td>";
    echo "<td><input id='InputCantidad' name='Cantidad' type='number' required='' placeholder='Existencias del producto*'></td>";
    echo "<td><input id='InputPrecioL' name='PrecioL' type='text' required='' placeholder='Precio local del artículo*'></td>";
    echo "<td><input id='InputPrecioML' name='PrecioML' type='text' required='' placeholder='Precio del artículo en Mercado Libre*'></td>";
    echo "<td><input id='InputPrecioMS' name='PrecioMS' type='text' placeholder='Precio del artículo en Mercado Shop'></td>";
    echo "<td><input id='InputLíneaSerie' name='LíneaSerie' type='text' placeholder='Línea o serie'></th>";
    echo "<td><input id='InputModelo' name='Modelo' type='text' required='' placeholder='Modelo*'></td>";
    echo "<td><input id='InputDescripción' name='Descripción' type='text' placeholder='Descripción del artículo'></td>";
    echo "<td><input id='InputBarras' name='Barras' type='text' required='' placeholder='Código de barras*'></td>";
    echo "<td><input id='InputSKU' name='SKU' type='text' placeholder='Código universal de producto (SKU)'></td>";
    echo "<input type='submit'>";
    echo "</form>";
    echo "</tr>";
    ?>
</table>
</body>

</html>