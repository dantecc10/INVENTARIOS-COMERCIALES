<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA CLARO.css" Type="text/css" MEDIA="screen">
    <link rel="Stylesheet" href="CSS/TEMA CLARO/CuerpoEstilo.css" Type="text/css" MEDIA="screen">
    <link rel="Stylesheet" href="CSS/TEMA CLARO/MenúDesplegable.css" Type="text/css" MEDIA="screen">
    <link rel="Stylesheet" href="CSS/TEMA CLARO/NavBar.css" Type="text/css" MEDIA="screen">
    <script src="JavaScript/AJAX.js"></script>
    <script src="JavaScript/AjaxFiltros.js"></script>
    <link rel="icon" href="IMG/El Mundo del Regalo - LOGO.png">
    <title>Consulta - Servidor IONOS</title>
</head>

<body>
    <br>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>El Mundo del Regalo</h1>
                <div id="DivLOGO">
                    <a href="index.php">
                        <img id="Logo" src="IMG/El Mundo del Regalo - LOGO.png" alt="El Mundo del Regalo Zacatlán">
                    </a>
                </div>
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
    <br>
    <form>
        <select class="BotónEstándar" name="users" onchange="javascript:mostrarProducto(this.value)" id="DesplegableIDs">
            <option value="">Selecciona un producto:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </form>
    <br>

    <p>Filtros:</p>
    <table id="TablaFiltros">
        <tr id="EncabezadosFiltros">
            <th>ID</th>
            <th>Marca</th>
            <th>Línea o serie</th>
            <th>Modelo</th>
            <th>Barras</th>
            <th>SKU</th>
        </tr>
        <form>
            <tr id="InputsFiltros">
                <td id="BúsquedaID">
                    <input type="number" name="CapturaID" id="CampoFiltroID" placeholder="ID" onblur="javascript:FiltroID(ModoFiltro = 'ID')" onchange="javascript:FiltroID(ModoFiltro = 'ID')">
                </td>
                <td>
                    <select name="CapturaMarca" id="CampoFiltroMarca" onblur="javascript:FiltroMarca(ModoFiltro = 'ID')" onchange="javascript:FiltroMarca(ModoFiltro = 'ID')">
                        <option value="Todas">Todas</option>
                        <option value="Playmobil">Playmobil</option>
                        <option value="LEGO">LEGO</option>
                    </select>
                </td>
                <td id="BúsquedaLíneaSerie">
                    <input type="text" name="CapturaLíneaSerie" id="CampoFiltroLíneaSerie" placeholder="Línea o serie" onblur="javascript:FiltroLíneaSerie(ModoFiltro = 'LíneaSerie')" onchange="javascript:FiltroLíneaSerie(ModoFiltro = 'LíneaSerie')">
                </td>
                <td id="BúsquedaModelo">
                    <input type="text" name="CapturaModelo" id="CampoFiltroModelo" placeholder="Modelo del artículo" onblur="javascript:FiltroModelo(ModoFiltro = 'Modelo')" onchange="javascript:FiltroModelo(ModoFiltro = 'Modelo')">
                </td>
                <td id="BúsquedaBarras">
                    <input type="text" name="CapturaBarras" id="CampoFiltroBarras" placeholder="Código de barras" onblur="javascript:FiltroBarras(ModoFiltro = 'Barras')" onchange="javascript:FiltroBarras(ModoFiltro = 'Barras')">
                </td>
                <td id="BúsquedaSKU">
                    <input type="text" name="CapturaSKU" id="CampoFiltroSKU" placeholder="SKU" onblur="javascript:FiltroSKU(ModoFiltro = 'SKU')" onchange="javascript:FiltroSKU(ModoFiltro = 'SKU')">
                </td>
            </tr>
    </table>
    <!--
        <input class='BotónEstándar' type='submit' value="Filtrar productos" onclick="javascript:FiltrarProductos();">
    -->
    </form>

    <button class="BotónEstándar" onclick="javascript:LimpiarFiltros();">Limpiar filtros</button>
    <br>
    <div id="DivTablaID"></div>
    <hr>

    <div id="ContenedorCatálogo">
        <table class="Catálogo">
            <?php
            $sql = "SELECT * FROM juguete";
            //$result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

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
                echo "<td class = 'CeldaParaPrecioL'>$ " . $columna['Precio L'] . "</td>";
                echo "<td class = 'CeldaParaPrecioML'>$ " . $columna['Precio ML'] . "</td>";
                echo "<td class = 'CeldaParaPrecioMS'>$ " . $columna['Precio MS'] . "</td>";
                echo "<td class = 'CeldaParaLíneaSerie'>" . $columna['Línea / Serie'] . "</td>";
                echo "<td class = 'CeldaParaModelo'>" . $columna['Modelo'] . "</td>";
                echo "<td class = 'CeldaParaDescripción'>" . $columna['Descripción'] . "</td>";
                echo "<td class = 'CeldaParaBarras'>" . $columna['Barras'] . "</td>";
                echo "<td class = 'CeldaParaSKU'>" . $columna['SKU'] . "</td>";
                echo "</tr>";
            }
            echo "<tr id='FilaFormulario'>";
            echo "<form action = 'Inserción.php' method='post'>";
            echo "<td class = 'CeldaParaID'><input id='InputID' name='ID' type='number' required='' placeholder='ID*'></td>";
            echo "<td class = 'CeldaParaArtículo'><input id='InputArtículo' name='Artículo' type='text' required='' placeholder='Artículo*'></th>";
            echo "<td class = 'CeldaParaMarca'><input id='InputMarca' name='Marca' type='text' required='' placeholder='Marca*'></td>";
            echo "<td class = 'CeldaParaCantidad'><input id='InputCantidad' name='Cantidad' type='number' required='' placeholder='Existencia*'></td>";
            echo "<td class = 'CeldaParaPrecioL'><label for='PrecioML'>$</label><input id='InputPrecioL' onchange='javascript:CálculoAsistidoDePrecios()' name='PrecioL' type='number' step='any' required='' placeholder='Precio*'></td>";
            echo "<td class = 'CeldaParaPrecioML'><label for='PrecioML'>$</label><input id='InputPrecioML' name='PrecioML' type='number' step='any' required='' placeholder='Precio ML*'></td>";
            echo "<td class = 'CeldaParaPrecioMS'><label for='PrecioML'>$</label><input id='InputPrecioMS' name='PrecioMS' type='number' step='any' placeholder='Precio MS'></td>";
            echo "<td class = 'CeldaParaLíneaSerie'><input id='InputLíneaSerie' name='LíneaSerie' type='text' placeholder='Línea'></th>";
            echo "<td class = 'CeldaParaModelo'><input id='InputModelo' name='Modelo' type='text' required='' placeholder='Modelo*'></td>";
            echo "<td class = 'CeldaParaDescripción'><input id='InputDescripción' name='Descripción' type='text' placeholder='Descripción'></td>";
            echo "<td class = 'CeldaParaBarras'><input id='InputBarras' name='Barras' type='text' required='' placeholder='Código de barras*'></td>";
            echo "<td class = 'CeldaParaSKU'><input id='InputSKU' name='SKU' type='text' placeholder='Código universal de producto (SKU)'></td>";
            echo "</tr>";
            ?>
        </table>
        <script src="JavaScript/AsistenteLlenadoFormulario.js"></script>
        <?php
        echo "<input class='BotónEstándar' type='submit'>";
        echo "</form>";
        ?>
    </div>
    <form action="CargaCSV.php" method="post" enctype="multipart/form-data" target="_blank">
        <p>
            Sube archivos:
            <input type="file" name="DatosCSV" accept=".csv">
            <input type="submit" value="Upload" name="EnviarArchivo">
        </p>
    </form>
    <?php
    if (isset($_SESSION['message']) && $_SESSION['message']) {
        printf('<b>%s</b>', $_SESSION['message']);
        unset($_SESSION['message']);
    }
    ?>
</body>

</html>