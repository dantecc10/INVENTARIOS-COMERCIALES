<!DOCTYPE html>
<html>

<head>
</head>

<body>

  <?php
  echo "<script>console.log('Saludos del servidor');</script>";
  $ID = strval($_GET['ID']);
  $Marca = ($_GET['Marca']);
  $LíneaSerie = ($_GET['LíneaSerie']);
  $Modelo = ($_GET['Modelo']);
  $Barras = ($_GET['Barras']);
  $SKU = ($_GET['SKU']);
  //  $ModoFiltro = ($_GET['ModoFiltro']);
  $sql;
  /*
  Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
  */
  function FiltrosOptimizados($ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU, $sql)
  {
    $Filtros = array("", $ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU);
    echo ("ID es: " . $Filtros[1] . "<br>");
    echo ("Marca es: " . $Filtros[2] . "<br>");
    echo ("LíneaSerie es: " . $Filtros[3] . "<br>");
    echo ("Modelo es: " . $Filtros[4] . "<br>");
    echo ("Barras es: " . $Filtros[5] . "<br>");
    echo ("SKU es: " . $Filtros[6] . "<br>");
    $SQLBase = "SELECT * FROM juguete WHERE ";
    if ($ID != "") {
      $SQLBase = ($SQLBase . " `ID` = '" . $ID . "'");
    } else {
      $SQLBase = ($SQLBase . " (`ID` != '' OR `ID` != NULL)");
    }
    if ($Marca != "") {
      $SQLBase = ($SQLBase . " AND `Marca` = '" . $Marca . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Marca` != '' OR `Marca` != NULL)");
    }
    if ($LíneaSerie != "") {
      $SQLBase = ($SQLBase . " AND `Línea / Serie` = '" . $LíneaSerie . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Línea / Serie` != '' OR `Línea / Serie` != NULL)");
    }
    if ($Modelo != "") {
      $SQLBase = ($SQLBase . " AND `Modelo` = '" . $Modelo . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Modelo` != '' OR `Modelo` != NULL)");
    }
    if ($Barras != "") {
      $SQLBase = ($SQLBase . " AND `Barras` = '" . $Barras . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Barras` != '' OR `Barras` != NULL)");
    }
    if ($SKU != "") {
      $SQLBase = ($SQLBase . " AND `SKU` = '" . $SKU . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`SKU` != '' OR `SKU` != NULL)");
    }
    $sql = $SQLBase;
    ConstruirTabla($sql);
  };
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












  //FiltradoGeneral($ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU, $sql);

  function FiltradoGeneral($ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU, $sql) /*En desarrollo: NO LLAMAR*/
  {
    $Filtros = array("", $ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU);
    echo ("ID es: " . $Filtros[1] . "<br>");
    echo ("Marca es: " . $Filtros[2] . "<br>");
    echo ("LíneaSerie es: " . $Filtros[3] . "<br>");
    echo ("Modelo es: " . $Filtros[4] . "<br>");
    echo ("Barras es: " . $Filtros[5] . "<br>");
    echo ("SKU es: " . $Filtros[6] . "<br>");

    $SQLBase = "SELECT * FROM juguete WHERE ";

    if ($ID != "") {
      $SQLBase = ($SQLBase . " `ID` = '" . $ID . "'");
    } else {
      $SQLBase = ($SQLBase . " (`ID` != '' OR `ID` != NULL)");
    }
    if ($Marca != "") {
      $SQLBase = ($SQLBase . " AND `Marca` = '" . $Marca . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Marca` != '' OR `Marca` != NULL)");
    }
    if ($LíneaSerie != "") {
      $SQLBase = ($SQLBase . " AND `Línea / Serie` = '" . $LíneaSerie . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Línea / Serie` != '' OR `Línea / Serie` != NULL)");
    }
    if ($Modelo != "") {
      $SQLBase = ($SQLBase . " AND `Modelo` = '" . $Modelo . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Modelo` != '' OR `Modelo` != NULL)");
    }
    if ($Barras != "") {
      $SQLBase = ($SQLBase . " AND `Barras` = '" . $Barras . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`Barras` != '' OR `Barras` != NULL)");
    }
    if ($SKU != "") {
      $SQLBase = ($SQLBase . " AND `SKU` = '" . $SKU . "'");
    } else {
      $SQLBase = ($SQLBase . " AND (`SKU` != '' OR `SKU` != NULL)");
    }
    ConstruirTabla($sql);

    /*
    echo "<script>console.log('Aquí empieza for:')</script>";
    for ($i = 1; $i == 7; $i++) {
      echo ($i . "<br>");
      switch ($i) {
        case 1:
          echo "<script>console.log('Pasando por el case 1...')</script>";
          if ($Filtros[$i] != "") {
            $SQLBase = ($SQLBase . "`ID` = " . $Filtros[$i] . "");
            echo "<script>console.log('ID no es nulo')</script>";
          } else {
            echo "<script>console.log('ID es nulo')</script>";
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        case 2:
          echo "<script>console.log('Pasando por el case 2...')</script>";
          if ($Filtros[$i] != "") {
            if ($SQLBase != "SELECT * FROM juguete WHERE " && $SQLBase != "SELECT * FROM juguete WHERE") {
              $SQLBase = ($SQLBase . " AND `Marca` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Marca no es nula')</script>";
            } else {
              $SQLBase = ($SQLBase . "`Marca` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Marca es nula')</script>";
            }
          } else {
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        case 3:
          echo "<script>console.log('Pasando por el case 3...')</script>";
          if ($Filtros[$i] != "") {
            if ($SQLBase != "SELECT * FROM juguete WHERE " && $SQLBase != "SELECT * FROM juguete WHERE") {
              $SQLBase = ($SQLBase . " AND `Línea / Serie` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Línea o serie no es nula')</script>";
            } else {
              $SQLBase = ($SQLBase . "`Línea / Serie` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Línea o serie es nula')</script>";
            }
          } else {
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        case 4:
          echo "<script>console.log('Pasando por el case 4...')</script>";
          if ($Filtros[$i] != "") {
            if ($SQLBase != "SELECT * FROM juguete WHERE " && $SQLBase != "SELECT * FROM juguete WHERE") {
              $SQLBase = ($SQLBase . " AND `Modelo` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Modelo es nulo')</script>";
            } else {
              $SQLBase = ($SQLBase . "`Modelo` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Modelo no es nulo')</script>";
            }
          } else {
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        case 5:
          echo "<script>console.log('Pasando por el case 5...')</script>";
          if ($Filtros[$i] != "") {
            if ($SQLBase != "SELECT * FROM juguete WHERE " && $SQLBase != "SELECT * FROM juguete WHERE") {
              $SQLBase = ($SQLBase . " AND `Barras` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Barras es nulo')</script>";
            } else {
              $SQLBase = ($SQLBase . "`Barras` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('Barras es nulo')</script>";
            }
          } else {
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        case 6:
          echo "<script>console.log('Pasando por el case 6...')</script>";
          if ($Filtros[$i] != "") {
            if ($SQLBase != "SELECT * FROM juguete WHERE " && $SQLBase != "SELECT * FROM juguete WHERE") {
              $SQLBase = ($SQLBase . " AND `SKU` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('SKU es nulo')</script>";
            } else {
              $SQLBase = ($SQLBase . "`SKU` = '" . $Filtros[$i] . "'");
              echo "<script>console.log('SKU es nulo')</script>";
            }
          } else {
          }
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
        default:
          echo "<script>console.log('Pasando por el default...')</script>";
          echo "<script lang='javascript'>console.log('Hubo un error en el select...')</script>";
          echo "<script>console.log('SQL = " . $SQLBase . "')</script>";
          break;
      }
    }
    */
    $sql = $SQLBase;
    echo "<script>console.log('Aquí termina for:')</script>";
    ConstruirTabla($sql);
  };
  /*
  switch ($ModoFiltro) {
    case 'ID':
      break;
    case 'Marca':
      break;
    case 'LíneaSerie':
      break;
    case 'Modelo':
      break;
    case 'Barras':
      break;
    case 'SKU':
      break;
    case 'Todo':
      FiltradoGeneral($ID, $Marca, $LíneaSerie, $Modelo, $Barras, $SKU, $sql);
      break;
    default:
      echo "Error al recibir o decodificar la variable indicadora de filtro...";
      break;
  }
  */
  ?>
</body>

</html>