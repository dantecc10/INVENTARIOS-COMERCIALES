<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>El Mundo del Regalo</h1>
    <p>Bienvenido, si tiene una cuenta, inicie sesión, de lo contrario, puede consultar el catálogo en el siguiente enlace:
    </p>
    <form action="Inicio de sesión.php" method="POST">
        <label for="userEmail">Correo electrónico:</label><br>
        <input name="userEmail" type="email" required="" placeholder="Dirección de correo electrónico:*"><br><br>

        <label for="userPassword">Contraseña:</label><br>
        <input name="userPassword" type="password" required="" placeholder="Contraseña*"><br><br>

        <input type="submit">
    </form>
    <?php
    echo "<script lang='JavaScript'>console.log(Esto fue escrito con PHP...)<script>";
    ?>
</body>

</html>