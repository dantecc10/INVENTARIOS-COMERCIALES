<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA CLARO.css" Type="text/css" MEDIA="screen">
    <script src="JavaScript/AsistentePrecios.js"></script>
    <title>Consulta</title>
</head>

<body>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>El Mundo del Regalo</h1>
                <a href="index.php">
                    <img id="Logo" src="IMG/El Mundo del Regalo - LOGO.png" alt="El Mundo del Regalo Zacatlán">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="Consulta.php">Consultar productos</a>
                        <a href="Registro.php">Registro</a>
                        <a href="Actualización.php">Actualización</a>
                        <a href="Venta.php">Venta</a>
                        <a id="CambiaTema" onclick="javascript:CambiarTemaPrincipal()">Cambiar tema</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>
    <?php
    require_once("Conexión.php");
    ?>

    <p>Filtros:</p>





    <table id="Catálogo">
        <?php
        $sql = "SELECT * FROM juguete";
        //$result = mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

        echo "<tr>";
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
            echo "<tr>";
            echo "<td class ='CeldaParaID'>" . $columna['ID'] . "</td>";
            echo "<td class ='CeldaParaArtículo'>" . $columna['Artículo'] . "</td>";
            echo "<td class ='CeldaParaMarca'>" . $columna['Marca'] . "</td>";
            echo "<td class ='CeldaParaCantidad'>" . $columna['Cantidad'] . "</td>";
            echo "<td class ='CeldaParaPrecioL'>$" . $columna['Precio L'] . "</td>";
            echo "<td class ='CeldaParaPrecioML'>$" . $columna['Precio ML'] . "</td>";
            echo "<td class ='CeldaParaPrecioMS'>$" . $columna['Precio MS'] . "</td>";
            echo "<td class ='CeldaParaLíneaSerie'>" . $columna['Línea / Serie'] . "</td>";
            echo "<td class ='CeldaParaModelo'>" . $columna['Modelo'] . "</td>";
            echo "<td class ='CeldaParaDescripción'>" . $columna['Descripción'] . "</td>";
            echo "<td class ='CeldaParaBarras'>" . $columna['Barras'] . "</td>";
            echo "<td class ='CeldaParaSKU'>" . $columna['SKU'] . "</td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<form action='Inserción.php' method='post'>";
        echo "<td class ='CeldaParaID'><input id='InputID' name='ID' type='number' required='' placeholder='ID*'></td>";
        echo "<td class ='CeldaParaArtículo'><input id='InputArtículo' name='Artículo' type='text' required='' placeholder='Artículo*'></th>";
        echo "<td class ='CeldaParaMarca'><input id='InputMarca' name='Marca' type='text' required='' placeholder='Marca*'></td>";
        echo "<td class ='CeldaParaCantidad'><input id='InputCantidad' name='Cantidad' type='number' required='' placeholder='Existencia*'></td>";
        echo "<td class ='CeldaParaPrecioL'>$<input id='InputPrecioL' onchange='javascript:CálculoAsistidoDePrecios()' name='PrecioL' type='text' required='' placeholder='Precio*'></td>";
        echo "<td class ='CeldaParaPrecioML'>$<input id='InputPrecioML' name='PrecioML' type='text' required='' placeholder='Precio ML*'></td>";
        echo "<td class ='CeldaParaPrecioMS'>$<input id='InputPrecioMS' name='PrecioMS' type='text' placeholder='Precio MS'></td>";
        echo "<td class ='CeldaParaLíneaSerie'><input id='InputLíneaSerie' name='LíneaSerie' type='text' placeholder='Línea'></th>";
        echo "<td class ='CeldaParaModelo'><input id='InputModelo' name='Modelo' type='text' required='' placeholder='Modelo*'></td>";
        echo "<td class ='CeldaParaDescripción'><input id='InputDescripción' name='Descripción' type='text' placeholder='Descripción del artículo'></td>";
        echo "<td class ='CeldaParaBarras'><input id='InputBarras' name='Barras' type='text' required='' placeholder='Código de barras*'></td>";
        echo "<td class ='CeldaParaSKU'><input id='InputSKU' name='SKU' type='text' placeholder='Código universal de producto (SKU)'></td>";

        echo "</tr>";
        ?>

        <?php

        ?>

    </table>
    <?php
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</body>

</html>