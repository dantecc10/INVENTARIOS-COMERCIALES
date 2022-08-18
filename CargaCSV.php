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
    <title>Carga de CSV</title>
</head>

<body>
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
    require_once('Conexión.php');
    session_start();

    $message = '';
    if (isset($_POST['EnviarArchivo']) && $_POST['EnviarArchivo'] == 'Upload') {
        if (isset($_FILES['DatosCSV']) && $_FILES['DatosCSV']['error'] === UPLOAD_ERR_OK) {
            // get details of the uploaded file
            $fileTmpPath = $_FILES['DatosCSV']['tmp_name'];
            $fileName = $_FILES['DatosCSV']['name'];
            $fileSize = $_FILES['DatosCSV']['size'];
            $fileType = $_FILES['DatosCSV']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            echo ($fileTmpPath . "<br>");
            echo ($fileName . "<br>");
            echo ($fileSize . "<br>");
            echo ($fileType . "<br>");
            //echo ($fileNameCmps . "<br>");
            echo ($fileExtension . "<br>");
            // sanitize file-name
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // check if file has one of the following extensions
            $allowedfileExtensions = array('csv');
            echo ($newFileName . "<br>");
            if (in_array($fileExtension, $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved
                $uploadFileDir = './CargasCSV/';
                $dest_path = $uploadFileDir . $newFileName;
                echo ($uploadFileDir . "<br>");
                echo ($dest_path . "<br>");
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $message = 'File is successfully uploaded.';
                } else {
                    $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                }
            } else {
                $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
            }
        } else {
            $message = 'There is some error in the file upload. Please check the following error.<br>';
            $message .= 'Error:' . $_FILES['DatosCSV']['error'];
        }
    }
    $_SESSION['message'] = $message;



    //$ID = $_POST['ID'];
    //$Artículo = $_POST['Artículo'];
    //$Marca = $_POST['Marca'];
    //$Cantidad = $_POST['Cantidad'];
    //$PrecioL = $_POST['PrecioL'];
    //$PrecioML = $_POST['PrecioML'];
    //$PrecioMS = $_POST['PrecioMS'];
    //$LíneaSerie = $_POST['LíneaSerie'];
    //$Modelo = $_POST['Modelo'];
    //$Descripción = $_POST['Descripción'];
    //$Barras = $_POST['Barras'];
    //$SKU = $_POST['SKU'];
    $CSVurl;
    $Comilla = '"';
    $SaltoLínea = "\n";
    if (is_string($SaltoLínea)) {
        echo $SaltoLínea;
    }

    //$result = mysqli_query($conn, $sql);
    $sql = ("LOAD DATA INFILE  
    '" . "D:/MEGA/MEGA CLOUD/DANTE/ACADÉMICO/INVENTARIOS-COMERCIALES/" . $dest_path . "'
    INTO TABLE `juguete`  
    FIELDS TERMINATED BY ',' 
    ENCLOSED BY '\"' 
        LINES TERMINATED BY '\n'
    IGNORE 1 ROWS
    (`ID`, `Artículo`, `Marca`, `Cantidad`, `Precio L`, `Precio ML`, `Precio MS`, `Línea / Serie`, `Modelo`, `Descripción`, `Barras`, `SKU`)"
    );
    echo ("SQL de carga: " . $sql . "<br>");
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
        header("refresh:8;url=Consulta.php");
    }

    ?>
    <script src="JavaScript/AjaxFiltros.js"></script>
</body>

</html>