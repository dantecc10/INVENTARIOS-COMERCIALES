<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/El Mundo del Regalo - LOGO.png">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("Inicio de sesión.php"); //Corregir

    if ($Acceso == True) {
        $url = ($_POST["Acción"] . ".php");
        header("location$url");
        echo "<p>Usted tiene autorización para administrar esta parte del sitio web...</p><br>";
    } else {
        $url = ("Consulta.php");
        header("location$url");
        echo "<p>Inicie sesión con credenciales válidas para ir a otras secciones...</p><br>";
    }


    ?>
</body>

</html>