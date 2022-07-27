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
    require_once('Conexión.php');
    ?>
    <?php
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

    echo $sql;
    /* $sql = "INSERT INTO `papelería-money` (ID, Producto, Marca, Precio)
    VALUES (2, 'Cartulina blanca', 'Sin marca', 6.5)"; */

    if (mysqli_query($conn, $sql)) {
        echo "<br>Registro exitoso <br>"; //"New record created successfully";
        echo $mensaje;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
</body>

</html>