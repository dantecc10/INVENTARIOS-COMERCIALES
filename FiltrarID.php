<?php
echo "<script>console.log('Saludos del servidor');</script>";
$ID = strval($_GET['ID']);
//  $ModoFiltro = ($_GET['ModoFiltro']);
$sql;
/*
  Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
  */

echo ("ID es: " . $ID . "<br>");
$SQLBase = "SELECT * FROM juguete WHERE ";
$SQLBase = ($SQLBase . " `ID` = '" . $ID . "'");
$sql = $SQLBase;
ConstruirTabla($sql);

function ConstruirTabla($sql)
{
    $con = mysqli_connect('localhost', 'root', '', 'life');
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error($con));
    }
    echo $sql;
    $result = mysqli_query($con, $sql) or die("Error en la consulta a la base de datos");
    echo "<table class='Catálogo'>";
    echo "<tr class='Fila1'>";
    echo "<th class='CeldaParaID'>ID</th>";
    echo "<th class='CeldaParaArtículo'>Artículo</th>";
    echo "<th class='CeldaParaMarca'>Marca</th>";
    echo "<th class='CeldaParaCantidad'>Cantidad</th>";
    echo "<th class='CeldaParaPrecioL'>Precio local</th>";
    echo "<th class='CeldaParaPrecioML'>Precio ML</th>";
    echo "<th class='CeldaParaPrecioMS'>Precio MS</th>";
    echo "<th class='CeldaParaLíneaSerie'>Línea / Serie</th>";
    echo "<th class='CeldaParaModelo'>Modelo</th>";
    echo "<th class='CeldaParaDescripción'>Descripción</th>";
    echo "<th class='CeldaParaBarras'>Barras</th>";
    echo "<th class='CeldaParaSKU'>SKU</th>";
    echo "</tr>";
    while ($columna = mysqli_fetch_array($result)) {
        echo "<tr class='FilasProductos'>";
        echo "<td class = 'CeldaParaID'>" . $columna['ID'] . "</td>";
        echo "<td class = 'CeldaParaArtículo'>" . $columna['Artículo'] . "</td>";
        echo "<td class = 'CeldaParaMarca'>" . $columna['Marca'] . "</td>";
        echo "<td class = 'CeldaParaCantidad'>" . $columna['Cantidad'] . "</td>";
        echo "<td class = 'CeldaParaPrecioL'>$" . $columna['Precio L'] . "</td>";
        echo "<td class = 'CeldaParaPrecioML'>$" . $columna['Precio ML'] . "</td>";
        echo "<td class = 'CeldaParaPrecioMS'>$" . $columna['Precio MS'] . "</td>";
        echo "<td class = 'CeldaParaLíneaSerie'>" . $columna['Línea / Serie'] . "</td>";
        echo "<td class = 'CeldaParaModelo'>" . $columna['Modelo'] . "</td>";
        echo "<td class = 'CeldaParaDescripción'>" . $columna['Descripción'] . "</td>";
        echo "<td class = 'CeldaParaBarras'>" . $columna['Barras'] . "</td>";
        echo "<td class = 'CeldaParaSKU'>" . $columna['SKU'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
};
?>