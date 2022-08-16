<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA CLARO.css" Type="text/css" MEDIA="screen">
    <link rel="icon" href="IMG/El Mundo del Regalo - LOGO.png">
    <title>Document</title>
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
    <br>
    <br>
    <div id="ContenedorCatálogo">
        <table class="Catálogo">
            <tr class="Fila1">
                <th class="CeldaParaID">ID</th>
                <th class="CeldaParaArtículo">Artículo</th>
                <th class="CeldaParaMarca">Marca</th>
                <th class="CeldaParaCantidad">Cantidad</th>
                <th class="CeldaParaPrecioL">Precio local</th>
                <th class="CeldaParaPrecioML">Precio ML</th>
                <th class="CeldaParaPrecioMS">Precio MS</th>
                <th class="CeldaParaLíneaSerie">Línea / Serie</th>
                <th class="CeldaParaModelo">Modelo</th>
                <th class="CeldaParaDescripción">Descripción</th>
                <th class="CeldaParaBarras">Barras</th>
                <th class="CeldaParaSKU">SKU</th>
            </tr>
            <tr id="FilaFormulario">
                <form action="Inserción.php" method="post">
                    <td class="CeldaParaID"><input id="InputID" name="ID" type="number" required="" placeholder="ID*"></td>
                    <td class="CeldaParaArtículo"><input id="InputArtículo" name="Artículo" type="text" required="" placeholder="Artículo*"></td>
                    <td class="CeldaParaMarca"><input id="InputMarca" name="Marca" type="text" required="" placeholder="Marca*"></td>
                    <td class="CeldaParaCantidad"><input id="InputCantidad" name="Cantidad" type="number" required="" placeholder="Existencia*"></td>
                    <td class="CeldaParaPrecioL"><label for="PrecioML">$</label><input id="InputPrecioL" onchange="javascript:CálculoAsistidoDePrecios()" name="PrecioL" type="number" step="any" required="" placeholder="Precio*"></td>
                    <td class="CeldaParaPrecioML"><label for="PrecioML">$</label><input id="InputPrecioML" name="PrecioML" type="number" step="any" required="" placeholder="Precio ML*"></td>
                    <td class="CeldaParaPrecioMS"><label for="PrecioML">$</label><input id="InputPrecioMS" name="PrecioMS" type="number" step="any" placeholder="Precio MS"></td>
                    <td class="CeldaParaLíneaSerie"><input id="InputLíneaSerie" name="LíneaSerie" type="text" placeholder="Línea"></td>
                    <td class="CeldaParaModelo"><input id="InputModelo" name="Modelo" type="text" required="" placeholder="Modelo*"></td>
                    <td class="CeldaParaDescripción"><input id="InputDescripción" name="Descripción" type="text" placeholder="Descripción"></td>
                    <td class="CeldaParaBarras"><input id="InputBarras" name="Barras" type="text" required="" placeholder="Código de barras*"></td>
                    <td class="CeldaParaSKU"><input id="InputSKU" name="SKU" type="text" placeholder="Código universal de producto (SKU)"></td>
                </form>
            </tr>
        </table>
        <input class="BotónEstándar" type="submit">
    </div>
</body>

</html>