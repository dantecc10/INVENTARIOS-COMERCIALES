<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="Stylesheet" href="CSS/CSS Global - TEMA CLARO.css" Type="text/css" MEDIA="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/El Mundo del Regalo - LOGO.png">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('Conexión.php');

    $ID = $_POST['ID'];
    $Artículo = $_POST['Artículo'];
    $Marca = $_POST['Marca'];
    $Cantidad = $_POST['Cantidad'];
    $PrecioL = $_POST['PrecioL'];
    $PrecioML = $_POST['PrecioML'];
    $PrecioMS = $_POST['PrecioMS'];
    $LíneaSerie = $_POST['LíneaSerie'];
    $Modelo = $_POST['Modelo'];
    $Descripción = $_POST['Descripción'];
    $Barras = $_POST['Barras'];
    $SKU = $_POST['SKU'];

    $mensaje = ("Se registró correctamente el artículo con los siguientes datos: <br>" .
        "ID: " .
        $ID .
        "<br>" .

        "Artículo: " .
        $Artículo .
        "<br>" .

        "Marca: " .
        $Marca .
        "<br>" .

        "Cantidad: " .
        $Cantidad .
        "<br>" .

        "Precio local: $" .
        $PrecioL .
        "<br>" .

        "Precio Mercado Libre: $" .
        $PrecioML .
        "<br>" .

        "Precio Mercado Shops: $" .
        $PrecioMS .
        "<br>" .

        "Línea / Serie: " .
        $LíneaSerie .
        "<br>" .

        "Modelo: " .
        $Modelo .
        "<br>" .

        "Descripción: " .
        $Descripción .
        "<br>" .

        "Barras: " .
        $Barras .
        "<br>" .

        "SKU: " .
        $SKU .
        "<br>"
    );
    //$result = mysqli_query($conn, $sql);
    $sql = ("INSERT INTO `juguete` (ID, Artículo, Marca, Cantidad, `Precio L`, `Precio ML`, `Precio MS`, `Línea / Serie`, Modelo, Descripción, Barras, SKU)" .
    " VALUES (" .
    $ID .
    ", '" .
    $Artículo .
    "', '" .
    $Marca .
    "', " .
    $Cantidad .
    ", " .
    $PrecioL .
    ", " .
    $PrecioML .
    ", " .
        $PrecioMS .
        ", '" .
        $LíneaSerie .
        "', '" .
        $Modelo .
        "', '" .
        $Descripción .
        "', '" .
        $Barras .
        "', '" .
        $SKU .
        "')"
    );
//    $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");
    if (mysqli_query($conn, $sql)) {
        echo "<br>Registro exitoso <br>"; //"New record created successfully";
        echo "<br>Le reedirigiré al catálogo para que vea los datos agregados...";
        echo "<div id='ContenedorCatálogo'>";
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
        echo "<tr class=' FilasProductos'>";
        echo "<td class = 'CeldaParaID'>" .  $ID . "</td>";
        echo "<td class = 'CeldaParaArtículo'>" . $Artículo . "</td>";
        echo "<td class = 'CeldaParaMarca'>" . $Marca . "</td>";
        echo "<td class = 'CeldaParaCantidad'>" . $Cantidad . "</td>";
        echo "<td class = 'CeldaParaPrecioL'>$ " . $PrecioL . "</td>";
        echo "<td class = 'CeldaParaPrecioML'>$ " . $PrecioML . "</td>";
        echo "<td class = 'CeldaParaPrecioMS'>$ " . $PrecioMS . "</td>";
        echo "<td class = 'CeldaParaLíneaSerie'>" . $LíneaSerie . "</td>";
        echo "<td class = 'CeldaParaModelo'>" . $Modelo . "</td>";
        echo "<td class = 'CeldaParaDescripción'>" . $Descripción . "</td>";
        echo "<td class = 'CeldaParaBarras'>" . $Barras . "</td>";
        echo "<td class = 'CeldaParaSKU'>" . $SKU . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        header("refresh:8;url=Consulta.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    ?>
    <script src="JavaScript/AjaxFiltros.js"></script>
</body>

</html>