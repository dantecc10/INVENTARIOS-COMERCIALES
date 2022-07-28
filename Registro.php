<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Inserción.php" method="post">
        <label for="ID">ID:</label><br>
        <input name="ID" type="number" required="" placeholder="Identificador de lista*"><br><br>

        <label for="Artículo">Producto:</label><br>
        <input name="Artículo" type="text" required="" placeholder="Artículo*"><br><br>

        <label for="Marca">Marca:</label><br>
        <input name="Marca" type="text" required="" placeholder="Marca del artículo*"><br><br>

        <label for="Cantidad">Cantidad:</label><br>
        <input name="Cantidad" type="number" required="" placeholder="Existencias del producto*"><br><br>

        <label for="PrecioL">Precio local:</label><br>
        <input name="PrecioL" type="text" required="" placeholder="Precio local del artículo*"><br><br>

        <label for="PrecioML">Precio en Mercado Libre:</label><br>
        <input name="PrecioML" type="text" required="" placeholder="Precio del artículo en Mercado Libre*"><br><br>

        <label for="PrecioMS">Precio en Mercado Shops:</label><br>
        <input name="PrecioMS" type="text" placeholder="Precio del artículo en Mercado Shops"><br><br>

        <label for="LíneaSerie">Línea o serie:</label><br>
        <input name="LíneaSerie" type="text" placeholder="Línea o serie"><br><br>

        <label for="Modelo">Modelo:</label><br>
        <input name="Modelo" type="text" required="" placeholder="Modelo*"><br><br>

        <label for="Descripción">Descripción:</label><br>
        <input name="Descripción" type="text" placeholder="Descripción del artículo"><br><br>

        <label for="Barras">Código de barras:</label><br>
        <input name="Barras" type="text" required="" placeholder="Código de barras*"><br><br>

        <label for="SKU">Código universal de producto (SKU):</label><br>
        <input name="SKU" type="text" placeholder="Código universal de producto (SKU)"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
    echo "<script lang='JavaScript'>console.log(Esto fue escrito con PHP...)<script>";
    ?>
</body>

</html>